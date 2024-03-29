@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- header -->
                    <div class="card-header card-header-primary">
                        <div class="card-title">Usuarios</div>
                        <p class="card-catergory">Vista detallada del usuario {{ $user->name }}</p>
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
                                                <a href="#" class="d-flex">
                                                    <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                    <h5 class="title mx-3">{{ $user->name }}</h5>
                                                </a>
                                                <p class="description">
                                                    {{ $user->name }} <br>
                                                    {{ $user->email }} <br>
                                                    {{ $user->created_at }} <br>
                                                </p>
                                                <div class="card-descr  ">
                                                    @forelse($user->roles as $role)
                                                        <span class="badge badge-info">{{ $role->name }}</span>
                                                    @empty
                                                        <span class="badge badge-danger">No roles</span>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card user -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection