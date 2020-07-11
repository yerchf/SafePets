@extends('layouts.app')

@section('title', $publication->name)

@section('content')

<article>
  <div class=" container d-flex justify-content-center align-content-center mx-auto">
  <!-- Section: Blog v.1 -->
    <section class="my-5">
    <!-- Grid row -->
      <div class="row  ">
      <!-- Grid column -->
        <div class="col-lg-5">
        <!-- Featured image -->
          <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
            <img class="img-fluid" src="{{ url('storage/imgPublications/' . $publication->img) }}" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
      </div>
      <!-- Grid column -->
      <!-- Grid column -->
      <div class="col-lg-7 py-0 my-0">
        <!-- Category -->
        <form class="form-inline my-1 " method="GET" action="{{ route('publications.index') }}">
          <button name="search" value="{{ $publication->category }}" class="btn btn-primary my-2 my-sm-0 border-0" type="submit">{{ $publication->category }}</button>
        </form>
        <!-- Post title -->
          <h2 class="font-weight-bold mb-3"><strong>{{ $publication->name }}</strong></h2>
        <!-- Excerpt -->
          <div class=" py-0 my-0 mx-auto">
            <p>{{ $publication->text }}</p>
        <!-- Post data -->
          </div>
          <div class=" py-0 my-0 mx-auto">
            <p>{{ $publication->phone }}</p>
          </div>
          <div class=" py-0 my-0 mx-auto">
            <p>{{ $publication->email }}</p>
          </div>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
    </section>
  <!-- Section: Blog v.1 -->      
  </div>
</article>
@endsection