<?php

namespace App\Http\Controllers;

use App\Models\division;
use App\Http\Requests\StoredivisionRequest;
use App\Http\Requests\UpdatedivisionRequest;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredivisionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredivisionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedivisionRequest  $request
     * @param  \App\Models\division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedivisionRequest $request, division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(division $division)
    {
        //
    }
}
