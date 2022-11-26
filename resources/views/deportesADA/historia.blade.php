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
                        <h1 data-aos="fade-up" data-aos-delay="100">HISTORIA A.D.A.
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
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4 class="d-none d-lg-block" id="h4">Acta de Constitución</h4>
                    </a>
                    </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    
                    <h4 class="d-none d-lg-block" id="h4">Primer directorio del a.d.a.</h4>
                    </a>
                </li>
                
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <h4 class="d-none d-lg-block" id="h4">Inscripción jugadores al A.D.A.</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                    <h4 class="d-none d-lg-block" id="h4">Clubs fundadores</h4>
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
                                            <h3> <em> Acta</em>  de Constitución</h3>
                                            <p>Adjunto a la presente, ponemos en su conocimiento el "Acta de constitución de la Asociación Deportiva de auditores - A.D.A." , donde se marca los lineamientos y directrices para la conformación del A.D.A.</p>
                                            
                                        </div>
                                        <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                                            <div class="img">
                                                <img src="{{asset('img/acta1.jpg')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><!-- End Call To Action Section -->
                        </div>
                        
                    </div>
                </div>




                <div class="tab-pane" id="tab-2">
                    <div class="row">
                            <div class="tab-content">
                                <section id="cta1" class="cta1">
                                    <div class="container" data-aos="zoom-out">
                                        <div class="row g-5">
                                            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                                                <h3>   Primer <em> directorio</em> del a.d.a.</h3>
                                                    <p>El 13 de noviembre del 2001, se conformo la Asociación deportiva de Auditores (A.D.A.) y del cual el primer directorio del A.D.A. estaba conformado por:</p>
                                                    <div class="">
                                                    <h5><b>PRESIDENTE</b>.....................................................Lic. Aud. Eloy V. Iporre
                                                    </h5>
                                                    <h5><b>SECRETARIO DE ACTAS Y MATRICULA	</b>.....Lic. Aud. Pablo Quispe F.
                                                    </h5>
                                                    <h5><b>SECRETARIO DE HACIENDA</b>...................Lic. Aud. Carola Guzmán L.
                                                    </h5>
                                                    <p>Reconocemos la labor de nuestros colegas, que dejaron los pilares de lo que hoy en día es la ASOCIACIÓN DEPORTIVA DE AUDITORES(A.D.A.)</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                                                <div class="img">
                                                    <img src="{{asset('img/drectiro.jpg')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section><!-- End Call To Action Section -->
                            </div>
                    </div>
                </div>


    

                <div class="tab-pane" id="tab-4">
                    <div class="row">
                            <div class="tab-content">
                                <section id="cta1" class="cta1">
                                    <div class="container" data-aos="zoom-out">
                                        <div class="row g-5">
                                            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                                                <h3>Inscripción de <em> nuevos</em>  jugadores al A.D.A.</h3>
                                                <p>Todo socio(a) del Colegio de Auditores de Cochabamba, que quiera participar en los diferentes campeonatos de las diferentes disciplinas deportivas que organiza el ADA, primeramente se tiene que inscribir al Club de su preferencia, dado que la competencia es siempre entre los diferentes clubs y no a título personal.

                                                    En este enlace podrá encontrar la lista de clubs, con su respectivo delegado para solicitar la inscripción al club de su preferencia.</p>
                                                
                                            </div>
                                            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                                                <div class="img">
                                                    <img src="{{asset('img/drectiro.jpg')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section><!-- End Call To Action Section -->
                            </div>
                    </div>
                </div>


                <div class="tab-pane" id="tab-5">
                    <div class="row">
                            <div class="tab-content">
                                <section id="cta1" class="cta1">
                                    <div class="container" data-aos="zoom-out">
                                        <div class="row g-5">
                                            <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                                                <h3> <em> Clubs </em> fundadores.</h3>
                                                <p>
                                                    Los primeros Clubs que se inscribieron a la Asociación Deportiva de Auditores (A.D.A) y que participaron en las diferentes disciplinas fueron los siguientes:
                                                    <br>
                                                    1.- AUDIMILENUM. <br>
                                                    2.- EFECTIVOS. <br>
                                                    3.- MASTER. <br>
                                                    4.- ACTIVOS. <br>
                                                    5.- DEPORTIVO C.G.R. <br>
                                                    6.- BIMONETARIO. <br>
                                                    El Colegio de Auditores de Cochabamba, brinda un cordial saludo y felicitación a estos CLUB's FUNDADORES, ya que gracias a ellos se fomentó el deporte y la sana convivencia deportiva entre los socios de nuestra institución.
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                                                <div class="img">
                                                    <img src="{{asset('img/clubes.jpg')}}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section><!-- End Call To Action Section -->
                            </div>
                    </div>
                </div>




            </div>
        </section>
        <!-- End Tabs Section -->
    </main>


@endsection