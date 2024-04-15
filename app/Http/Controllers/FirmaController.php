<?php

namespace App\Http\Controllers;

use App\Models\Firma;
use App\Http\Requests\FirmaRequest;

class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('firma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FirmaRequest $request)
    {

        $firma = new Firma();
        $firma->nazwa = $request->company_name;
        $firma->adres = $request->address;
        $firma->nip = $request->nip;
        $firma->opis = $request->description;
        $firma->save();

        return redirect('/firma/create')->with('success', 'Firma została dodana!');
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
