@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.store' )}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                            <!-- Nombre -->
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- Username -->
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
                                    @if ($errors->has('username'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Email"  value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- password -->
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                <div class="colr-sm-7">
                                    <div class="form-group">
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <table class="table">
                                                    <tbody>
                                                        @foreach($roles as $id => $role)                                            
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $id }}">
                                                                        <span class="form-check-sign">
                                                                            <span class="check"></span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                               {{  $role }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submint" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection