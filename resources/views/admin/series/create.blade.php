@extends('layouts.app')

@section('header')
<header class="header header-inverse py-200 h-fullscreen" data-parallax="{{ asset('assets/img/series_header1.jpg ') }}" data-overlay="5">
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="hidden-sm-down">Create Series that are <span class="text-warning" data-type="Amazing, Resourceful, Trending, Fun !!!, "></span></h1>
            <h1 class="hidden-md-up">An Learning Platform for  <br><span class="text-warning" data-type="Amazing, Resourceful, Trending, Fun !!!, "></span></h1>
            <br>
            <p class="fs-20 hidden-sm-down">Good things are done by a series of samll things brougth together.</p>
            <p class="fs-15 hidden-md-up">Good things are done by a series of samll things brougth together.</p>

            <br>
            <hr class="w-50 hidden-sm-down">
            <br>

            <p>
              <a class="btn btn-xl btn-round btn-white w-200" href="#" data-scrollto="section-apply">Create Series</a>
<!--               <a class="btn btn-lg btn-round btn-outline btn-white hidden-sm-down" href="//www.youtube.com/watch?v=ah4pcPbRi2M" data-provide="lightbox"><i class="fa fa-play mr-8"></i> Play Video</a> -->
            </p>
            

          </div>
        </div>

      </div>
    </header>
@stop


@section('content')

 <!-- Main container -->
    <main class="main-content">




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Description
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
     





      <vue-createseries></vue-createseries>
      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Apply form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      
<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>






    </main>
    <!-- END Main container -->


@stop
