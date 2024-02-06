@extends('layouts.main', ['activePage' => 'profile', 'titlePage' => 'Detalles del Perfil'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- header -->
                    <div class="card-header card-header-primary">
                        <div class="card-title">Perfil</div>
                        <p class="card-catergory">Vista detallada del perfil {{ $user->name }}</p>
                    </div>
                    <!-- body -->
                    <div class="card-body">
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
                                                <div class="card-descr">
                                                    @forelse($user->roles as $role)
                                                        <span class="badge badge-info">{{ $role->name }}</span>
                                                    @empty
                                                        <span class="badge badge-danger">No roles</span>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </p>
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