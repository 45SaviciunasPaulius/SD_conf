<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Registry;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conferences = Conference::latest('date')->get();

        return Inertia::render('Employee/Index', ['conferences' => $conferences]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conferences = Conference::all();

        $users = User::all();

        $registry = Registry::all();

        $conference = collect($conferences)->firstWhere('id', $id);

        $registeredUsers = collect($registry)->where('conference_id', $id)->map(function ($entry) use ($users) {
            return collect($users)->firstWhere('id', $entry['user_id']);
        })->values();

        return Inertia::render('Employee/Show', ['conference' => $conference, 'users' => $registeredUsers]);
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
