<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function myCountry($countryName): string
    {
        return  $countryName;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Country List";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create a new Country";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store a new Country";
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
