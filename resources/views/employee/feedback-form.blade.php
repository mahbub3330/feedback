<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
{{--                {{ config('app.name', 'Laravel') }}--}}
                {{ Auth::User()->department->name }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
        <div class="container-fluid">
           @if(count($questions) && count($department_users))
           <div class="form-group row">
               <form action="{{ route('employee.store.feedback') }}" method="post">
                            @csrf
                         @php($i=1)
                   <input type="number" hidden name="feedback_by" value="{{ Auth::user()->id }}" >
                   @foreach($questions as $questionsKey => $question)
{{--                  {{ dd($keys) }}--}}
                        <div class="col-md-12">
                            <label for="name" name="question_id" class="col-md-12 col-form-label" value="{{ $questionsKey }}">{{ $i++ }}.{{ $question }}</label>
                        </div>
                                   @foreach($department_users as $key => $user)

                                  <div class="col-md-12">
                                      <div class="form-check" class="col-md-6">
                                          <input class="form-check-input" type="radio" name="feedback_to[{{ $questionsKey }}]" id="{{$questionsKey}}" value="{{ $key }}" >
                                          <label class="form-check-label" for="{{ $questionsKey }}">
                                             {{ $user  }}
                                          </label>
                                      </div>
                                  </div>
                                @endforeach
                       @endforeach
                   <button type="submit">save</button>
               </form>
          </div>
               @else
                   no review today
            @endif


        </div>
    </main>
</div>
</body>
</html>
