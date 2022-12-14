@extends('layouts.layouts')

@section('title', 'Convenios')

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
                        <h1 data-aos="fade-up" data-aos-delay="">CONVENIOS</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    
    <section class="breadcrumbs">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-9" data-aos="fade-up">
                <h2 class="section-heading">CONVENIOS </h2>
                @auth

                <a href="{{route('servicios.createConvenios')}}">Crear Convenio</a>
                @endauth

            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="convenios" class="convenios">
        
        <div class="container" data-aos="fade-up">
            <div class="row gy-5">
                @foreach ($convenios as $convenio)
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="convenio-item">
                        <div class="img">
                        <img src="/Imagen/{{$convenio->Imagen}}" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                        {{--  <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>{{$convenio->Nombre}}</h3>
                                </a>
                                <p>{{$convenio->Info}}</p>

                                
                            </div>
                            
                        </div>
                        <div class="col-md">
                            <div class="col-lg-8 download-container text-center">
                                <a class="download align-middle" href="#">VEALO ACA</a>
                            </div>
                        </div>
                </div><!-- End convenio Item -->
                @endforeach
            </div>
        </div>
    </section><!-- End convenios Section -->



</main><!-- End #main -->

@endsection