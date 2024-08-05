@extends('layouts.dashboard')

@section('ruta', 'Inicio')

@section('content')
    <div class="row container">
        <h5><b>Bienvenido: </b>{{ Auth::user()->name }} / <b>Rol:</b> {{ Auth::user()->roles->pluck('name')->first() }}</h5>
    </div>
    <hr>

    <div class="row">
        @can('admin.usuarios.index')
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
        @endcan

        @can('admin.secretarias.index')
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
        @endcan

        @can('admin.pacientes.index')
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
        @endcan

        @can('admin.consultorios.index')
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
        @endcan


        @can('admin.doctores.index')
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
        @endcan

        @can('admin.horarios.index')
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
        @endcan


    </div>


    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card card-outline card-warning">
                <div class="card-header">
                    <h3 class="card-title">Calendario de reserva de citas médicas</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Registrar cita médica
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registro de cita médica</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Especialidad</label>
                                                <select name="" id="" class="form-control">
                                                    @foreach ($consultorios as $consultorio)
                                                        <option value="{{ $consultorio->id }}">
                                                            {{ $consultorio->especialidad }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Fecha de reserva</label>
                                                <input type="date" class="form-control">

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Doctor</label>
                                                <select name="" id="" class="form-control">
                                                    @foreach ($consultorios as $consultorio)
                                                        <option value="{{ $consultorio->id }}">
                                                            {{ $consultorio->especialidad }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Seleccione una hora</label>
                                                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                                    <label class="btn btn-outline-secondary">
                                                        <input type="radio" name="turno" id="turno1" value="08:30-08:50"> 08:30 AM - 08:50 AM
                                                    </label>
                                                    <label class="btn btn-outline-secondary">
                                                        <input type="radio" name="turno" id="turno2" value="08:50-09:10"> 08:50 AM - 09:10 AM
                                                    </label>
                                                    <label class="btn btn-outline-secondary">
                                                        <input type="radio" name="turno" id="turno3" value="09:10-09:30"> 09:10 AM - 09:30 AM
                                                    </label>
                                                    <label class="btn btn-outline-secondary">
                                                        <input type="radio" name="turno" id="turno4" value="09:30-09:50"> 09:30 AM - 09:50 AM
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id='calendar'></div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'es',
                    events: [{
                        title: 'Consultorio Odontologia',
                        start: '2024-08-06',
                        end: '2024-08-06'
                    }]
                });
                calendar.render();
            });
        </script>
    </div>

@endsection
