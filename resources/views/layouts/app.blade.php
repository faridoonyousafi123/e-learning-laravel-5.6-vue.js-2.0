<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Learning</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/thesaas.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/preflight.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/utilities.min.css" rel="stylesheet">


    <!-- Font-awesome -->
<!--     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/logo2.png') }}">
    <link rel="icon" href="{{ asset('assets/img/logo2.png') }}">

    @yield('scripts')
  </head>

<body>
    <div id="app">
        

         <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">

      <div class="container">
        
        <div class="topbar-left">
        
          <a class="topbar-brand" href="index.html">
            <img class="logo-default logo-size" src="{{ asset('assets/img/logo-black.png') }}" alt="logo">
            <img class="logo-inverse logo-size" src="{{ asset('assets/img/logo3.png') }}" alt="logo">
          </a>

        </div>



        <div class="topbar-right">
  <button class="topbar-toggler">&#9776;</button>
          <ul class="topbar-nav nav">
           
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ route('series.all') }}">All Series</a></li>
            @if(auth()->check())
                    
                   <li class="nav-item">Hey {{auth()->user()->name}}</li> 
                   
                   @if(auth()->user()->isAdministrator())

                    <li class="nav-item"><a class="nav-link" href="{{ route('requests.show') }}">Administration</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('series.create') }}">Create  Series</a></li>

                   @endif

<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>


            @else

            <li class="nav-item"><a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#loginModal">Login <span class="text-lowercase">or</span> Register</a></li>
           @endif


          </ul>

        </div>

      </div>

    </nav>
    <!-- END Topbar -->

    <!-- Header -->
        @yield('header')
    <!-- END Header -->

      <!-- Main container -->
    <main class="main-content">

        @yield('content')

    </main>
    <!-- END Main container -->

        
   

    @if(!auth()->check())
     <vue-login></vue-login>
    @endif
 
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src="{{ asset('assets/js/thesaas.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/imageUpload.js') }}"></script>
    <script src="{{ asset('js/rating.js') }}"></script>
    <script>
      
      var input = document.querySelector('.search__input');
var inputWidth = input.offsetWidth;
var suggestion = document.querySelector('.suggestion');
var mobileSearch = document.querySelector('.search__icon');
var menu = document.querySelector('.menu');
var logo = document.querySelector('.logo');
var logoIcon = logo.querySelector('.logo__icon');

   
function equalWidth() {
  var input = document.querySelector('.search__input');
  var inputWidth = input.offsetWidth;
  suggestion.style.width = inputWidth + "px" ;
}

function showSuggestion() {
  suggestion.classList.add('active');
}

function hideSuggestion() {
  suggestion.classList.remove('active');
}

document.addEventListener('DOMContentLoaded', function() {
  equalWidth();
  input.addEventListener('focus', showSuggestion);
})

document.addEventListener('click', function(e) {
  var target = e.target.className;
  e.stopPropagation();
  if (target != "search__input" && target != "suggestion__content-left-side" && target != "suggestion__content-right-side" && target != "suggestion__content" ) {
    hideSuggestion();
   
  }
});

var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
};

addEvent(window, 'resize', function(event) {
  suggestion.style.width = '';
  equalWidth();
});

function openMobileSearch() {
  logo.classList.toggle('hide-element');
  menu.classList.toggle('hide-element');
  input.classList.toggle('mobile-search');
  mobileSearch.classList.toggle('ion-ios-search');
  mobileSearch.classList.toggle('ion-close-round');
  mobileSearch.classList.toggle('close-icon');
}

mobileSearch.addEventListener('click', function() {
  openMobileSearch();
})

    </script>


</body>
</html>
