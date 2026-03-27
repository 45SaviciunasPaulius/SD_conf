<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conferences = Conference::all();

        return Inertia::render('Admin/Conferences/Index', ['conferences' => $conferences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/Conferences/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConferenceRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = Auth::id();

        $conference = Conference::create($validated);

        return redirect()->route('admin.conferences.index')->with('success', 'Conference created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $conference = Conference::all()->firstWhere('id', $id);

        return Inertia::render('Admin/Conferences/Edit', ['conference' => $conference]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ConferenceRequest $request, string $id)
    {
        $validated = $request->validated();

        $conference = Conference::all()->firstWhere('id', $id);
        $conference->update($validated);

        return redirect()->route('admin.conferences.index')->with('success', 'Conference updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $conference = Conference::all()->firstWhere('id', $id);

        if ($conference['status'] === 'past') {
            return redirect()->route('admin.conferences.index')->with('error', 'Cannot delete past conferences.');
        }

        $conference->delete();
        return redirect()->route('admin.conferences.index')->with('success', 'Conference deleted successfully.');
    }
}
