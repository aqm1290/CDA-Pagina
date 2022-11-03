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
                        <h1 data-aos="fade-up" data-aos-delay="100"> CURSOS Y NOTICIAS
                        </h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    
    <!-- ======= curso1 Details Section ======= -->
    <section id="curso1-details" class="curso1-details">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <h4>{{$cursos->Nombre}}</h4>
                    <p>{{$cursos->Lugar}}</p>
                    <p>{{$cursos->Fecha}}</p>
                    <p>{{$cursos->Hora}}</p>
                    <p>{{$cursos->Categoria}}</p>
                    <p>{{$cursos->Precio}}</p>
                    <p>{{$cursos->Expositor}}</p>
                    <p>{{$cursos->TextoAdicional}}</p>

                </div>
                <div class="col-lg-8">
                    <img src="/Imagen/{{$cursos->Imagen}}"   alt="" class="img-fluid cursos1-img">
                    <h3>{{$cursos->Nombre}}</h3>
                    <p>{{$cursos->Lugar}}</p>
                    <p>{{$cursos->Fecha}}</p>
                    <p>{{$cursos->Hora}}</p>
                    <p>
                        {{$cursos->Descipcion}}
                    </p>
                    {{-- <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul> --}}
                    <div class="flex justify-center rounded-lg text-lg" role="group">
                        <!-- botón editar -->
                        <a href="{{route('cursos.edit',$cursos->id)}}" class="">Editar</a>

                        <!-- botón borrar -->
                        <form action="{{route('cursos.destroy', $cursos->id)}}" method="POST" class="formEliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Service Details Section -->
    
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