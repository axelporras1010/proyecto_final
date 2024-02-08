@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Bienvenidos a Yoka's Music Academy</h4>
                        <p class="card-category">¡Aprende a cantar con nosotros!</p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('img/DSC01150.jpg') }}" alt="First slide" style="max-height: 500px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('img/DSC01164.jpg') }}" alt="Second slide" style="max-height: 500px;">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <p class="card-text mt-5">
                            En Yoka's Music Academy ofrecemos clases de canto de alta calidad impartidas por profesionales con amplia experiencia en la industria musical.
                        </p>
                        <p class="card-text">
                            Nuestros cursos están diseñados para satisfacer las necesidades de todos, desde principiantes hasta avanzados.
                        </p>
                        <p class="card-text">
                            ¡Únete a nuestra comunidad de cantantes y comienza tu viaje musical hoy mismo!
                        </p>
                        <a href="https://www.youtube.com/@yekacoach" class="btn btn-primary" target="_blank">Visita nuestro canal de YouTube</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
