<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $conferences = [
    [
        'id'          => 1,
        'title'       => 'Tarptautinė IT konferencija 2026',
        'description' => 'Konferencija skirta naujausioms IT technologijoms, programinės įrangos kūrimui, kibernetiniam saugumui ir dirbtiniam intelektui. Dalyvaus pranešėjai iš įvairių šalių bei vyks praktinės dirbtuvės.',
        'date'        => '2026-05-15', 
        'location'    => 'Vilnius, LITEXPO',
        'status'      => 'planned',
        'lectors'     => 'Jonas Petraitis, Anna Schmidt',
    ],
    [
        'id'          => 2,
        'title'       => 'Verslo inovacijos ir startuoliai',
        'description' => 'Renginys skirtas startuolių kūrėjams, investuotojams ir verslo lyderiams. Bus aptariamos inovacijų strategijos, finansavimo galimybės ir sėkmingų startuolių istorijos.',
        'date'        => '2026-04-10', 
        'location'    => 'Kaunas, Žalgirio arena',
        'status'      => 'planned',
        'lectors'     => 'Mantas Kazlauskas, Laura Jankauskaitė',
    ],
    [
        'id'          => 3,
        'title'       => 'Duomenų mokslas ir AI',
        'description' => 'Online konferencija apie duomenų analizę, mašininį mokymąsi ir dirbtinio intelekto pritaikymą versle. Dalyviai galės išgirsti ekspertų pranešimus ir pamatyti realius projektų pavyzdžius.',
        'date'        => '2025-11-10', 
        'location'    => 'Online',
        'status'      => 'past',
        'lectors'     => 'David Brown',
    ],
    [
        'id'          => 4,
        'title'       => 'Marketingo tendencijos 2025',
        'description' => 'Renginys skirtas marketingo profesionalams, aptariamos naujausios rinkodaros tendencijos, socialinių tinklų strategijos ir prekės ženklo vystymas.',
        'date'        => '2025-06-05', 
        'location'    => 'Kaunas, M. K. Čiurlionio galerija',
        'status'      => 'past',
        'lectors'     => 'Laura Jankauskaitė, Tomas Petrauskas',
    ],
    [
        'id'          => 5,
        'title'       => 'Inovacijų ir technologijų forumas',
        'description' => 'Tarptautinis forumas apie naujausias technologijas, inovacijas ir tvarias verslo praktikas. Bus diskusijos, prezentacijos ir tinklaveikos galimybės.',
        'date'        => '2026-09-12', 
        'location'    => 'Kaunas, Žalgirio arena',
        'status'      => 'planned',
        'lectors'     => 'Tomas Petrauskas, Anna Schmidt',
    ],
        ];

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
        $conferences = [
    [
        'id'          => 1,
        'title'       => 'Tarptautinė IT konferencija 2026',
        'description' => 'Konferencija skirta naujausioms IT technologijoms, programinės įrangos kūrimui, kibernetiniam saugumui ir dirbtiniam intelektui. Dalyvaus pranešėjai iš įvairių šalių bei vyks praktinės dirbtuvės.',
        'date'        => '2026-05-15', 
        'location'    => 'Vilnius, LITEXPO',
        'status'      => 'planned',
        'lectors'     => 'Jonas Petraitis, Anna Schmidt',
    ],
    [
        'id'          => 2,
        'title'       => 'Verslo inovacijos ir startuoliai',
        'description' => 'Renginys skirtas startuolių kūrėjams, investuotojams ir verslo lyderiams. Bus aptariamos inovacijų strategijos, finansavimo galimybės ir sėkmingų startuolių istorijos.',
        'date'        => '2026-04-10', 
        'location'    => 'Kaunas, Žalgirio arena',
        'status'      => 'planned',
        'lectors'     => 'Mantas Kazlauskas, Laura Jankauskaitė',
    ],
    [
        'id'          => 3,
        'title'       => 'Duomenų mokslas ir AI',
        'description' => 'Online konferencija apie duomenų analizę, mašininį mokymąsi ir dirbtinio intelekto pritaikymą versle. Dalyviai galės išgirsti ekspertų pranešimus ir pamatyti realius projektų pavyzdžius.',
        'date'        => '2025-11-10', 
        'location'    => 'Online',
        'status'      => 'past',
        'lectors'     => 'David Brown',
    ],
    [
        'id'          => 4,
        'title'       => 'Marketingo tendencijos 2025',
        'description' => 'Renginys skirtas marketingo profesionalams, aptariamos naujausios rinkodaros tendencijos, socialinių tinklų strategijos ir prekės ženklo vystymas.',
        'date'        => '2025-06-05', 
        'location'    => 'Kaunas, M. K. Čiurlionio galerija',
        'status'      => 'past',
        'lectors'     => 'Laura Jankauskaitė, Tomas Petrauskas',
    ],
    [
        'id'          => 5,
        'title'       => 'Inovacijų ir technologijų forumas',
        'description' => 'Tarptautinis forumas apie naujausias technologijas, inovacijas ir tvarias verslo praktikas. Bus diskusijos, prezentacijos ir tinklaveikos galimybės.',
        'date'        => '2026-09-12', 
        'location'    => 'Kaunas, Žalgirio arena',
        'status'      => 'planned',
        'lectors'     => 'Tomas Petrauskas, Anna Schmidt',
    ],
        ];

$users = [
    [
        'id'       => 1,
        'name'     => 'Jonas',
        'surname'  => 'Petraitis',
        'email'    => 'jonas.petraitis@example.com',
    ],
    [
        'id'       => 2,
        'name'     => 'Aistė',
        'surname'  => 'Kazlauskaitė',
        'email'    => 'aiste.kazlauskaite@example.com',
    ],
    [
        'id'       => 3,
        'name'     => 'Marius',
        'surname'  => 'Laužikas',
        'email'    => 'marius.lauzikas@example.com',
    ],
];

$registry = [
    [
        'id'             => 1,
        'user_id'        => 1,
        'conference_id'  => 1,
        'registered_at'  => '2025-01-10 09:00:00',
    ],
    [
        'id'             => 2,
        'user_id'        => 2,
        'conference_id'  => 1,
        'registered_at'  => '2025-01-12 14:30:00',
    ],
    [
        'id'             => 3,
        'user_id'        => 3,
        'conference_id'  => 2,
        'registered_at'  => '2025-02-01 11:15:00',
    ],
    [
        'id'             => 4,
        'user_id'        => 1,
        'conference_id'  => 3,
        'registered_at'  => '2024-10-20 10:00:00',
    ],
];



        $conference = collect($conferences)->firstWhere('id', $id);

        $registeredUsers = collect($registry)->where('conference_id', $id)->map(function($entry) use ($users){
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
