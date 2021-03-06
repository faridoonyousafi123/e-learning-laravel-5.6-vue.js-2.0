@extends('layouts.app')

@section('header')
<header class="header header-inverse py-200 h-fullscreen" data-parallax="{{ asset('assets/img/header-bg.png ') }}" data-overlay="3">
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="hidden-sm-down">An e-Learning Platform for <span class="text-warning" data-type="Talented, Creative, Passionate, Afghans, "></span></h1>
            <h1 class="hidden-md-up">An Learning Platform for  <br><span class="text-warning" data-type="Talented, Creative, Afghans, "></span></h1>
            <br>
            <p class="fs-20 hidden-sm-down">We bring learning to people instead of people to learning</p>

            <p class="fs-15 hidden-md-up">TheSaaS Is an elegant, modern and fully customizable template developed for software, SaaS product and Web Applications.</p>

            <br>
            <hr class="w-50 hidden-sm-down">
            <br>

            <p>
              <a class="btn btn-lg btn-round btn-logo-color mr-12" href="#" data-scrollto="series_category">Start Now</a>
<!--               <a class="btn btn-lg btn-round btn-outline btn-white hidden-sm-down" href="//www.youtube.com/watch?v=ah4pcPbRi2M" data-provide="lightbox"><i class="fa fa-play mr-8"></i> Play Video</a> -->
            </p>
            

          </div>
        </div>

      </div>
    </header>
@stop


@section('content')


 




            <vue-series></vue-series>
                

           <a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
   

@stop
