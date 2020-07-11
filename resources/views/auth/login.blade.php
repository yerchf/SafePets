@extends('layouts.login')

@section('content')

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
                <div class="card-img-bottom">
                    <img style="width: 300px; heidht: 450px" src="{{ asset('img/Sora2.jpg') }}" alt="perro">
                </div>
            </div>
            <div class="col-md-3">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                        <h1 class="m-5 pl-4 justify-content-center text-center" style="color: #68C6D2">Login</h1>
                        <input id="email" style="width: 70%" type="email" name="email" placeholder="Email" class="form-control mb-4 ml-register @error('email') is-invalid @enderror" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" style="width: 70%" name="password" placeholder="Password" class="form-control mb-4 ml-register @error('password') is-invalid @enderror" required autocomplete="current-password">
                    <input class=" btn btn-login" type="submit"  name=""  value="Login" >
                </form> 
            </div>
        </div>
    </div>
</body>
@endsection
