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
                        <h1 data-aos="fade-up" data-aos-delay="100">
                            CURSO NUEVO
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <div class="container">
    <h2> EDITAR CURSO O NOTICIA</h2>
    <form action="{{ route('cursos.update',$cursos->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        <div class="">
            <div class="">
                <label class="">Nombre:</label>
                <input name="Nombre" value="{{ $cursos->Nombre }}" class="" type="text" required/>
            </div>
            <div class="">
                <label class="">Descripción:</label>
                <input name="Categoria" value="{{ $cursos->Categoria }}" class="" type="text" required/>
            </div>
        </div>
        <br>





        <div class="">
            <img src="/Imagen/{{ $cursos->Imagen }}" width="200px" id="imagenSeleccionada">
        </div>                                    
        
        <div class="">
        <label class="">Subir Imagen</label>
            <div class=''>
                <label class=''>
                    <div class=''>
                    <svg class="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class=''>Seleccione la imagen</p>
                    </div>
                <input name="Imagen" id="Imagen" type='file' class="hidden" />
               
                </label>
            </div>
        </div>



        <div class="">
            <div class="">
                <label class="">Lugar:</label>
                <input name="Lugar" value="{{ $cursos->Lugar }}" class="" type="text" required/>
            </div>
            <div class="">
                <label class="">Fecha:</label>
                <input name="Fecha" value="{{ $cursos->Fecha }}" class="" type="text" required/>
            </div>
        </div>

        <div class="">
            <div class="">
                <label class="">Hora:</label>
                <input name="Hora" value="{{ $cursos->Hora }}" class="" type="text" required/>
            </div>
            <div class="">
                <label class="">Precio:</label>
                <input name="Precio" value="{{ $cursos->Precio }}" class="" type="text" required/>
            </div>
        </div>

        <div class="">
            <div class="">
                <label class="">Expositor:</label>
                <input name="Expositor" value="{{ $cursos->Expositor }}" class="" type="text" required/>
            </div>
            <div class="">
                <label class="">TextoAdicional:</label>
                <input name="TextoAdicional" value="{{ $cursos->TextoAdicional }}" class="" type="text" required/>
            </div>
            <div class="">
                <label class="">Descipcion:</label>
                <input name="Descipcion" value="{{ $cursos->Descipcion }}" class="" type="text" required/>
            </div>
        </div>

        
        <div class=''>
            <a href="{{ route('cursos.index') }}" class=''>Cancelar</a>
            <button type="submit" class=''>Guardar</button>
            </div>

    </form>

</div>
</main>
<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#Imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>