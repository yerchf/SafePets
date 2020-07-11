@extends('layouts.app')

@section('content')

<div class="container-fluid pb-5" >
    <div class="row ">
        <img width="100%" height="20%" src="{{ asset('img/PyG_juntos.jpg') }}" alt="imagen-index">
    </div>              
</div>

<div class="container pt-5 pb-5">
    <div class="row d-flex justify-content-center text-center" style="color: #68C6D2">
        <h1 class="row d-flex justify-content-center text-center mb-5" style="color: #68C6D2"><strong>Contáctanos</strong></h1>
    </div>
    <div class="row d-flex justify-content-center ml-3">
        <div class="col-md-4">
            <div class="card-contact" style="width:300px; height:420px">
                <p class="pt-3 pl-5"><i class="fas fa-home fa-lg fa-10x" style="color: #4E8B72"></i></p>
                <div class="card-body">
                  <h4 class="card-title text-center">Medios de comunicación</h4>
                  <p class="card-text justify-content-center text-center">Teléfono: </p>
                  <p><i class="card-text fas fa-phone mb-3 ml-5"></i> +506 8888 8888</p>
                  <p class="card-text justify-content-center text-center">Email: </p>
                  <p><i class="card-text fas fa-address-card ml-5"></i> safepets@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-contact" style="width:300px; height:420px">
                <p class="pt-4 ml-4 pl-5"><i class="fas fa-bell fa-lg fa-9x " style="color:#4E8B72"></i></p>
                <div class="card-body">
                  <h4 align="center" class="card-title">Redes sociales</h4>
                  <p class="d-flex justify-content-center">Twitter</p>
                  <a href=""><i class="fab fa-twitter fa-lg fa-2x d-flex justify-content-center" style="color: #00ACEE"></i></a>
                  <p class="d-flex justify-content-center">Facebook</p>
                  <a href=""><i class="fab fa-facebook fa-lg fa-2x d-flex justify-content-center" style="color: #3B5998"></i></a>
                  <p class="d-flex justify-content-center">Instagram</p>
                  <a href=""><i class="fab fa-instagram fa-lg fa-2x d-flex justify-content-center"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-contact" style="width:300px; height:420px">
                <p class="pt-4 ml-3 pl-5"><i class="fas fa-address-card fa-lg fa-9x" style="color: #4E8B72"></i></p>
                <div class="card-body">
                  <h4 align="center" class="card-title">Dirección</h4>
                  <p class="text-center"><i class="card-text fas fa-address-card mr-3 mt-3"></i>Alajuela, San Ramón <br> Alto de Lidia 220m bajando hacia los Ángeles.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection