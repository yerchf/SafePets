<nav class="nav--blue navbar navbar-expand-md shadow-sm">
    <div class="container ">
        <div class="col-3 py-0 my-0">
            <a class="navbar-brand py-0 my-0" href="{{ url('/') }}">
                <img src="{{ asset('img/logo-nav.png') }}" width="50%" class="" alt="logo">
            </a>
        </div>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest 
                <li class="nav-item navbar-dark mr-3 ">
                    <strong><a class="nav-link text-white" href="{{ url('/') }}">{{ __('Inicio') }}</a></strong>
                </li> 
                <li class="nav-item navbar-dark mr-3">
                    <strong><a class="nav-link text-white" href="{{ route('district.show') }}">{{ __('Distrito') }}</a></strong>
                </li> 
                <li class="nav-item navbar-dark mr-3">
                    <strong><a class="nav-link text-white" href="{{ route('aboutas.show') }}">{{ __('Nosotros') }}</a></strong>
                </li> 
                <li class="nav-item navbar-dark mr-3">
                    <strong><a class="nav-link text-white" href="{{ route('contact.show') }}">{{ __('Contacto') }}</a></strong>
                </li> 
                <li class="nav-item navbar-dark mr-3">
                    <strong><a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a></strong>
                </li>                         
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <strong><a  class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a></strong>
                        </li>
                    @endif
                    @else    
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                <a class="" href="{{ route('user.show', Auth::user()) }}">{{ Auth::user()->name }}  </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>  
                        </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>