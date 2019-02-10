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
      <section class="section bg-gray">
        <div class="container">

          <div class="row gap-y">
            
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card card-hover-shadow">
                <a href="blog-single.html"><img class="card-img-top" src="assets/img/blog-1.jpg" alt="Card image cap"></a>
                <div class="card-block">
                  <h4 class="card-title">New features will add to dashboard soon</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>
                  <a class="fw-600 fs-12" href="blog-single.html">Read more <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>

          </div>


          <nav class="flexbox mt-30">
            <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
            <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
          </nav>


        </div>
      </section>




@stop