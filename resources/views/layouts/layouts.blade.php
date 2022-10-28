<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    

        <!-- Favicons -->
    <link href="{{ asset('img/Logo HD.fw.png')}}" rel="icon">
    <link href="{{ asset('img/Logo HD.fw.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    
    
    <link href="{!! asset('vendor/fontawesome-free/css/all.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('vendor/animate.css/animate.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('vendor/aos/aos.css')!!}" rel="stylesheet">
    <link href="{!! asset('vendor/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet"> 
    <link href="{!! asset('vendor/bootstrap-icons/bootstrap-icons.css')!!}" rel="stylesheet">
    <link href="{!! asset('vendor/glightbox/css/glightbox.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('vendor/boxicons/css/boxicons.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('vendor/remixicon/remixicon.css')!!}" rel="stylesheet">
    <link href="{!! asset('vendor/swiper/swiper-bundle.min.css')!!}" rel="stylesheet"> 
{{-- css --}}
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet"/>
    <link rel="stylesheet" href="{!!asset('css/portofolio.css')!!}">
    <link href="{!! asset('css/footer.css') !!}" rel="stylesheet"/>
    {{-- js --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
--}}
    
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1><a href="/"><img src="{{asset('img/Logo HD.fw.png')}}" alt="" class="img-fluid">  CDA</a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active " href="/">INICIO</a></li>
            <li class="dropdown"><a href="#"><span>Quienes Somos</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="personeriaJuridica">Personería Juridica</a></li>
                <li><a href="estatutoReglamentos">Estatuto y Reglamento</a></li>
                <li><a href="/">Estructura Organica</a></li>
                <li><a href="directorioEjecutivo">Directorio Ejecutivo</a></li>
                </ul>
            </li>
            <li class="dropdown nav-link scrollto"><a href="#"><span>Normativa Legal</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="#">CPE</a></li>
                <li><a href="#">Leyes Tributarias</a></li>
                <li><a href="#">Leyes Laborales</a></li>
                <li><a href="#">Leyes Comerciales</a></li>
                <li><a href="#">Decretos Tributarios</a></li>
                <li><a href="#">Decretos Laborales</a></li>
                <li><a href="#">Decretos Comerciales</a></li>
                <li><a href="#">Normas Contabilidad</a></li>
                <li><a href="#">Normas Auditoria</a></li>
                </ul>
            </li>
            
            <li class="dropdown nav-link scrollto"><a href="#departments"><span>Deportes A.D.A.</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="historia">HISTORIA</a></li>
                <li><a href="historia">DIRECTORIO</a></li>
                <li><a href="#">FIXTURE</a></li>
                <li><a href="#">INSCRIPCIONES</a></li>
                <li><a href="historia">Clubes </i></a></li>
                </ul>
            </li>
            <li><a href="tribunalEtica" class="nav-link scrollto">Tribunal de Ética</a></li>
            <li><a href="consejoTecnico" class="nav-link scrollto">Consejo Tecnico</a></li>

            <li><a href="requisitosInscripcion">Requisitos de Inscripcion</a></li>
            
            {{-- <li><a href="contact.html">Contacto</a></li> --}}
            </ul>
            
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        </div>

    </header><!-- End Header -->
    
    
    @yield('content') 

<!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
        <div class="row">
            
            <div class="col-md-6 mb-4 mb-md-0">
                <h3><img src="{{asset('img/Logo HD.fw.png')}}" alt="" class="" style="height: 50px;"> COLEGIO DEPARTAMENTAL DE AUDITORES </h3>
                
                <p><i class="bi bi-geo-alt"></i> Calle Jordán Nº 224 - Edificio Abugoch Planta Baja Of. 002.</p>
                <p><i class="bi bi-globe"></i> Cochabamba, Bolivia.</p>
                <p><i class="bi bi-envelope"></i> Correo: info@auditores.org.bo</p>
                <p><i class="bi bi-telephone-fill"></i> Teléfono: (+591) 4509208</p>
                <p><i class="bi bi-newspaper"></i> Fax: (+591) 4256331</p>

                <p class="social">
                    <a href="#"><span class="bi bi-twitter"></span></a>
                    <a href="https://www.facebook.com/cdauditores" target="_blank"><span class="bi bi-facebook"></span></a>
                    <a href="#"><span class="bi bi-instagram" target="_blank"></span></a>
                    <a href="https://www.youtube.com/channel/UCG2YAbiSJqm2aVHcEagUITg/featured"><span class="bi bi-youtube" target="_blank"></span></a>
                </p>
            </div>
            <div class="col-md-6 ms-auto">
                <div class="row site-section pt-0">
                    <div class="col-md-8  mb-md-0">
                        <h3>PAGINAS DE INTERES</h3>
                        <ul class="list-unstyled">
                            <li><a href="https://www.impuestos.gob.bo/" target="_blank"><i class="bi bi-chevron-right"></i>SERVICIO DE IMPUESTOS NACIONALES</a></li>
                            <li><a href="https://fundempresa.org.bo/" target="_blank"><i class="bi bi-chevron-right"></i>FUNDEMPRESA</a></li>
                            <li><a href="https://auditorescontadoresbolivia.org/" target="_blank"><i class="bi bi-chevron-right"></i>COLEGIO DEPARTAMENTAL DE BOLIVIA</a></li>
                            <li><a href="https://www.ait.gob.bo/" target="_blank"><i class="bi bi-chevron-right"></i>AUTORIDAD DE IMPUGNACION TRIBUTARIA</a></li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-md-7">
            <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear())</script><b> CDA-CBBA</b></p>
            <p class="copyright"><b>COLEGIO DEPARTAMENTAL DE AUDITORES </b></p>
            
            </div>
        </div>

        </div>
    </footer>

    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div class="btn-flotante" data-aos="fade-up" data-aos-delay="100">    
        <a href="https://api.whatsapp.com/send?phone=59179797679" target="_blank"> <img src="{{asset('img/pngwing.com.png')}}" class="wpp" alt="">WHATSAPP</a>
    </div>
    {{-- <div class="btn-flotante1" data-aos="fade-up" data-aos-delay="100">    
        <img src="{{asset('img/Logo HD.fw.png')}}" class="wpp1" alt="">
    </div> --}}

    <script src="{!! asset('vendor/purecounter/purecounter_vanilla.js')!!}"></script>

    <script src="{!! asset('vendor/aos/aos.js') !!}"></script>
    <script src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('vendor/glightbox/js/glightbox.min.js')!!}"></script>
    <script src="{!! asset('vendor/isotope-layout/isotope.pkgd.min.js')!!}"></script>
    
    <script src="{!! asset('vendor/swiper/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js')!!}"></script>
    
    <script src="{!! asset('js/main.js')!!}"></script>
    
</body>
</html>