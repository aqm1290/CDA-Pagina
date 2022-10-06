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
                        <h1 data-aos="fade-up" data-aos-delay="100">
                            CONSEJO TECNICO
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section id="tabs" class="tabs">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-4">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        
                        <h4 class="d-none d-lg-block" id="h4">CONSEJO TÉCNICO DE AUDITORIA Y CONTABILIDAD</h4>
                    </a>
                    </li>
                <li class="nav-item col-4">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    
                    <h4 class="d-none d-lg-block" id="h4">Sistemas Informáticos 2da Feria Tecnológica</h4>
                    </a>
                </li>
                <li class="nav-item col-4">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                    
                    <h4 class="d-none d-lg-block" id="h4">Sistemas Informáticos 2da Feria Tecnológica</h4>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="tab-content">
                            <section id="cta1" class="cta1">
                                <div class="container" data-aos="zoom-out">
                                    <div class="row g-5">
                                        <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                                            <h3> <em>CONSEJO TÉCNICO</em> DE AUTORIDAD Y CONTABILIDAD </h3>
                                            <p>En fecha 16 de octubre de 2021, dados los resultados de la elección por voto directo en segunda vuelta de fecha 09 de octubre de 2021, tomó posesión el actual Directorio del Consejo Técnico de Auditoria y Contabilidad  por la Gestión 2021 – 2023 en su calidad de frente ganador bajo la sigla  CPA de acuerdo al siguiente detalle de carteras:</p>
                                            <div class="">
                                                <h5><b>PRESIDENTE</b>.......................Lic. Aud. José Antonio Mendoza Crespo
                                                </h5>
                                                <h5><b>SECRETARIO GENERAL</b>..............................Lic. Aud. René Mora López
                                                </h5>
                                                <h5><b>SECRETARIA DE ACTAS</b>...................Lic. Aud. Elvira Veizaga Aduviri
                                                </h5>
                                                <h5><b>VOCAL</b>.....................................Lic. Aud. Geovanna Mendoza Encinas
                                                </h5>
                                                <h5><b>VOCAL</b>...............................Lic. Aud. Marco Antonio Sanchez Villarte
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                                            <div class="img">
                                                <img src="{{asset('img/JK0VzE5D.jpg')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><!-- End Call To Action Section -->
                        </div>
                        
                    </div>
                </div>




                <div class="tab-pane active show" id="tab-2">
                    <div class="row">
                        <div class="tab-content">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Tabs Section -->

</main>

@endsection