<?php

namespace App\Http\Controllers;

use App\Models\direccion;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoredireccionRequest;
use App\Http\Requests\UpdatedireccionRequest;
use App\Http\Requests\BulkStoredireccionRequest;
use Illuminate\Support\Arr;

class DireccionController extends Controller
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
    public function store(StoredireccionRequest $request)
    {
        //
    }
    public function bulkStore(BulkStoredireccionRequest $request)
    {
        $bulk = collect($request->all())->map(function ($arr, $key) {
            return Arr::except($arr, []);
        });
        direccion::insert($bulk->toArray());
    }
    public function bulkStoreUpdate(BulkStoredireccionRequest $request)
    {

        $bulk = collect($request->all())->map(function ($arr, $key) {
            return Arr::except($arr, ['contacto_id', 'direccion', 'nombreDireccion', 'cp']);
        });
        echo $bulk;
        direccion::upsert($bulk, 'contacto_id', ['quantity']);
        //direccion->save();
        //direccion::update($bulk->toArray());
        //direccion::insert($bulk->toArray());
    }
    /**
     * Display the specified resource.
     */
    public function show(direccion $direccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(direccion $direccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedireccionRequest $request, direccion $direccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(direccion $direccion)
    {
        //
    }
}
