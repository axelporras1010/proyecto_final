@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Detalles del permiso'])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- header -->
                    <div class="card-header card-header-primary">
                        <div class="card-title">Permisos</div>
                        <p class="card-catergory">Vista detallada del permiso {{ $permission->name }}</p>
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
                                                    <!-- <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar"> -->
                                                    <h5 class="title mx-3">{{ $permission->name }}</h5>
                                                </a>
                                                <p class="description">
                                                    {{ $permission->name }} <br>
                                                    {{ $permission->created_at }} <br>
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-descr">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos ex quo porro iste enim consequatur ipsa expedita deserunt aperiam, minima impedit quod distinctio omnis, magnam hic nisi animi maiores vel?
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-primary">Editar</a>
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