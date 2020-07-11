@extends('layouts.app')


@section('content')

<div class="container-fluid pb-5" >
    <div class="row ">
        <img width="100%" height="20%" src="{{ asset('img/perro.jpg') }}" alt="imagen-index">
    </div>              
</div>

<div class="row d-flex justify-content-center text-center" style="color: #68C6D2">
    <h1 class=" justify-content-center text-center" style="color: #68C6D2"><strong>San Ramón</strong></h1>
</div>

<div class="row d-flex justify-content-center text-center" style="color: #68C6D2">
    <h3 class="mb-5 pt-5 pb-5 text-center"><strong>Casas cuna disponibles</strong></h3>
</div>



<div class="row">
    <div class="form-group col-10 ml-5  mb-4">
      <label class="ml-2" style="color: #68C6D2" ><strong> @lang('Distritos')</strong></label>
        <select class="form-control" id="category" name="category" type='select'>
           <option value="San Ramón">@lang('San Ramón')</option>
           <option value="Ángeles" >@lang('Ángeles')</option>
           <option value="Santiago">@lang('Santiago')</option>
           <option value="San Juan">@lang('San Juan')</option>
           <option value="Piedades Norte">@lang('Piedades Norte')</option>
           <option value="Piedades Sur">@lang('Piedades Sur')</option>
           <option value="San Rafael">@lang('San Rafael')</option>
           <option value="San Isidro">@lang('San Isidro')</option>
           <option value="Alfaro">@lang('Alfaro')</option>
           <option value="Volio">@lang('Volio')</option>
           <option value="Concepción">@lang('Concepción')</option>
           <option value="Zapotal">@lang('Zapotal')</option>
           <option value="Peñas Blancas">@lang('Peñas Blancas')</option>
       </select>
   </div>
</div>

@endsection