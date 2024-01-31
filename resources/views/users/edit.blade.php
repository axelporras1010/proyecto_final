@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.update', $user->id) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario {{$user->name}}</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <!-- Nombre -->
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" autofocus>
                                </div>
                            </div>
                            <!-- Username -->
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <!-- password -->
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Ingresa la password para editarla">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submint" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection