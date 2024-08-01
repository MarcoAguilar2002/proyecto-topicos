<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Consultorio;
use Illuminate\Http\Request;

class HorarioController extends Controller
{

    public function index()
    {
        //
        $horarios = Horario::with('doctor','consultorio')->get();
        return view('admin.horarios.index',compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        return view('admin.horarios.create',compact('doctores','consultorios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'dia' => 'required'
        ]);
        Horario::create($request->all());

        return redirect()->route('admin.horarios.index')
        ->with('mensaje','Se registro al horario correctamente')
        ->with('icono','success')
        ->with('titulo','Registro Exitoso');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $horario = Horario::find($id);
        return view('admin.horarios.show',compact('horario'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
