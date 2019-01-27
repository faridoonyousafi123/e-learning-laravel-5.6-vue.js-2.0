@extends('layouts.app')

@section('header')
 
    <!-- Header -->
     <header class="header header-inverse bg-fixed" style="background: #141E30; background: -webkit-linear-gradient(to right, #243B55, #141E30); background: linear-gradient(to right, #243B55, #141E30);">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Administration Requests</h1>
       

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->
@stop


@section('content')

 <!-- Main container -->
    <main class="main-content" >




     

  <vue-adminrequests></vue-adminrequests>



      
  







    </main>
    <!-- END Main container -->


@stop
