<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
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
        return view('admin.journal.journal-create', compact('journal'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'issn' => 'required|string|max:255|unique:journals,issn',
            'nlm_id' => 'nullable|string|max:255',
            'impact_factor' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $name = time() . '_journal.' . $request->image->extension();
            $request->image->move(public_path('uploads/journals'), $name);
            $data['image'] = 'uploads/journals/' . $name;
        }

        Journal::create($data);

        return redirect()->route('admin.journals')->with('success', 'Journal created successfully.');
    }

    public function edit(Journal $journal)
    {
        return view('admin.journal.journal-create', compact('journal'));
    }

    public function update(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'issn' => 'required|string|max:255|unique:journals,issn,' . $journal->id,
            'nlm_id' => 'nullable|string|max:255',
            'impact_factor' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($journal->image && File::exists(public_path($journal->image))) {
                File::delete(public_path($journal->image));
            }

            $name = time() . '_journal.' . $request->image->extension();
            $request->image->move(public_path('uploads/journals'), $name);
            $data['image'] = 'uploads/journals/' . $name;
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