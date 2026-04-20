<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;

class JournalDashboardController extends Controller
{
    public function dashboard(Journal $journal)
    {
        $menuCount = $journal->menus()->count();
        $pageCount = $journal->pages()->count();
        $indexingCount = $journal->indexings()->count();

        return view('admin.journal.dashboard', compact(
            'journal',
            'menuCount',
            'pageCount',
            'indexingCount'
        ));
    }
}