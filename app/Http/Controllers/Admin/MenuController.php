<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index(Journal $journal)
    {
        $menus = Menu::with(['journal', 'page', 'parent'])
            ->where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.menu.index', compact('journal', 'menus'));
    }

    public function create(Journal $journal)
    {
        $menu = null;

        $pages = Page::where('journal_id', $journal->id)
            ->where('is_active', 1)
            ->get();

        $parents = Menu::where('journal_id', $journal->id)
            ->whereNull('parent_id')
            ->get();

        return view('admin.menu.form', compact('journal', 'menu', 'pages', 'parents'));
    }

    public function store(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'page_id' => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menus,id',
            'menu' => 'nullable|string|max:255',
            'menu_type' => 'required|in:page,custom',
            'menu_name' => 'required|string|max:255',
            'menu_link' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        if ($request->menu_type === 'page' && !$request->page_id) {
            return back()->withErrors([
                'page_id' => 'Please select a page for page type menu.'
            ])->withInput();
        }

        if ($request->menu_type === 'custom') {
            $data['page_id'] = null;
        }

        $data['journal_id'] = $journal->id;
        $data['slug'] = Str::slug($request->menu_name);

        Menu::create($data);

        return redirect()->route('admin.journal.menus.index', $journal->id)
            ->with('success', 'Menu created successfully.');
    }

    public function edit(Journal $journal, Menu $menu)
    {
        abort_if($menu->journal_id != $journal->id, 404);

        $pages = Page::where('journal_id', $journal->id)
            ->where('is_active', 1)
            ->get();

        $parents = Menu::where('journal_id', $journal->id)
            ->whereNull('parent_id')
            ->where('id', '!=', $menu->id)
            ->get();

        return view('admin.menu.form', compact('journal', 'menu', 'pages', 'parents'));
    }

    public function update(Request $request, Journal $journal, Menu $menu)
    {
        abort_if($menu->journal_id != $journal->id, 404);

        $data = $request->validate([
            'page_id' => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menus,id',
            'menu' => 'nullable|string|max:255',
            'menu_type' => 'required|in:page,custom',
            'menu_name' => 'required|string|max:255',
            'menu_link' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        if ($request->menu_type === 'page' && !$request->page_id) {
            return back()->withErrors([
                'page_id' => 'Please select a page for page type menu.'
            ])->withInput();
        }

        if ($request->menu_type === 'custom') {
            $data['page_id'] = null;
        }

        $data['journal_id'] = $journal->id;
        $data['slug'] = Str::slug($request->menu_name);

        $menu->update($data);

        return redirect()->route('admin.journal.menus.index', $journal->id)
            ->with('success', 'Menu updated successfully.');
    }

    public function destroy(Journal $journal, Menu $menu)
    {
        abort_if($menu->journal_id != $journal->id, 404);

        $menu->delete();

        return back()->with('success', 'Menu deleted successfully.');
    }
}