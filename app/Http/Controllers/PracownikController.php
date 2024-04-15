<?php

namespace App\Http\Controllers;

use App\Http\Requests\FirmaRequest;
use App\Http\Requests\PracownikRequest;
use App\Models\Firma;
use App\Models\Pracownik;
use Illuminate\Http\Request;

class PracownikController extends Controller
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
        $companies = Firma::all();

        return view('pracownik.create', ['companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PracownikRequest $request)
    {
        $pracownik = new Pracownik();
        $pracownik->id_firmy = $request->id_firmy;
        $pracownik->imie = $request->imie;
        $pracownik->nazwisko = $request->nazwisko;
        $pracownik->telefon = $request->telefon;
        $pracownik->email = $request->email;
        $pracownik->opis = $request->opis;
        $pracownik->save();

        return redirect('/pracownik')->with('success', 'Pracownik został dodana!');
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
