@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Nuevo Post'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('posts.store') }}" class="form-horizontal">
          @csrf
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Post</h4>
              <p class="card-category">Ingresar datos del nuevo post</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Titulo del post</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="title" placeholder="Ingrese el titulo del post"
                    autocomplete="off" autofocus>
                  @if ($errors->has('title'))
                      <span class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Contenido del post</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="description" placeholder="Ingrese la descripcion del post"
                    autocomplete="off" autofocus></input>
                  @if ($errors->has('description'))
                      <span class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection