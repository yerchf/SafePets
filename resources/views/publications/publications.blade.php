@extends('layouts.app')

@section('content')

@auth
     @foreach (Auth::user()->roles as $role)
        @if($role->name=='admin')
            <a href="{{ route('publications.showAuthorize') }}" class="btn btn-primary m-3">Authorize or deny publications</a>
            <a href="{{ route('user.manageUser') }}" class="btn btn-user m-3">Manage users</a>
        @endif
    @endforeach 
@endauth

<div class="container-fluid pb-5" >
    <div class="row ">
        <img width="100%" height="20%" src="{{ asset('img/Melo.jpg') }}" alt="imagen-index">
    </div>              
</div>

<div class="container pt-5 pb-5">
    <div class="row d-flex justify-content-center text-center" style="color: #68C6D2">
        <p><strong>
            Safe Pets es un sitio completamente gratuito que busca brindar una segunda oportunidad a animales que han sido <br>
            víctimas de maltrato y no cuentan con un hogar que les de amor y cuidado. Bindamos información <br>
            acerca de casas cuna en el área de San Ramón de Alajuela para facilitar el contacto con estas.</strong>
        </p>
    </div>
    <h1 class="row d-flex justify-content-center text-center" style="color: #68C6D2"><strong> Casas Cuna</strong></h1>
</div>
        <div class="container row  flex justify-content-end mx-0 px-0">
        @forelse($publications as $publication)
             
            @if($publication->state==1)   
                <div class="view-overlay">
                    <div class="card  my-3 ml-5 d-flex" style="width:300px">
                        <img class="card-img-top" src="{{ url('storage/imgPublications/'. $publication->img) }}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">{{ $publication->name }}</h4>
                            <p class="card-text">{{ $publication->phone}}</p>
                            <a href="{{ route('publications.show', $publication) }}" style="color:white" class="btn btn-primary">@lang('content.View publication')</a>
                        </div>
                    </div>
                </div>
            @endif       
        @empty
        @endforelse
    </div>
    <div class="col d-flex justify-content-center my-3">
        {!!$publications->appends(
            Request::only(['search',])
            )->render()!!}
    </div>
  </div>
@endsection