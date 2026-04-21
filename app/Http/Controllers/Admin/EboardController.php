<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eboard;
use App\Models\Journal;
use Illuminate\Http\Request;

class EboardController extends Controller
{
    public function index(Journal $journal)
    {
        $eboards = Eboard::where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.eboard.index', compact('journal', 'eboards'));
    }

    public function create(Journal $journal)
    {
        $eboard = null;
        return view('admin.eboard.form', compact('journal', 'eboard'));
    }

    public function store(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'institution' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'short_description' => 'nullable|string',
            'full_profile' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = 'storage/' . $request->file('image')->store('eboards', 'public');
        }

        $data['journal_id'] = $journal->id;
        $data['is_active'] = $request->has('is_active');

        Eboard::create($data);

        return redirect()
            ->route('admin.journal.eboards.index', $journal->id)
            ->with('success', 'Editorial board member created successfully.');
    }

    public function edit(Journal $journal, Eboard $eboard)
    {
        abort_if($eboard->journal_id != $journal->id, 404);

        return view('admin.eboard.form', compact('journal', 'eboard'));
    }

    public function update(Request $request, Journal $journal, Eboard $eboard)
    {
        abort_if($eboard->journal_id != $journal->id, 404);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'institution' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'short_description' => 'nullable|string',
            'full_profile' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = 'storage/' . $request->file('image')->store('eboards', 'public');
        }

        $data['journal_id'] = $journal->id;
        $data['is_active'] = $request->has('is_active');

        $eboard->update($data);

        return redirect()
            ->route('admin.journal.eboards.index', $journal->id)
            ->with('success', 'Editorial board member updated successfully.');
    }

    public function destroy(Journal $journal, Eboard $eboard)
    {
        abort_if($eboard->journal_id != $journal->id, 404);

        $eboard->delete();

        return back()->with('success', 'Editorial board member deleted successfully.');
    }
}