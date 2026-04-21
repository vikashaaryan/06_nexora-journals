<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Volume;
use Illuminate\Http\Request;

class VolumeController extends Controller
{
    public function index(Journal $journal)
    {
        $volumes = Volume::where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.volume.index', compact('journal', 'volumes'));
    }

    public function store(Request $request, Journal $journal)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $data['journal_id'] = $journal->id;
        $data['is_active'] = $request->has('is_active');

        Volume::create($data);

        return redirect()
            ->route('admin.journal.volumes.index', $journal->id)
            ->with('success', 'Volume created successfully.');
    }

    public function edit(Journal $journal, Volume $volume)
    {
        abort_if($volume->journal_id != $journal->id, 404);

        $volumes = Volume::where('journal_id', $journal->id)
            ->latest()
            ->get();

        return view('admin.volume.index', compact('journal', 'volumes', 'volume'));
    }

    public function update(Request $request, Journal $journal, Volume $volume)
    {
        abort_if($volume->journal_id != $journal->id, 404);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        $data['journal_id'] = $journal->id;
        $data['is_active'] = $request->has('is_active');

        $volume->update($data);

        return redirect()
            ->route('admin.journal.volumes.index', $journal->id)
            ->with('success', 'Volume updated successfully.');
    }

    public function destroy(Journal $journal, Volume $volume)
    {
        abort_if($volume->journal_id != $journal->id, 404);

        $volume->delete();

        return back()->with('success', 'Volume deleted successfully.');
    }
}