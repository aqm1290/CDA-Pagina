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
                        <h1 data-aos="fade-up" data-aos-delay="100">CLUBES A.D.A.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    
    <section id="clubes" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-9" data-aos="fade-up">
                    <h2 class="section-heading">NUESTROS CLUBS</h2>
                </div>
            </div>

        <div class="row clubes-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 clubes-item ">
            <div class="clubes-wrap">
            <figure>
                <a href="clubActivos"><img src={{asset('img/LogosAda/ACTIVOS.png')}} class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubActivos">CLUB ACTIVOS</a></h4>
                <p>Lic. Daniel Gonzales</p>
                <p>72225401</p>
                <p>dgonzales@evh.bo</p>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 clubes-item ">
            <div class="clubes-wrap">
            <figure>
                <a href="clubAudimilenium"><img src="{{asset('img/LogosAda/AUDIMILENIUM.png')}}" class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubAudimilenium">AUDIMILENIUM</a></h4>
                <p>Lic. Fredy Lopez	<br>
                72210305 <br>
                frelo65@hotmail.com </p>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 clubes-item ">
            <div class="clubes-wrap">
            <figure>
                <a href="clubBimonetarios"><img src="{{asset('img/LogosAda/BIMONETARIOS.png')}}" class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubBimonetarios">BIMONETARIOS</a></h4>
                <p>Lic. Walter Lijeron	<br>
                71734369 <br>
                Walter.lijeron@hotmail.com</p>    
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 clubes-item ">
            <div class="clubes-wrap">
            <figure>
                <a href="clubCGR"><img src="{{asset('img/LogosAda/CGR.jpg')}}" alt="" class="img-fluid"></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubCGR">C.G.R.</a></h4>
                <p>Lic. Luis Vargas</p>
                <p>76450361</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 clubes-item ">
            <div class="clubes-wrap">
            <figure>
                <a href="clubEfetivos"><img src="{{asset('img/LogosAda/EFECTIVOS.jpg')}}" class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubEfetivos">EFECTIVOS</a></h4>
                <p>Lic. Juan C. Terrazas</p>
                <p>79794096</p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 clubes-item">
            <div class="clubes-wrap">
            <figure>
                <a href="clubExigibles"><img src="{{asset('img/LogosAda/EXIGIELES.png')}}" class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubExigibles">EXIGIBLES</a></h4>
                <p>Lic. Alejandro Taboada	</p>
                <p>72262772</p>
                <p>	alejandrouno607@hotmail.com</p>              
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 clubes-item ">
            <div class="clubes-wrap">
            <figure>
                <a href="clubMaster"><img src="{{asset('img/LogosAda/MASTERFINAL.png')}}" class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubMaster">MASTER</a></h4>
                <p>Lic. Marco Gutierrez</p>
                <p>72217027</p>
                <p>	marcguty@hotmail.com</p>              
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 clubes-item">
            <div class="clubes-wrap">
            <figure>
                <a href="clubSeniorClub"><img src="{{asset('img/LogosAda/SENIOR CLUB.png')}}" class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubSeniorClub">SENIOR CLUB</a></h4>
                <p>	Lic. Pedro Claros</p>
                <p>72281234</p>
                <p>	claros_pedro@hotmail.com</p> 
            </div>
            </div>
        </div>

        

        <div class="col-lg-4 col-md-6 clubes-item">
            <div class="clubes-wrap">
            <figure>
                <a href="clubValorFuturo"><img src="{{asset('img/LogosAda/VALOR FUTURO.png')}}" class="img-fluid" alt=""></a>
            </figure>

            <div class="clubes-info">
                <h4><a href="clubValorFuturo">VALOR FUTURO</a></h4>
                <p>Lic. Juvenal Jamachi	</p>
                <p>68582043</p>
                <p>juvejc11@gmail.com</p>              
            </div>
            </div>
        </div>

        </div>

        </div>
    </section><!-- End clubes Section -->
</main>


@endsection