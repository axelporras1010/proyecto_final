@extends('layouts.main', ['activePage' => 'horarios', 'titlePage' => 'Nuevo Horario'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('horarios.store' )}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Horario</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                            <!-- Profesor -->
                            <div class="row">
                                <label for="profesor" class="col-sm-2 col-form-label">Profesor</label>
                                <div class="col-sm-7">
                                    <select name="profesor_id" class="form-control">
                                        @foreach($users as $user)
                                            @if($user->hasRole('Profesor'))
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                <input type="hidden" name="profesor_nombre" value="{{ $user->name }}">
                                            @endif
                                        @endforeach
                                    </select>
                                    @if ($errors->has('profesor_id'))
                                        <span class="error text-danger" for="input-profesor">{{ $errors->first('profesor_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- Día de la semana -->
                            <div class="row">
                                <label for="dia_semana" class="col-sm-2 col-form-label">Día de la semana</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="dia_semana" placeholder="Día de la semana" value="{{ old('dia_semana') }}">
                                    @if ($errors->has('dia_semana'))
                                        <span class="error text-danger" for="input-dia_semana">{{ $errors->first('dia_semana') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- Descripcion -->
                            <div class="row">
                                <label for="dia_semana" class="col-sm-2 col-form-label">Descripcion</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="{{ old('descripcion') }}">
                                    @if ($errors->has('descripcion'))
                                        <span class="error text-danger" for="input-dia_semana">{{ $errors->first('descripcion') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- Hora de inicio -->
                            <div class="row">
                                <label for="hora_inicio" class="col-sm-2 col-form-label">Hora de inicio</label>
                                <div class="col-sm-7">
                                    <input type="time" class="form-control" name="hora_inicio" value="{{ old('hora_inicio') }}">
                                    @if ($errors->has('hora_inicio'))
                                        <span class="error text-danger" for="input-hora_inicio">{{ $errors->first('hora_inicio') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- Hora de fin -->
                            <div class="row">
                                <label for="hora_fin" class="col-sm-2 col-form-label">Hora de fin</label>
                                <div class="col-sm-7">
                                    <input type="time" class="form-control" name="hora_fin" value="{{ old('hora_fin') }}">
                                    @if ($errors->has('hora_fin'))
                                        <span class="error text-danger" for="input-hora_fin">{{ $errors->first('hora_fin') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
