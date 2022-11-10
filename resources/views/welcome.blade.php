@extends('layouts.layouts')

@section('title', 'CDA-CBBA')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div class="wave">
            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                </g>
                </g>
            </svg>
        
        </div>
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">COLEGIO DEPARTAMENTAL DE<span> AUDITORES</span></h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                    </div>
                </div>
            
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">DIRECTORIO ACUTAL</h2>
                    <div class="img-car">
                        <img src="{{asset('img/jMO6UESZ.jpg')}}" alt="" class="img-fluid">
                    </div>
                        <a href="" class="btn-get-started animate__animated animate__fadeInUp">MAS INFORMACION</a>
                    </div>
                </div>
            
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">NUESTROS CONVENIOS</h2>
                        <div class="img-car">
                            <img src="{{asset('img/personeriaJuridica.png')}}" alt="" class="img-fluid">
                        </div>
                            <a href="" class="btn-get-started animate__animated animate__fadeInUp">MAS INFORMACION</a>
                    </div>
                </div>
            
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                </a>
            
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                </a>
        
            </div>
    </section><!-- End Hero -->

    <main id="main">
    
    <!-- ======= Home Section ======= -->
        <section class="section">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5" data-aos="fade-up">
                <h2 class="section-heading">NUESTRA HISTORIA GENERAL</h2>
                </div>
            </div>
            <section class="section">
                <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 me-auto">
                    <p class="mb-5">Hasta el año 1993, los profesionales auditores formaban parte de lo que se llamaba el Colegio de Profesionales Economistas Auditores y Administradores de Empresas, 
                        puesto que la cantidad de profesionales existentes en las tres áreas era mínima. Sin embargo, al producirse una expansión demográfica en las tres ramas se tramitó la derogatoria de una ley: Ley del Economista que 
                        justamente era el respaldo de la existencia de un solo Colegio. Producto de ese trámite se dicta en el país el D.S. 23396 del 3 de febrero de 1993 que establece y reconoce la existencia de Colegios de Profesionales diferentes,
                        tanto para economistas, auditores y administradores de empresas. Por consiguiente, la fecha oficial de creación del colegio departamental de auditores es el 14 de marzo de 1994, siendo por tanto una organización joven en el que hacer 
                        nacional y departamental. Al tenor de esa disposición, se organizan los Auditores de Cochabamba y se constituye el Colegio Departamental de auditores, habiéndose elegido un Directorio, cuya finalidad principal era la de conseguir la existencia 
                        legal de la organización. 
                        Este hecho es logrado por el reconocimiento de la personalidad Jurídica del colegio departamental de auditores efectuada en el gobierno de la nación, 
                        para lo cual emite la resolución suprema Nro. 213689 en fecha 15 de marzo de 1994</p> 
                    {{-- <p><a href="#" class="btn btn-primary">Download Now</a></p> --}}
                    </div>
                    <div class="col-md-5" data-aos="fade-left">
                    <img src="{{asset('img/historiaGeneral.png')}}" alt="Image" class="img-fluid">
                    </div>
                </div>
                </div>
            </section>
        
            <section class="section">
                <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto order-2">
                    <h2 class="mb-2">MISION</h2>
                    <p class="mb-2">Promover la superación y promoción profesional de los auditores y/o contadores Públicos de Cochabamba velando por el prestigio y dignidad profesional, brindando a la sociedad una orientación en las actividades económicas, 
                        financieras y administrativas, logrando de esa manera que en sus asociados exista un alto compromiso en pro del interés público y con el desarrollo de la sociedad.</p>
                    <br><br><br><h2 class="mb-2">VISION</h2>
                    <p class="mb-4">Promover la superación y promoción profesional de los auditores y/o contadores Públicos de Cochabamba velando por el prestigio y dignidad profesional, brindando a la sociedad una orientación en las actividades económicas, 
                        financieras y administrativas, logrando de esa manera que en sus asociados exista un alto compromiso en pro del interés público y con el desarrollo de la sociedad.</p>
                    {{-- <p><a href="#" class="btn btn-primary">Download Now</a></p> --}}
                    </div>
                    <div class="col-md-6" data-aos="fade-right">
                    <img src="{{asset('img/MisionCDA.png')}}" alt="Image" class="img-fluid"data-aos-delay="300"> 

                    <br>
                    <img src="{{asset('img/VisionCDA.png')}}" alt="Image" class="img-fluid" data-aos-delay="200"> 
                    </div>
                </div>
                </div>
            </section>
        
            
            </section>
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

        <div class="col-md-12" data-aos="fade-up">
            <h2 class="section-heading">NUESTROS CURSOS Y TALLERES</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="">
                    <button class="btn btn-primary" type="button"><a href="cursos" style="margin-bottom: 18px;"> CURSOS</a></button>
                    <br>
                </div>           
                
            </div>
        </div>
        
        <div class="row portfolio-container">
            @foreach ($cursos as $curso)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="fade-up" data-aos-delay="250">
                    <div class="portfolio-wrap">
                        <img src="/Imagen/{{$curso->Imagen}}"  class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$curso->Nombre}}</h4>
                            <p>{{$curso->Precio}}</p>
                            <div class="portfolio-links">
                                <a href="/Imagen/{{$curso->Imagen}}"data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$curso->Nombre}}"><i class="bx bx-plus"></i></a>
                                <a href="{{route('cursos.index')}}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="{{$curso->Nombre}}"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 

            
        </div>
        {{$cursos->links()}}
    </div>
    </section><!-- End Portfolio Section -->





            <!-- ======= equiposADA Section ======= -->
            <section id="equiposADA" class="equiposADA">
                <div class="container">
        
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-9" data-aos="fade-up">
                            <h2 class="section-heading">ASOCIACION DEPORTIVA DE AUDITORES - A.D.A.</h2>
                        </div>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-3">
                            <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">HISTORIA A.D.A.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">ACTIVOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">AUDIMILENIUM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">C.G.R.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">BIMONETARIOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">EFECTIVOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">MASTER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">SENIOR CLUB</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">EXIGIBLES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">VALOR FUTURO</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>DEPORTES A.D.A.</h3>
                                            <p class="fst-italic">El 13 de noviembre del 2001, se conformo la Asociación deportiva de Auditores (A.D.A.) y del cual el primer directorio del A.D.A. estaba conformado por: <br>
                                            <b>PRESIDENTE</b>.............Lic. Aud. Eloy V. Iporre. <br>
                                            <b>SECRETARIO DE ACTAS Y MATRICULA</b>............Lic. Aud. Pablo Quispe F.<br>
                                            <b>SECRETARIO DE HACIENDA</b>..........Lic. Aud. Carola Guzmán L.
                                            <br>
                                            <br>
                                            Reconocemos la labor de nuestros colegas, que dejaron los pilares de lo que hoy en día es la ASOCIACIÓN DEPORTIVA DE AUDITORES</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{asset('img/Logo HD.fw.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>ACTIVOS</h3>
                            <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                            <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/ACTIVOS.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>AUDIMILENIUM</h3>
                            <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                            <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/AUDIMILENIUM.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>C.G.R.</h3>
                            <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                            <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/CGR.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>BIMONETARIOS</h3>
                            <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                            <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/BIMONETARIOS.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-6">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>EFECTIVOS</h3>
                            <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                            <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/EFECTIVOS.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-7">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>MASTER</h3>
                            <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                            <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/MASTERFINAL.png')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-8">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>SENIOR CLUB</h3>
                            <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                            <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/SENIOR CLUB.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-9">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>EXIGIBLES</h3>
                            <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                            <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/EXIGIELES.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-10">
                        <div class="row gy-4">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>VALOR FUTURO</h3>
                            <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                            <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                            <img src="{{asset('img/logosAda/VALOR FUTURO.jpg')}}" alt="" class="img-fluid">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section><!-- End equiposADA Section -->
            
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5" data-aos="fade">
                        <div class="col-md-8">
                            <h2 class="section-heading">NUESTRO COMPLEJO </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="complejo">
                                <h3>COMPLEJO CDA</h3>
                                <div class="row justify-content-center text-center">
                                    <div class="col-md-7">
                                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="300">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="review text-center">
                                                        <h3>IMAGENES</h3>
                                                        <img src="{{asset('img/Logo HD.fw.png')}}" alt="Image" class="img-fluid rounded-circle mb-3">
                                                        
                                                    </div>
                                                </div><!-- End testimonial item -->
                                                <div class="swiper-slide">
                                                    <div class="review text-center">
                                                        <h3>MAS IMAGENES</h3>
                                                        <img src="{{asset('img/Logo HD.fw.png')}}" alt="Image" class="img-fluid rounded-circle mb-3">
                                                        
                                                    </div>
                                                </div><!-- End testimonial item -->
                                                <div class="swiper-slide">
                                                    <div class="review text-center">
                                                        <h3>COMPLEJO CDA </h3>
                                                        <img src="{{asset('img/Logo HD.fw.png')}}" alt="Image" class="img-fluid rounded-circle mb-3">
                                                    </div>
                                                </div><!-- End testimonial item -->
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="complejo">
                                <div class="col-md-12 me-auto text-center text-md-start mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                                    <h2>DIRECCION DEL COMPLEJO CDA.</h2>
                                    <div>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15228.737079710781!2d-66.21922507271724!3d-17.40294228932365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37366e21f1041%3A0x36954263d87bb9!2sComplejo%20del%20Colegio%20de%20auditores%20-%20Cochabamba!5e0!3m2!1ses!2sbo!4v1666969113649!5m2!1ses!2sbo" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        
            <!-- ======= Testimonials Section ======= -->
            <section class="section border-top border-bottom">
                <div class="container">
                    {{-- <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-4">
                            <h2 class="section-heading">SERVICIOS</h2>
                        </div>
                    </div> --}}
                    <div class="row justify-content-center text-center">
                        <div class="col-md-7">
                            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="review text-center">
                                            <div class="row justify-content-center text-center mb-6">
                                                <div class="col-md-8">
                                                    <h2 class="section-heading">SERVICIOS</h2>
                                                </div>
                                            </div>
                                            <blockquote>
                                            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam
                                                aperiam dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi,
                                                provident voluptates consectetur maiores quos.</p>
                                            </blockquote>
                                            <p class="review-user">
                                            <img src="{{asset('img/Logo HD.fw.png')}}"alt="Image" class="img-fluid rounded-circle mb-3">
                                            <span class="d-block">
                                                <span class="text-black">Jean Doe</span>, &mdash; App User
                                            </span>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->
                                    <div class="swiper-slide">
                                        <div class="review text-center">
                                            <div class="row justify-content-center text-center mb-6">
                                                <div class="col-md-8">
                                                    <h2 class="section-heading">BIBLIOTECA</h2>
                                                </div>
                                            </div>
                                            <blockquote>
                                            <p >Adjunto a la presente, ponemos a su disposición las diapositivas de los cursos virtuales, que se llevaron a cabo desde el 07 de abril al 09 de mayo
                                                <br>
                                                Adjunto a la presente, ponemos a su disposición las diapositivas de los cursos virtuales, que se llevaron a cabo desde el 10 de mayo
                                            </p>
                                            </blockquote>
                                            <p class="review-user">
                                                <a href="#">Material Digital cursos virtuales I CDA</a><br>
                                                <a href="#">Material Digital cursos virtuales II CDA</a>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->
                                    <div class="swiper-slide">
                                        <div class="review text-center">
                                            <div class="row justify-content-center text-center mb-6">
                                                <div class="col-md-8">
                                                    <h2 class="section-heading">BOLETINES</h2>
                                                </div>
                                            </div>
                                            <blockquote>
                                            <p>Boletines Informativos</p>
                                            
                                            </blockquote>
                                            <p class="review-user">
                                                <img src="{{asset('img/Logo HD.fw.png')}}"alt="Image" class="img-fluid rounded-circle mb-3">
                                                <span class="d-block">
                                                    <a href="#">BOLETINES INFORMATIVOS</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->
                                    <div class="swiper-slide">
                                        <div class="review text-center">
                                            <div class="row justify-content-center text-center mb-6">
                                                <div class="col-md-8">
                                                    <h2 class="section-heading">CONVENIOS</h2>
                                                </div>
                                            </div>
                                            <p class="review-user">
                                                <img src="{{asset('img/Logo HD.fw.png')}}"alt="Image" class="img-fluid rounded-circle mb-3">
                                                <span class="d-block">
                                                    <a href="convenios">CONVENIOS</a>
                                                </span>
                                            </p>
                                        </div>
                                    </div><!-- End testimonial item -->
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Testimonials Section -->

            
            <!-- ======= CTA2 Section ======= -->
            <section class="section cta2-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 me-auto text-center text-md-start mb-3 mb-md-0">
                            <h2>NUESTRAS OFICINAS ESTA EN:</h2>
                            <div>
                                <iframe style="border:0; border-radius:30px; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4527.699618477289!2d-66.1568455866919!3d-17.396125345463233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37315d112e6b5%3A0x3f2147ff52f3ba79!2sEdificio%20Abugoch!5e0!3m2!1ses!2sbo!4v1665159476949!5m2!1ses!2sbo" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </section><!-- End CTA Section -->
        </section>
        <div class="btn-flotante1" data-aos="fade-up" data-aos-delay="100">    
            <img src="{{asset('img/Logo HD.fw.png')}}" class="wpp1" alt="">
        </div>
    </main><!-- End #main -->


@endsection

