@extends('layouts.dashboard')

@section('title', 'Crear Horario')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>

                </div>

                <div class="card-body">
                    <form action="{{route('admin.horarios.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
    
                                    <select name="doctor_id" id="" class="form-control">
                                        @foreach ($doctores as $doctor)
                                            <option value="{{$doctor->id}}">{{$doctor->nombres." ".$doctor->apellidos."-".$doctor->especialidad}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="bi bi-person-fill-add"></span>
                                        </div>
                                    </div>
    
                                    @error('doctor_id')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="input-group mb-3">
    
                                    <select name="consultorio_id" id="" class="form-control">
                                        @foreach ($consultorios as $consultorio)
                                            <option value="{{$consultorio->id}}">{{$consultorio->nombre."-".$consultorio->ubicacion}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="bi bi-building"></span>
                                        </div>
                                    </div>
    
                                    @error('consultorio_id')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group mb-3">
    
                                    <select name="dia" id="" class="form-control">
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miercoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                        <option value="Sabado">Sabado</option>
                                    </select>
    
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="bi bi-calendar-day"></span>
                                        </div>
                                    </div>
    
                                    @error('doctor_id')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <input type="time" class="form-control" name="hora_inicio" value="{{old('hora_inicio')}}" placeholder="hora_inicio" >
                                    
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="bi bi-alarm"></span>
                                        </div>
                                    </div>
                                    @error('hora_inicio')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <input type="time" class="form-control" name="hora_fin" value="{{old('hora_fin')}}" placeholder="hora_fin" >
                                    
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="bi bi-alarm"></span>
                                        </div>
                                    </div>
                                    @error('hora_fin')
                                    <small style="color:red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    
                        
                        <div class="row">
                            <div class="col">
                                <a href="{{route('admin.horarios.index')}}" class="btn btn-secondary ">Cancelar</a>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
