<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Eboard;
use App\Models\Issue;
use App\Models\Journal;
use App\Models\ManuScript;
use App\Models\Menu;
use App\Models\Volume;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
   public function home()
{
    $stats = [
        ['count' => Journal::where('is_active', 1)->count(), 'label' => 'Journals'],
        ['count' => Article::where('is_active', 1)->count(), 'label' => 'Articles Published'],
        ['count' => Eboard::where('is_active', 1)->count(), 'label' => 'Editorial Members'],
        ['count' => ManuScript::count(), 'label' => 'Authors Worldwide'],
    ];

    $indexingBodies = [
        'PubMed',
        'PubMed Central',
        'Crossref',
        'Google Scholar',
        'DOAJ',
        'Creative Commons',
    ];

    $features = [
        [
            'title' => 'Rigorous Peer Review',
            'description' => 'Every submission undergoes double-blind review by independent domain experts to ensure scientific validity and integrity.',
            'icon' => '🔒',
        ],
        [
            'title' => 'PubMed Indexed',
            'description' => 'Multiple journals indexed in PubMed and PMC for maximum discoverability and citation impact worldwide.',
            'icon' => '🌍',
        ],
        [
            'title' => 'Rapid Publication',
            'description' => 'Streamlined editorial workflows ensure timely decisions and fast publication of accepted manuscripts.',
            'icon' => '⚡',
        ],
        [
            'title' => 'Fully Open Access',
            'description' => 'All content is permanently free to read, share, and reuse under CC BY 4.0 — no paywalls, ever.',
            'icon' => '🔓',
        ],
    ];

    $subjects = \App\Models\Subject::where('is_active', 1)
        ->latest()
        ->take(6)
        ->get();

    $articles = Article::with('journal')
        ->where('is_active', 1)
        ->latest()
        ->take(6)
        ->get();

    $countries = [
        'USA & Americas' => ['USA', 'Brazil', 'Canada', 'Mexico'],
        'Asia-Pacific & Middle East' => ['Australia', 'China', 'India', 'Japan', 'Malaysia', 'Singapore', 'South Korea', 'UAE'],
        'Europe' => ['Austria', 'Denmark', 'France', 'Germany', 'Italy', 'Netherlands', 'Spain', 'UK'],
    ];

    $featuredJournals = Journal::where('is_active', 1)
        ->latest()
        ->take(12)
        ->get();

    return view('home', compact(
        'stats',
        'indexingBodies',
        'features',
        'subjects',
        'articles',
        'countries',
        'featuredJournals'
    ));
}

