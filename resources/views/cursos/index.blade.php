@extends('layouts.layouts')

@section('title', 'CDA-CBBA')

@section('content')
<section class="hero-section inner-page">
    <div class="wave">

    <svg width="100%" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
        </g>
        </g>
    </svg>

    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="100">CURSOS Y SEMINARIOS
                        </h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-9" data-aos="fade-up">
                <h2 class="section-heading">CURSOS Y TALLERES </h2>
                <a href="{{route('cursos.create')}}">Crear Curso</a>

            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        @foreach ($cursos as $curso)
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper">
                                <img src="{{asset('img/face.jpg')}}"  alt="">
                                <br> <br>
                            </div>
                            
                        </div>
                        <div class="swiper-pagination">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio-info">

                        <h3>{{$curso->Nombre}}</h3>
                        <ul>
                            <li><strong>Inversión</strong>: {{$curso->Precio}} </li>
                            <li><strong>Expositor</strong>: {{$curso->Expositor}} </li>
                            <li><strong>lugar</strong>: {{$curso->Lugar}}</li>
                            <li><strong>Informaciones</strong>: 79797679</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Detalles del curso</h2>
                        <p>
                            {{$curso->Descipcion}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </section><!-- End Portfolio Details Section -->

    <hr>
    
</main>

@endsection