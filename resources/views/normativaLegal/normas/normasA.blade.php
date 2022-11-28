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
                        <h1 data-aos="fade-up" data-aos-delay="100">NORMAS AUDITORIA
                        </h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">

    <section id="normasCA" class="normasCA">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-9" data-aos="fade-up">
                    <h2 class="section-heading">NORMAS AUDITORIA </h2>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <img src="{{asset('img/Normas/Norma5.jpg')}}" id="img" class="img-fluid" alt="">
                        <h4><a href="">Normas de Auditoria del CTNAC</a></h4>
                        <p>Para la aplicación de estas normas, favor considerar la resolución 01/2012 del CTNAC sobre vigencia de las normas de Contabilidad Generalmente aceptadas en Bolivia.</p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <img src="{{asset('img/Normas/Norma4.jpg')}}" id="img" class="img-fluid" alt="">
                        <h4><a href="">Resolución CTNAC No. 002/2012</a></h4>
                        <p>CONSEJO TÉCNICO NACIONAL DE AUDITORIA Y CONTABILIDAD RESOLUCIÓN CTNAC N° 001/2012 07 DE NOVIEMBRE DE 2012</p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <img src="{{asset('img/Normas/Norma3.jpg')}}" id="img" class="img-fluid" alt="">
                        <h4><a href="">Advertencia CAUB</a></h4>
                        <p>A continuación ponemos a su disposición para su descarga las Normas Internacionales de Contabilidad - NICNORMAS INTERNACIONALES DE CONTABILIDAD</p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <img src="{{asset('img/Normas/Norma2.jpg')}}" id="img" class="img-fluid" alt="">
                        <h4><a href="">Normas de Auditoria Bid - Fomin</a></h4>
                        <p>A continuación ponemos a su disposición para su descarga las Normas Internacionales de Información Financiera - NIIFNORMAS INTERNACIONALES DE INFORMACIÓN FINANCIERA</p>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <img src="{{asset('img/Normas/Norma1.jpg')}}" id="img" class="img-fluid" alt="">
                        <h4><a href="">Normas Internacionales de Auditoria - NIAS</a></h4>
                        <p>A continuación ponemos a su disposición para su descarga las Normas de Contabilidad del Proyecto BID - FOMINRESOLUCIONES DEL CTNAC</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <img src="{{asset('img/Normas/Norma1.jpg')}}" id="img" class="img-fluid" alt="">
                        <h4><a href="">Resolución 01/2015 del CTNAC</a></h4>
                        <p>A continuación ponemos a su disposición para su descarga las Normas de Contabilidad del Proyecto BID - FOMINRESOLUCIONES DEL CTNAC</p>
                    </div>
                </div>
            </div>
    
            </div>
        </section><!-- End normasCA Section -->
    
</main>

@endsection