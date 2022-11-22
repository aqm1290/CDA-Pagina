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
                        <h1 data-aos="fade-up" data-aos-delay="100">Fotos
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
                <h2 class="section-heading">FOTOS </h2>
                @auth
                <a href="{{route('fotos.create')}}">Crear FOTO</a>
                @endauth

            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    
    <!-- ======= Services Section ======= -->
    <section id="galeria" class="galeria">
        <div class="container">
        
        
            <div class="row galeria-container">
                @foreach ($fotos as $foto)
        
                <div class="col-lg-4 col-md-6 galeria-item filter-app">

                    <div class="galeria-wrap">
                        <img src="/Imagen/{{$foto->Imagen}}" class="img-fluid" alt="">
                        <div class="galeria-info">
                            
                            <div class="galeria-links">
                                <a href="/Imagen/{{$foto->Imagen}}" data-gallery="galeriaGallery" class="galeria-lightbox" title="{{$foto->Nombre}}"><i class="bi bi-plus"></i></a>
                            </div>
                            <h4>{{$foto->Nombre}}</h4>
                        </div>

                        

                    </div>

                </div>
                @endforeach

            </div>
        
            </div>
        </section><!-- End galeria Section -->

</main>

@endsection