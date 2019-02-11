@extends('layouts.app')



@section('header')

 <!-- Header -->
    <header class="header header-inverse" style="background: url({{ asset('assets/img/series.jpg')  }});" data-overlay="5">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>Series</h1>
            <p class="fs-20 opacity-70">Explore our Series and Enjoy.</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->
@stop


@section('content')


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Basic cards
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
     
            
            <vue-series></vue-series>





         




@stop