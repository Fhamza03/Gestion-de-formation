<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Hamza;
use Illuminate\Http\Request;

class HamzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hamza = Hamza::latest()->get();
        return view('testt.hamza',compact('hamza'));
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
    public function show(Hamza $hamza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hamza $hamza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hamza $hamza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hamza $hamza)
    {
        //
    }
}
