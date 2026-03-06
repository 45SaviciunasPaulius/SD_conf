<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conferences = [
            [
                'id'          => 1,
                'title'       => 'Tarptautinė IT konferencija 2025',
                'description' => 'Modernios technologijos ir ateitis...',
                'date'        => '2025-05-15',
                'location'    => 'Vilnius, LITEXPO',
                'status'      => 'planned', 
            ],
            [
                'id'          => 2,
                'title'       => 'Verslo inovacijos ir startuoliai',
                'description' => 'Kaip pritraukti investicijas...',
                'date'        => '2025-03-20',
                'location'    => 'Kaunas, Žalgirio arena',
                'status'      => 'planned',
            ],
            [
                'id'          => 3,
                'title'       => 'Duomenų mokslas ir AI',
                'description' => 'Dirbtinis intelektas praktikoje...',
                'date'        => '2024-11-10',
                'location'    => 'Online',
                'status'      => 'past',
            ],
        ];


        return Inertia::render('Client/Index', ['conferences' => $conferences]);
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
        $conferences = [
            [
                'id'          => 1,
                'title'       => 'Tarptautinė IT konferencija 2025',
                'description' => 'Modernios technologijos ir ateitis...',
                'date'        => '2025-05-15',
                'location'    => 'Vilnius, LITEXPO',
                'status'      => 'planned', 
            ],
            [
                'id'          => 2,
                'title'       => 'Verslo inovacijos ir startuoliai',
                'description' => 'Kaip pritraukti investicijas...',
                'date'        => '2025-03-20',
                'location'    => 'Kaunas, Žalgirio arena',
                'status'      => 'planned',
            ],
            [
                'id'          => 3,
                'title'       => 'Duomenų mokslas ir AI',
                'description' => 'Dirbtinis intelektas praktikoje...',
                'date'        => '2024-11-10',
                'location'    => 'Online',
                'status'      => 'past',
            ],
        ];

        $conference = collect($conferences)->firstWhere('id', $id);

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
