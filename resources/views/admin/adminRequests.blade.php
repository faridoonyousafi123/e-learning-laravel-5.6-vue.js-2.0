@extends('layouts.app')

@section('header')
 
    <!-- Header -->
      <header class="header header-inverse h-fullscreen pb-80" style="background-image: url(/assets/img/server2.jpg);" data-overlay="8">
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="display-4 hidden-sm-down">System Administration</h1>
            <h1 class="hidden-md-up">System Administration</h1>
            <br>
            
            <br><br><br>

            
            <a class="btn btn-lg btn-round w-200 btn-outline btn-white hidden-sm-down" href="#" data-scrollto="section-apply">Enter</a>

          </div>

          <div class="col-12 align-self-end text-center">
            <a class="scroll-down-1 scroll-down-inverse" href="#" data-scrollto="section-intro"><span></span></a>
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