public function subjectJournals(\App\Models\Subject $subject)
{
    $journals = Journal::where('subject_id', $subject->id)
        ->where('is_active', 1)
        ->latest()
        ->get();

    return view('subject-journals', compact('subject', 'journals'));
}    public function about()
    {
        return view('about');
    }

    public function journals()
    {
        $journals = Journal::where('is_active', 1)->latest()->get();

        return view('journals', compact('journals'));
    }

    public function journalDetails(Journal $journal)
    {
        $menus = $journal->menus()
            ->with('page')
            ->where('is_active', 1)
            ->orderBy('sort_order')
            ->get();

        $activeMenu = $menus->first();
        $page = $activeMenu?->page;
        $indexings = $journal->indexings()->get();

        $pageData = $this->buildJournalPageData($journal, $page);

        return view('journal-details', array_merge([
            'journal' => $journal,
            'menus' => $menus,
            'activeMenu' => $activeMenu,
            'page' => $page,
            'indexings' => $indexings,
        ], $pageData));
    }

    public function journalMenuPage(Journal $journal, Menu $menu)
    {
        if ($menu->journal_id != $journal->id) {
            abort(404);
        }

        $menus = $journal->menus()
            ->with('page')
            ->where('is_active', 1)
            ->orderBy('sort_order')
            ->get();

        $activeMenu = $menu;
        $page = $menu->page;
        $indexings = $journal->indexings()->get();

        $pageData = $this->buildJournalPageData($journal, $page);

        return view('journal-details', array_merge([
            'journal' => $journal,
            'menus' => $menus,
            'activeMenu' => $activeMenu,
            'page' => $page,
            'indexings' => $indexings,
        ], $pageData));
    }

    private function buildJournalPageData(Journal $journal, $page): array
    {
        $pageKey = '';

        if ($page) {
            $pageKey = Str::slug($page->page_link ?: $page->title);
        }

        $eboards = collect();
        $archiveGroups = collect();
        $earlyViewArticles = collect();
        $currentIssueArticles = collect();
        $latestCurrentIssue = null;

        if ($page && $page->show_eboard_list) {
            $eboardQuery = Eboard::where('journal_id', $journal->id)
                ->where('is_active', 1)
                ->latest();

            if (! empty($page->eboard_limit)) {
                $eboardQuery->limit((int) $page->eboard_limit);
            }

            $eboards = $eboardQuery->get();
        }

        if ($page && $page->show_issue_volume) {
            $articleBaseQuery = Article::with(['volume', 'issue'])
                ->where('journal_id', $journal->id)
                ->where('is_active', 1);

            // archive page
            if (Str::contains($pageKey, 'archive')) {
                $archiveArticles = (clone $articleBaseQuery)
                    ->whereNotNull('year')
                    ->orderByDesc('year')
                    ->orderByDesc('created_at')
                    ->get()
                    ->groupBy('year');

                $archiveGroups = $archiveArticles->map(function ($items, $year) {
                    $uniqueItems = $items->filter(function ($article) {
                        return $article->volume || $article->issue;
                    })->unique(function ($article) {
                        return ($article->volume?->name ?? '').'|'.($article->issue?->name ?? '');
                    })->values();

                    return [
                        'year' => $year,
                        'items' => $uniqueItems,
                    ];
                })->values();
            }

            // early view / inpress page
            if (
                Str::contains($pageKey, 'early-view') ||
                Str::contains($pageKey, 'inpress') ||
                Str::contains($pageKey, 'articles-early-view')
            ) {
                $earlyViewArticles = (clone $articleBaseQuery)
                    ->latest()
                    ->get();
            }

            // current issue page
            if (Str::contains($pageKey, 'current-issue')) {
                $latestCurrentIssue = Issue::where('journal_id', $journal->id)
                    ->where('is_active', 1)
                    ->where('show_on_frontend', 1)
                    ->latest()
                    ->first();

                if ($latestCurrentIssue) {
                    $currentIssueArticles = (clone $articleBaseQuery)
                        ->where('issue_id', $latestCurrentIssue->id)
                        ->latest()
                        ->get();
                }
            }
        }

        return [
            'pageKey' => $pageKey,
            'eboards' => $eboards,
            'archiveGroups' => $archiveGroups,
            'earlyViewArticles' => $earlyViewArticles,
            'currentIssueArticles' => $currentIssueArticles,
            'latestCurrentIssue' => $latestCurrentIssue,
        ];
    }

    public function journalIssueArticles(Journal $journal, Volume $volume, Issue $issue)
    {
        if ($volume->journal_id != $journal->id || $issue->journal_id != $journal->id) {
            abort(404);
        }

        $menus = $journal->menus()
            ->with('page')
            ->where('is_active', 1)
            ->orderBy('sort_order')
            ->get();

        $activeMenu = $menus->firstWhere(function ($menu) {
            return $menu->page && Str::contains(
                Str::slug($menu->page->page_link ?: $menu->page->title),
                'archive'
            );
        });

        $page = $activeMenu?->page;
        $indexings = $journal->indexings()->get();

        $articles = Article::with(['volume', 'issue'])
            ->where('journal_id', $journal->id)
            ->where('volume_id', $volume->id)
            ->where('issue_id', $issue->id)
            ->where('is_active', 1)
            ->latest()
            ->get();

        return view('journal-issue-articles', compact(
            'journal',
            'menus',
            'activeMenu',
            'page',
            'indexings',
            'volume',
            'issue',
            'articles'
        ));
    }

    public function manusubmit()
    {
        $journals = Journal::where('is_active', 1)
            ->orderBy('title')
            ->get();

        return view('manu-submit', compact('journals'));
    }

    public function manusubmitStore(Request $request)
    {
        $validated = $request->validate([
            'journal_id' => 'required|exists:journals,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'affiliation' => 'nullable|string|max:255',
            'manuscript_title' => 'required|string|max:255',
            'abstract' => 'required|string',
            'keywords' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:51200',
            'co_authors.*.name' => 'nullable|string|max:255',
            'co_authors.*.email' => 'nullable|email|max:255',
            'declaration_one' => 'required',
            'declaration_two' => 'required',
            'declaration_three' => 'required',
        ]);

        $filePath = null;

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('manuscripts', 'public');
        }

        $coAuthors = collect($request->co_authors ?? [])
            ->filter(function ($author) {
                return ! empty($author['name']) || ! empty($author['email']);
            })
            ->values()
            ->toArray();

        ManuScript::create([
            'journal_id' => $validated['journal_id'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'affiliation' => $validated['affiliation'] ?? null,
            'manuscript_title' => $validated['manuscript_title'],
            'abstract' => $validated['abstract'],
            'keywords' => $validated['keywords'] ?? null,
            'file' => $filePath,
            'co_authors' => $coAuthors,
            'declaration_one' => $request->has('declaration_one'),
            'declaration_two' => $request->has('declaration_two'),
            'declaration_three' => $request->has('declaration_three'),
        ]);

        return redirect()->route('journal.submit')->with('success', 'Manuscript submitted successfully.');
    }
    public function search(Request $request)
{
    $query = trim($request->get('search', ''));

    $articles = collect();
    $journals = collect();
    $subjects = collect();

    if ($query !== '') {
        $articles = Article::with('journal')
            ->where('is_active', 1)
            ->where(function ($q) use ($query) {
                $q->where('paper_title', 'like', "%{$query}%")
                  ->orWhere('author_name', 'like', "%{$query}%")
                  ->orWhere('doi', 'like', "%{$query}%")
                  ->orWhere('keywords', 'like', "%{$query}%")
                  ->orWhere('abstract', 'like', "%{$query}%");
            })
            ->latest()
            ->get();

        $journals = Journal::where('is_active', 1)
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('issn', 'like', "%{$query}%")
                  ->orWhere('nlm_id', 'like', "%{$query}%");
            })
            ->latest()
            ->get();

        $subjects = \App\Models\Subject::where('is_active', 1)
            ->where(function ($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('short_description', 'like', "%{$query}%")
                  ->orWhere('description', 'like', "%{$query}%");
            })
            ->latest()
            ->get();
    }

    return view('search', compact('query', 'articles', 'journals', 'subjects'));
}

    public function apc()
    {
        $apcCards = [];
        $apcRows = [];

        return view('apc', compact('apcCards', 'apcRows'));
    }

    public function editorial()
    {
        return view('editorial-process');
    }

    public function membership()
    {
        return view('membership');
    }

    public function guidelines()
    {
        return view('guidelines');
    }

    public function contact()
    {
        return view('contact');
    }
}
