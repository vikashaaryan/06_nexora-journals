<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Journal $journal)
    {
        $pages = Page::where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.page.index', compact('journal', 'pages'));
    }

    public function create(Journal $journal)
    {
        $page = null;
        return view('admin.page.form', compact('journal', 'page'));
    }

    public function store(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'show_eboard_list' => 'required|in:0,1',
            'eboard_limit' => 'nullable|integer|min:1',
            'show_issue_volume' => 'required|in:0,1',
            'page_link' => 'nullable|string|max:255',
            'long_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keyword' => 'nullable|string',
            'is_active' => 'required|in:0,1',
        ]);

        $data['journal_id'] = $journal->id;
        $data['show_eboard_list'] = (bool) $data['show_eboard_list'];
        $data['show_issue_volume'] = (bool) $data['show_issue_volume'];
        $data['is_active'] = (bool) $data['is_active'];

        Page::create($data);

        return redirect()
            ->route('admin.journal.pages.index', $journal->id)
            ->with('success', 'Page created successfully.');
    }

    public function edit(Journal $journal, Page $page)
    {
        abort_if($page->journal_id != $journal->id, 404);

        return view('admin.page.form', compact('journal', 'page'));
    }

    public function update(Request $request, Journal $journal, Page $page)
    {
        abort_if($page->journal_id != $journal->id, 404);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'show_eboard_list' => 'required|in:0,1',
            'eboard_limit' => 'nullable|integer|min:1',
            'show_issue_volume' => 'required|in:0,1',
            'page_link' => 'nullable|string|max:255',
            'long_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keyword' => 'nullable|string',
            'is_active' => 'required|in:0,1',
        ]);

        $data['journal_id'] = $journal->id;
        $data['show_eboard_list'] = (bool) $data['show_eboard_list'];
        $data['show_issue_volume'] = (bool) $data['show_issue_volume'];
        $data['is_active'] = (bool) $data['is_active'];

        $page->update($data);

        return redirect()
            ->route('admin.journal.pages.index', $journal->id)
            ->with('success', 'Page updated successfully.');
    }

    public function destroy(Journal $journal, Page $page)
    {
        abort_if($page->journal_id != $journal->id, 404);

        $page->delete();

        return back()->with('success', 'Page deleted successfully.');
    }
}