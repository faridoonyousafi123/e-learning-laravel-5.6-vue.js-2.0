@extends('layouts.app')

@section('header')
 
    <!-- Header -->
     <header class="header header-inverse bg-fixed" style="background-image: url({{ asset('assets/img/bg-laptop.jpg ') }})" data-overlay="8">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Administrators Requests</h1>
            <p class="fs-20 opacity-70">Seems you're done! Let us know where should we send your order.</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->
@stop


@section('content')

 <!-- Main container -->
    <main class="main-content">




     

  <vue-adminrequests></vue-adminrequests>



      
  







    </main>
    <!-- END Main container -->


@stop
