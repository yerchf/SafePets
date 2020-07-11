

@section('content')
<img class="imagen-publication" style="cursor: pointer" width="100" height="100" src="{{ url('/storage/imgPublications/' . $imagen_publication) }}" alt="">

<div class="container-fluid d-flex justify-content-center">
<form method="POST" action="{{ $action }}" enctype="multipart/form-data">
    
    @csrf
    {{ $method }}

    <div class="row">
        <div class="input-group mb-3 ml-5 col-10">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload image</span>
            </div>
            <div class="custom-file">
                <input class=" custom-file-input" onchange="changeImage(this)" id="imagen_publication" name="imagen_publication" type="file">>
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
    </div>
    <div>
     <div class="form-group col-10 ml-5 mb-4">
       <label >@lang('Category')</label>
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

<div>
    <div class="form-group col-10 ml-5 mb-5">
        <label for="Name">@lang('Name')</label><br>
        <input class="form-control" type="text" id="name" name="name" value="{{ $publication['name'] }}" placeholder="@lang('Name')">        
    </div> 

    <div class="form-group my-3 ml-5  col-10">

       <label for="Direction">@lang('Direction')</label><br>
      <textarea class="form-control" type="text" id="text" name="text" value="{{ $publication['text'] }}" placeholder="@lang('Text')" rows="4"></textarea>
                            
    </div> 
    <div class="form-group my-3 ml-5  col-10">

       <label for="Phone">@lang('Phone')</label><br>
      <textarea class="form-control" type="text" id="phone" name="phone" value="{{ $publication['phone'] }}" placeholder="@lang('phone')" rows="4"></textarea>
                            
    </div> 

    <div class="form-group my-3 ml-5  col-10">

       <label for="Email">@lang('Email')</label><br>
      <textarea class="form-control" type="text" id="email" name="email" value="{{ $publication['email'] }}" placeholder="@lang('email')" rows="4"></textarea>
    
      <input type="hidden" name="user" value="{{ $user }}">
    
        <button type="submit" class="ml-5 btn btn-primary">
            {{ $button_text }}        
        </button>
    </div> 
</div>
</form>

</div>
@section('scripts')    
    <script>        
        let imageDOM = document.querySelector('.image-publication');
        
        imageDOM.addEventListener('click', function(){
            document.querySelector('#imagen_publication').click();
        });

        function changeImage(input){            
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imageDOM.src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        };
    </script>
@endsection