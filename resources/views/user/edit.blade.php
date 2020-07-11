@extends('layouts.app')

@section('content')

<div class="container-fluid d-flex justify-content-center">
    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
        <!--se utiliza el metodo put para enviar datos
            mediante esta directiva-->

        @method('PUT')
        <div class="form-group">
            <label for="">@lang('Name:')</label>   
            <input class="form-control mt-5 ml-4"  type="text" name="name" id="name" value={{$user->name}}>
        </div>

        <div class="form-group">
            <label for="">@lang('Email:')</label>
            <input class="form-control ml-4"  type="email" name="email" id="email" value={{$user->email}}>
        </div>

        <div class="form-group">
            <label for="">@lang('Password:')</label>
            <input class="form-control" type="password" name="password" >
        </div>

        <button class="btn btn-primary mb-5" type="submit">@lang('content.update')</button>
    </form>
</div>
@endsection