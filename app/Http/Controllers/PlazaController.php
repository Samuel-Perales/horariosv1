<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plazas = Plaza::get();
        return view("plazas/index",compact("plazas"));
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
    public function show(Plaza $plaza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plaza $plaza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plaza $plaza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plaza $plaza)
    {
        //
    }
}
