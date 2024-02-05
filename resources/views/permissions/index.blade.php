@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Permisos'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Permisos</h4>
                                    <p class="card-category">Permisos registrados</p>
                                </div>
                                <div class="card-body">
                                    @if((session('success')))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-facebook">Agregar Permiso</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Creado en</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @forelse ($permissions as $permission)
                                                    <tr>
                                                        <td> {{$permission->id}} </td>
                                                        <td> {{$permission->name}} </td>
                                                        <td> {{$permission->created_at}} </td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-info"><i class="material-icons">key</i></a>
                                                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display: inline-block" onsubmit="return confirm('Seguro?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submint" rel='tooltip'>
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @empty
                                                Sin permisos registrados   
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $permissions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection