<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Http\Requests\UpdateConferenceRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ConferenceController extends Controller
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
    public function store(StoreConferenceRequest $request)
    {
        // Validation is automatically handled by StoreConferenceRequest
        $validated = $request->validated();

        // In a real application, you would save to database here
        // Conference::create($validated);

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

        $conference = collect($conferences)->firstWhere('id', $id);

        return Inertia::render('Admin/Conferences/Edit', ['conference' => $conference]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConferenceRequest $request, string $id)
    {
        // Validation is automatically handled by UpdateConferenceRequest
        $validated = $request->validated();

        // In a real application, you would update the database here
        // $conference = Conference::findOrFail($id);
        // $conference->update($validated);

        return redirect()->route('admin.conferences.index')->with('success', 'Conference updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
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

        $conference = collect($conferences)->firstWhere('id', $id);

        if (!$conference) {
            return redirect()->route('admin.conferences.index')->with('error', 'Conference not found.');
        }

        // Check if conference is past
        if ($conference['status'] === 'past') {
            return redirect()->route('admin.conferences.index')->with('error', 'Cannot delete past conferences.');
        }

        // In a real application, you would delete from database here
        // Conference::findOrFail($id)->delete();

        return redirect()->route('admin.conferences.index')->with('success', 'Conference deleted successfully.');
    }
}
