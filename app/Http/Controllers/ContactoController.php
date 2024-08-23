<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use Illuminate\Support\Facades\Validator;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::all();
        $data = [
            'contactos' => $contactos,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactoRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'notas' => 'required|max:255',
            'cumple' => 'required|max:255',
            'paginaWeb' => 'required|max:255',
            'empresa' => 'required|max:255',
        ]);

        if ($validator->fails()) {

            $data = [
                'message' => 'Validate data error',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $contacto = Contacto::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'notas' => $request->notas,
            'cumple' => $request->cumple,
            'paginaWeb' => $request->paginaWeb,
            'empresa' => $request->empresa,
        ]);

        if (!$contacto) {
            $data = [
                'message' => 'Error en crear contacto',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'contactos' => $contacto,
            'status' => 201
        ];

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Contacto = Contacto::find($id);
        if (!$Contacto) {
            $data = [
                'message' => 'Contacto no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'contactos' => $Contacto,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, $id)
    {
        $contacto = Contacto::find($id);
        if (!$contacto) {
            $data = [
                'message' => 'Contacto no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'notas' => 'required|max:255',
            'cumple' => 'required|max:255',
            'paginaWeb' => 'required|max:255',
            'empresa' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            $data = [
                'message' => 'Error datos de contacto',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }
        $contacto->name = $request->name;
        $contacto->email = $request->email;
        $contacto->phone = $request->phone;
        $contacto->description = $request->description;
        $contacto->status = $request->status;
        $contacto->save();
        $data = [
            'message' => 'Contacto actualizado',
            'contactos' => $contacto,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Contacto = Contacto::find($id);
        if (!$Contacto) {
            $data = [
                'message' => 'Contacto no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $Contacto->delete();
        $data = [
            'message' => 'Borrar Contacto',
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}
