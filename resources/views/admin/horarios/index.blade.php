@extends('layouts.dashboard')

@section('title', 'Lista de horarios')

@section('content')

    <div class="container">
        <table id="example1" class="table table-hover ">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Día</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Consultorio</th>
                    <th scope="col">Hora de inicio</th>
                    <th scope="col">Hora de salida</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $contador = 1; ?>
                @foreach ($horarios as $horario)
                    <tr>
                        <td>{{ $contador++ }}</td>
                        <td>{{ $horario->dia }}</td>
                        <td>{{ $horario->doctor->nombres." ".$horario->doctor->apellidos}}</td>
                        <td>{{ $horario->consultorio->nombre."-".$horario->consultorio->ubicacion }}</td>
                        <td>{{ $horario->hora_inicio }}</td>
                        <td>{{ $horario->hora_fin }}</td>
                        
                        <td>
                            <a href="{{ route('admin.horarios.show', $horario->id) }}" class="btn btn-primary"
                                style="background-color: blue;">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a href="{{ route('admin.horarios.edit', $horario->id) }}" class="btn btn-success"
                                style="background-color: green;">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('admin.horarios.destroy', $horario->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="background-color: red;">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "pageLength": 7,
                    "language": {
                        "emptyTable": "No hay información",
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ de Horarios",
                        "infoEmpty": "Mostrando 0 a 0 de 0 Horarios",
                        "infoFiltered": "(Filtrado de _MAX_ total de Horarios)",
                        "lengthMenu": "Mostrar _MENU_ Horarios",
                        "infoPostFix": "",
                        "thousands": ",",
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "search": "Buscador:",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate": {
                            "first": "Primero",
                            "last": "Ultimo",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        }
                    },
                    "responsive": true,
                    "lengthChange": true,
                    "autoWidth": false,
                    buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'Copiar',
                            extend: 'copy',
                        }, {
                            extend: 'pdf'
                        }, {
                            extend: 'csv'
                        }, {
                            extend: 'excel'
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }]
                    }, {
                        extend: 'colvis',
                        text: 'Visor de columnas',
                        collectionLayout: 'fixed three-column'
                    }],
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            });
        </script>
    </div>
    <hr>

    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Calendario de atención</h3>
                </div>

                <div class="card-body text-center">
                    <table class="table table-striped table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Lunes</th>
                                <th>Martes</th>
                                <th>Miercoles</th>
                                <th>Jueves</th>
                                <th>Viernes</th>
                                <th>Sábado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $horas = ['08:00:00-09:00:00','09:00:00-10:00:00','10:00:00-11:00:00','11:00:00-12:00:00','12:00:00-13:00:00','13:00:00-14:00:00','14:00:00-15:00:00','15:00:00-16:00:00','16:00:00-17:00:00'];
                                $diasSem = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];  
                            @endphp
                            @foreach($horas as $hora)
                                @php
                                    list($hora_inicio,$hora_fin) = explode('-',$hora);   
                                @endphp
                                <tr>
                                    <td>{{$hora}}</td>
                                    @foreach($diasSem as $dia)
                                        @php
                                            $nombreDoc = '';
                                            foreach ($horarios as $horario) {
                                                if($horario->dia == $dia && 
                                                $hora_inicio >= $horario->hora_inicio &&
                                                $hora_fin <= $horario->hora_fin){
                                                    $nombreDoc = $horario->doctor->nombres." ".$horario->doctor->apellidos;
                                                    break;
                                                }
                                            }   
                                        @endphp
                                        <td>{{$nombreDoc}}</td>
                                    @endforeach
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection
