@extends('layouts.dashboard')

@section('title', 'Inicio')

@section('content')
    <hr>

    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $total_usuarios }}</h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-file-person"></i>
                </div>
                <a href="{{ route('admin.usuarios.index') }}" class="small-box-footer">Más información <i
                        class="fas bi bi-file-person"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{ $total_secretarias }}</h3>
                    <p>Secretarias</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-file-person"></i>
                </div>
                <a href="{{ route('admin.secretarias.index') }}" class="small-box-footer">Más información <i
                        class="fas bi bi-file-person"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $total_pacientes }}</h3>
                    <p>Pacientes</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-file-person"></i>
                </div>
                <a href="{{ route('admin.pacientes.index') }}" class="small-box-footer">Más información <i
                        class="fas bi bi-file-person"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $total_consultorios }}</h3>
                    <p>Consultorios</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-building"></i>
                </div>
                <a href="{{ route('admin.consultorios.index') }}" class="small-box-footer">Más información <i
                        class="fas bi bi-building"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $total_doctores }}</h3>
                    <p>Doctores</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-person-fill-add"></i>
                </div>
                <a href="{{ route('admin.doctores.index') }}" class="small-box-footer">Más información <i
                        class="fas bi bi-person-fill-add"></i></a>
            </div>
        </div>  

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $total_horarios }}</h3>
                    <p>Horarios</p>
                </div>
                <div class="icon">
                    <i class="ion fas bi bi-calendar-event"></i>
                </div>
                <a href="{{ route('admin.horarios.index') }}" class="small-box-footer">Más información <i
                        class="fas bi bi-calendar-event"></i></a>
            </div>
        </div>
    </div>


@endsection
