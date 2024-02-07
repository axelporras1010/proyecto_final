@extends('layouts.main', ['activePage' => 'horarios', 'titlePage' => 'Detalles del horario'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- header -->
                    <div class="card-header card-header-primary">
                        <div class="card-title">Horario</div>
                        <p class="card-catergory">Vista detallada del horario</p>
                    </div>
                    <!-- body -->
                    <div class="card-body">
                        @if((session('success')))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-ser">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <h5 class="title">Detalles del horario</h5>
                                                <p class="description">
                                                    <strong>ID:</strong> {{ $horario->id }} <br>
                                                    <strong>Profesor:</strong>
                                                    @foreach($users as $user)
                                                        @if($user->id === $horario->profesor_id)
                                                            {{ $user->name }} <!-- Aquí se muestra el nombre del profesor -->
                                                        @endif
                                                    @endforeach
                                                    <br>
                                                    <strong>Día de la semana:</strong> {{ $horario->dia_semana }} <br>
                                                    <strong>Descripcion:</strong> {{ $horario->descripcion }} <br>
                                                    <strong>Hora de inicio:</strong> {{ \Carbon\Carbon::parse($horario->hora_inicio)->format('h:i A') }} <br>
                                                    <strong>Hora de fin:</strong> {{ \Carbon\Carbon::parse($horario->hora_fin)->format('h:i A') }} <br>
                                                </p>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('horarios.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                            <a href="{{ route('horarios.edit', $horario->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card horario -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
