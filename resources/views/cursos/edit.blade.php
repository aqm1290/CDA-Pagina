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
    <h2>CREAR NUEVO CURSO O NOTICIA</h2>
    <form action="{{route('cursos.update',$cursos->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">
            Nombre <br>
            <input type="text" name="Nombre">
        </label>
        <br>
        <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="imagenSeleccionada" style="max-height: 300px;">           
        </div>

        <div>
            <label>Subir Imagen</label>
                <div >
                    <label>
                        <div>
                        <p>Seleccione la imagen</p>
                        </div>
                    <input name="Imagen" id="Imagen" type='file' class="hidden" />
                    </label>
                </div>
        </div>
        
        <label for="">
            Lugar <br>
            <input type="text" name="Lugar">
        </label>
        <br>
        
        <label for="">
            Fecha <br>
            <input type="text" name="Fecha">
        </label>
        <br>
        
        <label for="">
            Hora <br>
            <input type="text" name="Hora">
        </label>
        <br>
        <label for="">
            Categoria <br>
            <input type="text" name="Categoria">
        </label>
        <br>
        <label for="">
            Precio <br>
            <input type="text" name="Precio">
        </label>
        <br>
        <label for="">
            Expositor <br>
            <input type="text" name="Expositor">
        </label>
        <br>
        <label for="">
            TextoAdicional <br>
            <input type="text" name="TextoAdicional">
        </label>
        <br>
        <label for="">
            Descipcion <br>
            <textarea name="Descipcion" id="" cols="30" rows="10"></textarea>
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>

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
@endsection