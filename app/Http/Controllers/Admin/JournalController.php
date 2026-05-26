<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::latest()->get();
        return view('admin.journal.journal-manage', compact('journals'));
    }

   public function create()
{
    $journal = null;
    $subjects = Subject::where('is_active', 1)->orderBy('title')->get();

    return view('admin.journal.journal-create', compact('journal', 'subjects'));
}

public function edit(Journal $journal)
{
    $subjects = Subject::where('is_active', 1)->orderBy('title')->get();

    return view('admin.journal.journal-create', compact('journal', 'subjects'));
}

public function store(Request $request)
{
    $data = $request->validate([
        'subject_id' => 'required|exists:subjects,id',
        'title' => 'required|string|max:255',
        'issn' => 'required|string|max:255|unique:journals,issn',
        'nlm_id' => 'nullable|string|max:255',
        'impact_factor' => 'nullable|numeric',
        'is_active' => 'required|in:0,1',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = 'storage/' . $request->file('image')->store('journals', 'public');
    }

    Journal::create($data);

    return redirect()->route('admin.journals')->with('success', 'Journal created successfully.');
}

public function update(Request $request, Journal $journal)
{
    $data = $request->validate([
        'subject_id' => 'required|exists:subjects,id',
        'title' => 'required|string|max:255',
        'issn' => 'required|string|max:255|unique:journals,issn,' . $journal->id,
        'nlm_id' => 'nullable|string|max:255',
        'impact_factor' => 'nullable|numeric',
        'is_active' => 'required|in:0,1',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = 'storage/' . $request->file('image')->store('journals', 'public');
    }

    $journal->update($data);

    return redirect()->route('admin.journals')->with('success', 'Journal updated successfully.');
}

    public function destroy(Journal $journal)
    {
        if ($journal->image && File::exists(public_path($journal->image))) {
            File::delete(public_path($journal->image));
        }

        $journal->delete();

        return redirect()->route('admin.journals')->with('success', 'Journal deleted successfully.');
    }
}