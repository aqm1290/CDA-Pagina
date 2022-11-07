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
                        <h1 data-aos="fade-up" data-aos-delay="100">DIRECTORIO A.D.A.
                        </h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section id="our-values" class="our-values">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">  
                            <section id="faq" data-aos="flip-left" class="faq section-bg">
                                <div class="container" >
                                    <div class="section-title">
                                        <h2 class="card-title">Actual directorio a.d.a.</h2>
                                        <p class="card-text parrafo">
                                            El actual Directorio de la Asociación Deportiva de Auditores - A.D.A. esta compuesto por:
                                        </p>
                                            <!-- ======= Pricing Section ======= -->
                                        <section id="pricing" class="pricing">
                                            <div class="container">
                                                <div class="section-header">
                                                    <img src="{{asset('img/direcotrioADA.png')}}" alt="" class="imgCT img-fluid">
                                                    <br>
                                                </div>
                                                <div class="row gy-4 gx-lg-5">
                                                    <div class="col-lg-12">
                                                        <div class="pricing-item">
                                                            
                                                            <h3>PRESIDENTE</h3>
                                                            <h4>Lic. Aud. Ramiro A. Escobar Antezana</h4>
                                                        </div>
                                                    </div><!-- End Pricing Item -->
                                                    <div class="col-lg-12">
                                                        <div class="pricing-item">
                                                            <h3>VICEPRESIDENTE</h3>
                                                            <h4>Lic. Aud. Teresa S. Mercado Rocha</h4>
                                                        </div>
                                                    </div><!-- End Pricing Item -->
                                                    <div class="col-lg-12">
                                                        <div class="pricing-item">
                                                            <h3>  SECRETARÍA DE ACTAS</h3>
                                                            <h4>Lic. Aud. Palmira Nogales Espinoza</h4>
                                                        </div>
                                                    </div><!-- End Pricing Item -->
                                                    <div class="col-lg-12">
                                                        <div class="pricing-item">
                                                            <h3>SECRETARÍA DE FINANZAS</h3>
                                                            <h4>Lic. Aud. Marcelo Jaldín Echalar</h4>
                                                        </div>
                                                    </div><!-- End Pricing Item -->
                                                    <div class="col-lg-12">
                                                        <div class="pricing-item">
                                                            <h3>SECRETARÍA DE HABILITACIONES</h3>
                                                            <h4>Lic. Aud. Neiva K. Camacho Arze</h4>
                                                        </div>
                                                    </div><!-- End Pricing Item -->
                                                    <div class="col-lg-12">
                                                        <div class="pricing-item">
                                                            <h3>SECRETARÍA DE HACIENDA</h3>
                                                            <h4>Lic. Aud. Marcelo A. Jaldin Echalar</h4>
                                                        </div>
                                                    </div><!-- End Pricing Item -->
                                                    
                                                </div>
                                            </div>
                                        </section><!-- End Pricing Section -->
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection