<?php

namespace App\Http\Controllers;

use App\Models\Vape;
use App\Http\Requests\StoreVapeRequest;
use App\Http\Requests\UpdateVapeRequest;

class VapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vapes.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vapes.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVapeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVapeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vape  $vape
     * @return \Illuminate\Http\Response
     */
    public function show(Vape $vape)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vape  $vape
     * @return \Illuminate\Http\Response
     */
    public function edit(Vape $vape)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVapeRequest  $request
     * @param  \App\Models\Vape  $vape
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVapeRequest $request, Vape $vape)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vape  $vape
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vape $vape)
    {
        //
    }
}
