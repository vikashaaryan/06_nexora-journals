<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Issue;
use App\Models\Journal;
use App\Models\Volume;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Journal $journal)
    {
        $articles = Article::with(['volume', 'issue'])
            ->where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.article.index', compact('journal', 'articles'));
    }

    public function create(Journal $journal)
    {
        $article = null;

        $volumes = Volume::where('journal_id', $journal->id)
            ->where('is_active', 1)
            ->orderBy('name')
            ->get();

        $issues = Issue::where('journal_id', $journal->id)
            ->where('is_active', 1)
            ->orderBy('name')
            ->get();

        return view('admin.article.form', compact('journal', 'article', 'volumes', 'issues'));
    }

    public function store(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'paper_title' => 'required|string|max:255',
            'article_type' => 'nullable|string|max:255',
            'author_name' => 'required|string|max:255',
            'volume_id' => 'nullable|exists:volumes,id',
            'issue_id' => 'nullable|exists:issues,id',
            'page_number' => 'nullable|string|max:255',
            'year' => 'nullable|digits:4',
            'doi' => 'nullable|string|max:255',
            'keywords' => 'nullable|string|max:255',
            'abstract' => 'nullable|string',
            'upload_link' => 'nullable|string|max:255',
            'upload_doc' => 'nullable|file|mimes:pdf,doc,docx|max:51200',
            'is_active' => 'nullable|boolean',
        ]);

        if (!empty($data['volume_id'])) {
            $volume = Volume::where('journal_id', $journal->id)->where('id', $data['volume_id'])->first();
            if (!$volume) {
                return back()->withErrors(['volume_id' => 'Selected volume does not belong to this journal.'])->withInput();
            }
        }

        if (!empty($data['issue_id'])) {
            $issue = Issue::where('journal_id', $journal->id)->where('id', $data['issue_id'])->first();
            if (!$issue) {
                return back()->withErrors(['issue_id' => 'Selected issue does not belong to this journal.'])->withInput();
            }
        }

        if ($request->hasFile('upload_doc')) {
            $data['upload_doc'] = $request->file('upload_doc')->store('articles', 'public');
        }

        $data['journal_id'] = $journal->id;
        $data['is_active'] = $request->has('is_active');

        Article::create($data);

        return redirect()
            ->route('admin.journal.articles.index', $journal->id)
            ->with('success', 'Article created successfully.');
    }

    public function edit(Journal $journal, Article $article)
    {
        abort_if($article->journal_id != $journal->id, 404);

        $volumes = Volume::where('journal_id', $journal->id)
            ->where('is_active', 1)
            ->orderBy('name')
            ->get();

        $issues = Issue::where('journal_id', $journal->id)
            ->where('is_active', 1)
            ->orderBy('name')
            ->get();

        return view('admin.article.form', compact('journal', 'article', 'volumes', 'issues'));
    }

    public function update(Request $request, Journal $journal, Article $article)
    {
        abort_if($article->journal_id != $journal->id, 404);

        $data = $request->validate([
            'paper_title' => 'required|string|max:255',
            'article_type' => 'nullable|string|max:255',
            'author_name' => 'required|string|max:255',
            'volume_id' => 'nullable|exists:volumes,id',
            'issue_id' => 'nullable|exists:issues,id',
            'page_number' => 'nullable|string|max:255',
            'year' => 'nullable|digits:4',
            'doi' => 'nullable|string|max:255',
            'keywords' => 'nullable|string|max:255',
            'abstract' => 'nullable|string',
            'upload_link' => 'nullable|string|max:255',
            'upload_doc' => 'nullable|file|mimes:pdf,doc,docx|max:51200',
            'is_active' => 'nullable|boolean',
        ]);

        if (!empty($data['volume_id'])) {
            $volume = Volume::where('journal_id', $journal->id)->where('id', $data['volume_id'])->first();
            if (!$volume) {
                return back()->withErrors(['volume_id' => 'Selected volume does not belong to this journal.'])->withInput();
            }
        }

        if (!empty($data['issue_id'])) {
            $issue = Issue::where('journal_id', $journal->id)->where('id', $data['issue_id'])->first();
            if (!$issue) {
                return back()->withErrors(['issue_id' => 'Selected issue does not belong to this journal.'])->withInput();
            }
        }

        if ($request->hasFile('upload_doc')) {
            $data['upload_doc'] = $request->file('upload_doc')->store('articles', 'public');
        }

        $data['journal_id'] = $journal->id;
        $data['is_active'] = $request->has('is_active');

        $article->update($data);

        return redirect()
            ->route('admin.journal.articles.index', $journal->id)
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(Journal $journal, Article $article)
    {
        abort_if($article->journal_id != $journal->id, 404);

        $article->delete();

        return back()->with('success', 'Article deleted successfully.');
    }
}