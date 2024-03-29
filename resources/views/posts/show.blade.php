@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Detalles del post'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Posts</h4>
            <p class="card-category">Vista detallada de {{ $post->title }}</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            @if((session('success')))
              <div class="alert alert-success" role="success">
                  {{ session('success') }}
              </div>
            @endif
            <div class="row">
              <!-- first -->
              <div class="col-md-12">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                          <h5 class="title mt-3">{{ $post->title }}</h5>
                        </a>
                        <p class="description">
                          {{ $post->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      {{ _( $post->description ) }}
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('posts.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
</div>
@endsection