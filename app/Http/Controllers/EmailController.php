<?php

namespace App\Http\Controllers;

use App\Models\email;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreemailRequest;
use App\Http\Requests\UpdateemailRequest;

class EmailController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreemailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateemailRequest $request, email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(email $email)
    {
        //
    }
}
