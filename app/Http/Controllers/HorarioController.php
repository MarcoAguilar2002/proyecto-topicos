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
        $consultorios = Consultorio::all();
        $horarios = Horario::with('doctor','consultorio')->get();
        return view('admin.horarios.index',compact('horarios','consultorios'));
    }

    public function cargar_consultorio($id){
        try{
            $horarios = Horario::with('doctor','consultorio')->where('consultorio_id',$id)->get();
            return view('admin.horarios.cargar_consultorio',compact('horarios'));
        }catch(\Exception $exception){
            return response()->json(['mensaje'=>'Error']);
        }
    }

    public function create()
    {
        //
        $horarios = Horario::with('doctor','consultorio')->get();
        $doctores = Doctor::all();
        $consultorios = Consultorio::all();
        return view('admin.horarios.create',compact('doctores','consultorios','horarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',
            'consultorio_id'=>'required|exists:consultorios.id'
        ]);

        $horarioExistente = Horario::where('dia',$request->dia)
            ->where('consultorio_id',$request->consultorio_id)
            ->where(function ($query) use ($request){
                $query -> where(function($query) use ($request){
                    $query->where('hora_inicio','>=',$request->hora_inicio)
                        ->where('hora_inicio','<',$request->hora_fin);
                })
                    ->orWhere(function ($query) use ($request){
                        $query->where('hora_fin','>',$request->hora_inicio)
                        ->where('hora_fin','<=',$request->hora_fin);
                    })
                    ->orWhere(function ($query) use ($request){
                        $query->where('hora_inicio','<',$request->hora_inicio)
                        ->where('hora_fin','>',$request->hora_fin);
                    });
            })->exists();
        

        if($horarioExistente){
             return redirect()->back()
                ->withInput()
                ->with('mensaje','Ya existe un horario que se superpone con el horario existente')
                ->with('icono','error')
                ->with('titulo','Registro Fallido');
        }
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
