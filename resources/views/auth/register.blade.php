@extends('layouts.login')

@section('content')

<body>
<div class="col d-flex justify-content-center">
 <form class="card" style="width: 25rem; height: 27rem;" action="{{ route('register') }}" method="post">
 @csrf
  <h1 class="m-5 justify-content-center text-center" style="color: #68C6D2">Register</h1>

  <input id="name" type="text" style="width: 70%" class="form-control mb-4 ml-register @error('name') is-invalid @enderror" placeholder="UserName" name="name" required autocomplete="name">
    @error('name')
     <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
     </span>
    @enderror

  <input id="email" type="email" style="width: 70%" name="email" placeholder="Email" class="form-control mb-4 ml-register @error('email') is-invalid @enderror" required autocomplete="email">
  @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
  @enderror

  <input id="password" type="password" style="width: 70%" name="password" placeholder="Password" class="form-control mb-4 ml-register @error('password') is-invalid @enderror" required autocomplete="current-password">
    @error('password')
     <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
     </span>
    @enderror
  <input id="password-confirm" type="password" style="width: 70%" class="form-control mb-4 ml-register" name="password_confirmation" placeholder="Password Confirm" required autocomplete="new-password">

  <input class="d-flex justify-content-center btn btn-success" type="submit"  name=""  value="Register" > 

</form> 
</div>
</body>
@endsection
