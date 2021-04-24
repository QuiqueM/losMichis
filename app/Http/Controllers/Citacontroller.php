<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Http\Request;

class Citacontroller extends Controller
{
    

    public function index(){
        $citas = Citas::join('mascotas', 'citas.mascota_id','mascotas.id')
                        ->select('citas.id','citas.fecha','citas.observaciones','mascotas.nombre')                
                        ->get();

       return view('admin.citas.index', compact('citas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cliente = Cliente::find($request->id_cliente);
        $mascota = Mascota::find($request->id_mascota);

        return view('admin.citas.create', compact('cliente', 'mascota'));
        
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
            'fecha' => 'required'
        ]);

        $cita = Citas::create($request->all());

        return redirect()->route('admin.home')->with('info', 'Cita guardada con exito');
    }

    
}
