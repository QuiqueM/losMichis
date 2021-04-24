<?php

namespace App\Http\Controllers\ADmin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::all();

        return view('admin.mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $cliente = Cliente::find($request->id);
        //dd($cliente);
        $tipos = [
            'perro' => 'Perro',
            'gato' => 'Gato',
            'ave' => 'Ave',
            'roedor' => 'Roedor'
        ];
        return view('admin.mascotas.create', compact('tipos', 'cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'tipo' => 'required',
            'peso' => 'required',
            'sexo' => 'required'
        ]);

        $mascota = Mascota::create($request->all());

        return redirect()->route('admin.mascotas.edit', $mascota)->with('info', 'La mascota se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        //dd($mascota);
        $tipos = [
            'perro' => 'Perro',
            'gato' => 'Gato',
            'ave' => 'Ave',
            'roedor' => 'Roedor'
        ];

        return view('admin.mascotas.edit', compact('mascota', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'tipo' => 'required',
            'peso' => 'required',
            'sexo' => 'required'
        ]);

        $mascota->update($request->all());

        return redirect()->route('admin.mascotas.edit', $mascota)->with('info', 'La mascota se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        return back()->with('info', 'La mascota se elimino con exito');
        //return redirect()->route('admin.clientes.index', $mascota)->with('info', 'La mascota se elimino con exito');
    }
}
