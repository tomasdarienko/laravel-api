<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>


     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Usando Vite -->
     @vite(['resources/js/app.js'])
</head>

<body>
     <div id="app">

          </header>
          <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
               <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                         <div class="logo_laravel">
                              <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                                   style="width: 150px">
                                   <g clip-path="url(#clip0)" fill="#EF3B2D">

                                   </g>
                              </svg>
                         </div>
                         {{-- config('app.name', 'Laravel') --}}
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                         <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <!-- Left Side Of Navbar -->
                         <ul class="navbar-nav me-auto">
                              <li class="nav-item">
                                   <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                              </li>
                         </ul>

                         <!-- Right Side Of Navbar -->
                         <ul class="navbar-nav ml-auto">
                              <!-- Authentication Links -->
                              @guest
                              <li class="nav-item">
                                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                              @if (Route::has('register'))
                              <li class="nav-item">
                                   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                              @endif
                              @else
                              <li class="nav-item dropdown">
                                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                   </a>

                                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"
                                             href="{{route('admin.dashboard') }}">{{__('Dashboard')}}</a>
                                        <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                             class="d-none">
                                             @csrf
                                        </form>
                                   </div>
                              </li>
                              @endguest
                         </ul>
                    </div>
               </div>
          </nav>
          </header>
          <main class="">

               <div class="asideMenu vh-100 d-flex">
                    <nav class="sidebar col-2 vh-100 bg-secondary ">
                         <ul class="nav flex-column ">
                              <li class="nav-item">
                                   <a class="nav-link text-white" href="{{ route ('admin.dashboard') }}">
                                        Dashboard
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link text-white" href="{{ route ('admin.posts.index') }}">
                                        Posts
                                   </a>
                              </li>
                         </ul>
                    </nav>
                    <div class="col-10 content">
                         @yield('content')
                    </div>
               </div>
          </main>
     </div>
</body>

</html>