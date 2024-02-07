@extends('layouts.main', ['activePage' => 'horarios', 'titlePage' => 'Horarios'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Horarios</h4>
                        <p class="card-category">Horarios registrados</p>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                        <div class="alert alert-success" role="success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12 text-right">
                                @can('horario_create')
                                <a href="{{ route('horarios.create') }}" class="btn btn-sm btn-facebook">Agregar horario</a>
                                @endcan
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Profesor</th>
                                    <th>Día de la semana</th>
                                    <th>Hora de inicio</th>
                                    <th>Hora de fin</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($horarios as $horario)
                                    <tr>
                                        <td>{{ $horario->id }}</td>
                                       <!-- <td>{{ $horario->profesor->name }}</td>  Suponiendo que tienes una relación profesor() en el modelo Horario -->
                                       <td>
                                            @foreach($users as $user)
                                                @if($user->id === $horario->profesor_id)
                                                    {{ $user->name }} <!-- Aquí se muestra el nombre del profesor -->
                                                @endif
                                            @endforeach
                                       </td>
                                        <td>{{ $horario->dia_semana }}</td>
                                        <td>{{ \Carbon\Carbon::parse($horario->hora_inicio)->format('h:i A') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($horario->hora_fin)->format('h:i A') }}</td>

                                        <td class="td-actions text-right">
                                            @can('horario_show')
                                            <a href="{{ route('horarios.show', $horario->id) }}" class="btn btn-info"><i class="material-icons">timer</i></a>
                                            @endcan
                                            @can('horario_edit')
                                            <a href="{{ route('horarios.edit', $horario->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                            @endcan
                                            @can('horario_destroy')
                                            <form action="{{ route('horarios.destroy', $horario->id) }}" method="POST" style="display: inline-block" onsubmit="return confirm('¿Seguro que deseas eliminar este horario?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><i class="material-icons">close</i></button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer mr-auto">
                        {{ $horarios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
