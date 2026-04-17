<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class JournalController extends Controller
{
    public function journalcreate()
    {
        $journal = null;
        return view('admin.journal.journal-create', compact('journal'));
    }

    public function journalstore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'issn' => 'required|string|max:255|unique:journals,issn',
            'nlm_id' => 'nullable|string|max:255',
            'impact_factor' => 'required|numeric|min:0',
            'is_active' => 'required|boolean',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/journals'), $imageName);
            $imagePath = 'uploads/journals/' . $imageName;
        }

        Journal::create([
            'title' => $validated['title'],
            'image' => $imagePath,
            'issn' => $validated['issn'],
            'nlm_id' => $validated['nlm_id'] ?? null,
            'impact_factor' => $validated['impact_factor'],
            'is_active' => $validated['is_active'],
        ]);

        return redirect()->route('admin.journal.index')->with('success', 'Journal created successfully.');
    }

    public function journalindex()
    {
        $journals = Journal::latest()->get();
        return view('admin.journal.journal-manage', compact('journals'));
    }

    public function journaledit(Journal $journal)
    {
        return view('admin.journal.journal-create', compact('journal'));
    }

    public function journalupdate(Request $request, Journal $journal)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'issn' => 'required|string|max:255|unique:journals,issn,' . $journal->id,
            'nlm_id' => 'nullable|string|max:255',
            'impact_factor' => 'required|numeric|min:0',
            'is_active' => 'required|boolean',
        ]);

        $imagePath = $journal->image;

        if ($request->hasFile('image')) {
            if ($journal->image && File::exists(public_path($journal->image))) {
                File::delete(public_path($journal->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/journals'), $imageName);
            $imagePath = 'uploads/journals/' . $imageName;
        }

        $journal->update([
            'title' => $validated['title'],
            'image' => $imagePath,
            'issn' => $validated['issn'],
            'nlm_id' => $validated['nlm_id'] ?? null,
            'impact_factor' => $validated['impact_factor'],
            'is_active' => $validated['is_active'],
        ]);

        return redirect()->route('admin.journal.index')->with('success', 'Journal updated successfully.');
    }

    public function journaldestroy(Journal $journal)
    {
        if ($journal->image && File::exists(public_path($journal->image))) {
            File::delete(public_path($journal->image));
        }

        $journal->delete();

        return redirect()->route('admin.journal.index')->with('success', 'Journal deleted successfully.');
    }
}
