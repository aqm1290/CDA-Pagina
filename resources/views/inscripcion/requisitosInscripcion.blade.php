@extends('layouts.layouts')

@section('title', 'Estatuto y Reglamentos')

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
                        <h1 data-aos="fade-up" data-aos-delay="">REQUISITOS PARA AFILIARSE</h1>
                        
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
                <li class="nav-item col-6">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block" id="h4">REQUISITOS PARA AFILIARSE</h4>
                    </a>
                    </li>
                <li class="nav-item col-6">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <i class="ri-store-line"></i>
                    <h4 class="d-none d-lg-block" id="h4">BENEFICIOS PARA LOS AFILIADOS</h4>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                    {{-- <div class="col-lg-8 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                    </div> --}}
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>BENEFICIOS DE PERTENECER A NUESTRA INSTITUCIÓN</h3>
                            <p class="parrafoafiliares">1.- Por su afiliación al Colegio de Auditores de Cochabamba, el profesional recibe su matrícula de socio, que lo acredita como profesional registrado; además después de un corto tiempo, se le entrega la credencial de afiliación al Colegio de Auditores de Bolivia (Una vez que se realice al trámite correspondiente).
                                <br>2.- Nuestros asociados, pueden solicitar en secretaría del colegio, el Certificados de Registro, extendido por el Colegio de Auditores de Cochabamba, el mismo que certifica que el profesional se halla inscrito y habilitado para el ejercicio de la profesión; el certificado de registro lo puede usar en trámites administrativos, legales, tributarios y otros.
                                <br>3.- Todo asociado de nuestra institución tendrá el respaldo institucional en el ejercicio de la profesión.
                                <br>4.- Nuestra institución realiza la capacitación y actualización permanente de los asociados mediante cursos, seminarios, congresos, talleres y conferencias, tanto virtuales como presenciales; todos los cursos con descuentos especiales para los asociados a nuestra institución.
                                <br>5.- Nuestros asociados tienen derecho a adquirir el Certificado de Solvencia Profesional, tanto para balances y/o auditorias, el mismo que certifica que ese trabajo fue realizado por un profesional debidamente registrado.
                                <br>6.- Como asociados de nuestra institución, tiene derecho de estar informado de las actividades del Colegio de Auditores, la misma que se realiza a través de:
                                <ul>
                                    <li><i class="bi bi-circle-fill"></i> Página Web.</li>
                                    <li><i class="bi bi-circle-fill"></i> Correo Electrónico.</li>
                                    <li><i class="bi bi-circle-fill"></i> Página Facebook</li>
                                    <li><i class="bi bi-circle-fill"></i>Grupos de WhatsApp</li>
                                </ul>
                                <p class="parrafoafiliares"> 7.- Para una mejor atención para el pago de sus aportes mensuales, nuestros asociados puede hacerlo mediante transferencia bancaria, depósito en el banco, pago a los cobradores o realizar el pago en caja de nuestra institución.Nuestra cuenta es: </p>
                                <ul>
                                    <li><i class="bi bi-dash"></i><b>	Nº cuenta:</b>	 4010499038</li>
                                    <li><i class="bi bi-dash"></i><b>Banco:</b> 	         Mercantil Santa Cruz</li>
                                    <li><i class="bi bi-dash"></i><b>Nombre:</b> 	 Colegio Departamental de Auditores </li>
                                    <li><i class="bi bi-dash"></i><b>Tipo cuenta:</b>	 Cuenta corriente</li>
                                    <li> <i class="bi bi-dash"></i><b>Nit:</b>     		 1022051025</li>

                                </ul>
                                
                                <p class="parrafoafiliares"> 8.- Cada determinado tiempo, revisamos y renovamos los convenios con Universidades Públicas y Privadas con las cuales se establece descuentos para la realización de Diplomados y Maestrías.</p>
                                <p class="parrafoafiliares"> 9.- Nuestros asociados cuentan con el Seguro de Vida por muerte natural o accidente, prima que se cancela a los familiares, previa presentación de los requisitos solicitados a los herederos legales.</p>
                                <p class="parrafoafiliares"> 10.- Todos nuestros asociados, tienen derecho a participar de las actividades del colegio que se realizan durante doto el año, como ser: capacitaciones, campeonatos deportivos, olimpiadas, festejos, agasajos y otros.</p>
                                <p class="parrafoafiliares"> 11.- Cada año, se entregan reconocimientos a nuestros asociados sobresalientes y además a todos los asociados que cumplen 20 años de antigüedad en nuestra institución.</p>

                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{asset('img/BENEFICIOS.png')}}"  alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Tabs Section -->


</main><!-- End #main -->
@endsection