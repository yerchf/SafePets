@extends('layouts.app')

@section('content')

<div class="container-fluid pb-5" >
    <div class="row ">
        <img width="100%" height="20%" src="{{ asset('img/Podonga.jpg') }}" alt="imagen-index">
    </div>              
</div>
<div class="container pt-5 pb-5">
    <div class="row d-flex justify-content-center text-center" style="color: #68C6D2">
        <h1 class="row d-flex justify-content-center text-center mb-5" style="color: #68C6D2"><strong>Nosotros</strong></h1>
        <p><strong>
            Safe Pets es un sitio completamente gratuito que busca brindar una segunda oportunidad a animales que han sido <br>
            víctimas de maltrato y no cuentan con un hogar que les de amor y cuidado. Bindamos información <br>
            acerca de casas cuna en el área de San Ramón de Alajuela para facilitar el contacto con 
            estas. Además otro de nuestros objetivos es hacer notar la importancia de que 
            existan este tipo de lugares, donde con amor ayuden a la
            recuperación de los animales y a la vez crear
            concienciapara disminuir el maltrato animal.</strong>
        </p>
    </div>
</div>

@endsection