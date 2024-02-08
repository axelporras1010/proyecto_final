@extends('layouts.main', ['activePage' => 'horarios', 'titlePage' => 'Editar Horario'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('horarios.update', $horario->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar Horario</h4>
              <p class="card-category">Editar datos del horario</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                 <label for="profesor" class="col-sm-2 col-form-label">Profesor</label>
                 <div class="col-sm-7">
                   <select name="profesor_id" class="form-control">
                     @foreach($users as $user)
                        @if($user->hasRole('Profesor'))
                          <option value="{{ $user->id }}" {{ $user->id == $horario->profesor_id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endif
                     @endforeach
                   </select>
                   @if ($errors->has('profesor_id'))
                     <span class="error text-danger" for="input-profesor">{{ $errors->first('profesor_id') }}</span>
                   @endif
                 </div>
              </div>
              <div class="row">
                 <label for="dia_semana" class="col-sm-2 col-form-label">Día de la semana</label>
                 <div class="col-sm-7">
                   <input type="text" class="form-control" name="dia_semana" placeholder="Ingrese el día de la semana"
                     value="{{ old('dia_semana', $horario->dia_semana) }}" autocomplete="off" autofocus>
                   @if ($errors->has('dia_semana'))
                     <span class="error text-danger" for="input-dia_semana">{{ $errors->first('dia_semana') }}</span>
                   @endif
                 </div>
              </div>
              <div class="row">
                  <label for="dia_semana" class="col-sm-2 col-form-label">Descripcion</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="{{ old('descripcion') }}">
                      @if ($errors->has('descripcion'))
                          <span class="error text-danger" for="input-dia_semana">{{ $errors->first('descripcion') }}</span>
                      @endif
                  </div>
              </div>
              <div class="row">
                 <label for="hora_inicio" class="col-sm-2 col-form-label">Hora de inicio</label>
                 <div class="col-sm-7">
                   <input type="time" class="form-control" name="hora_inicio" placeholder="Ingrese la hora de inicio"
                     value="{{ old('hora_inicio', $horario->hora_inicio) }}" autocomplete="off" autofocus>
                   @if ($errors->has('hora_inicio'))
                     <span class="error text-danger" for="input-hora_inicio">{{ $errors->first('hora_inicio') }}</span>
                   @endif
                 </div>
              </div>
              <div class="row">
                 <label for="hora_fin" class="col-sm-2 col-form-label">Hora de fin</label>
                 <div class="col-sm-7">
                   <input type="time" class="form-control" name="hora_fin" placeholder="Ingrese la hora de fin"
                     value="{{ old('hora_fin', $horario->hora_fin) }}" autocomplete="off" autofocus>
                   @if ($errors->has('hora_fin'))
                     <span class="error text-danger" for="input-hora_fin">{{ $errors->first('hora_fin') }}</span>
                   @endif
                 </div>
              </div>
            </div>
            <!--End body-->
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
          <!--End footer-->
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
