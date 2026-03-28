<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Registry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $filteredConf = Conference::where('date', '>=', Carbon::today())->get();

        return Inertia::render('Client/Index', ['conferences' => $filteredConf]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $userId = Auth::id();
        $conferenceId = $id;

        $alreadyRegistered = Registry::where('user_id', $userId)->where('conference_id', $conferenceId)->exists();

        if ($alreadyRegistered) {
            Inertia::flash('message', 'You are already registered!');

            return redirect()->back();
        }

        Registry::create([
            'user_id' => Auth::id(),
            'conference_id' => $id,
        ]);
        Inertia::flash('message', 'Registered successfully!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $conference = Conference::firstWhere('id', $id);

        return Inertia::render('Client/Show', ['conference' => $conference]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
