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
    <link href="{!! asset('css/normas.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('css/galeria.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('css/biblioteca.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('css/clubes.css') !!}" rel="stylesheet"/>
    <link rel="stylesheet" href="{!!asset('css/portofolio.css')!!}">
    <link href="{!! asset('css/footer.css') !!}" rel="stylesheet"/>
    {{-- js --}}

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
--}}
    
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1><a href="/" ><img src="{{asset('img/Logo HD.fw.png')}}" alt="" class="img-fluid">  <span class="mostrar"> CDA</span> <span class="ocultar">COLEGIO DE AUDITORES</span></a></h1>
            
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active " href="/">INICIO</a></li>
            <li class="dropdown"><a href="#"><span>Quienes Somos</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="personeriaJuridica">Personería Juridica</a></li>
                <li><a href="estatutoReglamentos">Estatuto y Reglamento</a></li>
                <li><a href="/">Estructura Organica</a></li>
                <li><a href="/">Nuestra Gestión</a></li>
                <li><a href="directorioEjecutivo">Directorio Ejecutivo</a></li>
                </ul>
            </li>
            <li class="dropdown nav-link scrollto"><a href="#"><span>Normativa Legal</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="#">CPE</a></li>
                    <li><a href="#">LEYES </a></li>
                    <li><a href="#">DECRETOS </a></li>
                    <li><a href="normas">NORMAS </a></li>
                </ul>
            </li>
            
            <li class="dropdown nav-link scrollto"><a href="#"><span>Deportes A.D.A.</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="historia">HISTORIA</a></li>
                <li><a href="directoriaADA">DIRECTORIO</a></li>
                <li><a href="historia">INSCRIPCIONES</a></li>
                <li><a href="clubes">CLUBES </i></a></li>
                </ul>
            </li>
            <li><a href="tribunalEtica" class="nav-link scrollto">Tribunal de Ética</a></li>
            <li><a href="consejoTecnico" class="nav-link scrollto">Consejo Tecnico</a></li>

            <li><a href="requisitosInscripcion">Requisitos de Inscripcion</a></li>
            <li><a href="noticias">Noticias</a></li>
            @auth
            <h6>{{auth()->user()->name}}</h6>
            <li><a href="{{ route('logout.perform') }}">logout</a></li> 
            @endauth
            </ul>
            
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        </div>

    </header><!-- End Header -->
    
    
    @yield('content') 

<!-- ======= Footer ======= -->






<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-info">
                <h3><img src="{{asset('img/Logo HD.fw.png')}}" alt="" class="" style="height: 50px;"> COLEGIO DEPARTAMENTAL DE AUDITORES </h3>
              
                <p><i class="bi bi-geo-alt"></i> Calle Jordán Nº 224 - Edificio Abugoch Planta Baja Of. 002.</p>
                <p><i class="bi bi-globe"></i> Cochabamba, Bolivia.</p>
                <p><i class="bi bi-envelope"></i> Correo: info@auditores.org.bo</p>
                <p><i class="bi bi-telephone-fill"></i> Teléfono: (+591) 4509208</p>
                <p><i class="bi bi-newspaper"></i> Fax: (+591) 4256331</p>
                <p><i class="bi bi-phone"></i> Celular: (+591) 79797679</p>
                

              <div class="social-links mt-3">
                <p class="social">
                    {{-- <a href="#"><span class="bi bi-twitter"></span></a> --}}
                    <a href="https://www.facebook.com/cdauditores" target="_blank"><span class="bi bi-facebook"></span></a>
                    {{-- <a href="#"><span class="bi bi-instagram" target="_blank"></span></a> --}}
                    <a href="https://www.youtube.com/channel/UCG2YAbiSJqm2aVHcEagUITg/featured"><span class="bi bi-youtube" target="_blank"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>PAGINAS DE INTERES</h4>
            <ul class="list-unstyled">
                <li><a href="https://www.impuestos.gob.bo/" target="_blank"><i class="bi bi-chevron-right"></i> SERVICIO DE IMPUESTOS NACIONALES</a></li>
                <li><a href="https://www.fundempresa.org.bo/" target="_blank"><i class="bi bi-chevron-right"></i> SEPREC</a></li>
                <li><a href="https://auditorescontadoresbolivia.org/" target="_blank"><i class="bi bi-chevron-right"></i> COLEGIO DE AUDITORES DE BOLIVIA</a></li>
                <li><a href="https://www.ait.gob.bo/" target="_blank"><i class="bi bi-chevron-right"></i> AUTORIDAD DE IMPUGNACION TRIBUTARIA</a></li>
                <li><a href="https://www.mintrabajo.gob.bo/" target="_blank"><i class="bi bi-chevron-right"></i> MINISTERIO DE TRABAJO</a></li>
                <li><a href="https://www.cns.gob.bo/" target="_blank"><i class="bi bi-chevron-right"></i> CAJA NACIONAL DE SALUD</a></li>
                <li><a href="https://www.gestora.bo/" target="_blank"><i class="bi bi-chevron-right"></i> GESTORA</a></li>
                <li><a href="https://www.contraloria.gob.bo/" target="_blank"><i class="bi bi-chevron-right"></i> CONTRALORIA</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Otras Paginas</h4>
            <ul>
                <li><a href="https://www.cps.org.bo/cochabamba" target="_blank"><i class="bi bi-chevron-right"></i> CAJA PETROLERA</a></li>
                <li><a href="https://cajacordescba.bo/" target="_blank"><i class="bi bi-chevron-right"></i> CAJA CORDES</a></li>
                <li><a href="https://www.aduana.gob.bo/aduana7/" target="_blank"><i class="bi bi-chevron-right"></i> ADUANA NACIONAL</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        Copyright &copy;<script>document.write(new Date().getFullYear())</script><b> CDA-CBBA</b>
    </div>
      <div class="credits">
        <b>COLEGIO DEPARTAMENTAL DE AUDITORES </b>
    </div>
    </div>
  </footer><!-- End Footer -->


  

        <div id="preloader">
            <div class="line"></div>
        </div>
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div class="btn-flotante sm" data-aos="fade-up" data-aos-delay="100">    
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
    <script src="{!! asset('js/index.js')!!}"></script>
    
    <script src="{!! asset('js/main.js')!!}"></script>
    
</body>
</html>