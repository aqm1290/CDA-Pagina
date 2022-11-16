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
                        <h1 data-aos="fade-up" data-aos-delay="100">CURSOS Y SEMINARIOS
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
                <h2 class="section-heading">CURSOS Y TALLERES </h2>
                <a href="{{route('cursos.create')}}">Crear Curso</a>

            </div>
        </div>
    </section><!-- End Breadcrumbs -->



    {{-- <section id="cursos" class="cursos">
        <div class="container">
            <div class="row">
                @foreach ($cursos as $curso)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{asset('img/acta1.jpg')}}" class="img-fluid" alt="">
                            
                        </div>
                        <div class="member-info">
                            <a href="{{route('cursos.show',$curso->id)}}"><h4 class="">{{$curso->Nombre}}</h4></a>
                            <span> LUGAR: {{$curso->Lugar}}</span>
                            <span>EXPOSITOR: {{$curso->Expositor}}</span>
                            <span>PRECIO: {{$curso->Precio}}</span>
                            <p>DESCRIPCIÓN: {{$curso->Descipcion}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}<!-- End cursos Section -->


    
    <!-- ======= Services Section ======= -->
        <section id="cursos1" class="cursos1 pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                @foreach ($cursos as $curso)

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="course">
                            <div class="course-img">
                                <img src="/Imagen/{{$curso->Imagen}}" alt="" class="img-fluid">
                            </div>
                            <h3><a href="{{route('cursos.show',$curso->id)}}" class="stretched-link">{{$curso->Nombre}}</a></h3>
                            <h6> LUGAR: {{$curso->Lugar}}</h6>
                            <h6>EXPOSITOR: {{$curso->Expositor}}</h6>
                            <h6>PRECIO: {{$curso->Precio}}</h6>
                            <p>DESCRIPCIÓN: {{$curso->Descipcion}}</p>
                            
                        </div>
                            
                        
                    </div>
                    @endforeach
                </div>
            </div>
    </section><!-- End Services Section -->

</main>

<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
        event.preventDefault()
        event.stopPropagation()        
        Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
        }, false)
    })
})()
</script>

@endsection