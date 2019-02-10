   @extends('layouts.app')

@section('header')


   <!-- Header -->
    <header class="header header-inverse" style="background-color: #c2b2cd;">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>{{ $series->title }}</h1>
            <p class="fs-20"><i class="fa fa-map-marker mr-8"></i> San Francisco</p>

            <hr class="w-50 ">

            <a class="btn btn-xl btn-round btn-white w-200" href="#" data-scrollto="section-apply">Apply Now</a>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->

@stop


@section('content')


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Description
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray">
        <div class="container">

          <div class="row">
            <div class="col-12 col-md-8 offset-md-2">

              <p class="lead">Use your extensive knowledge of JavaScript, HTML, and CSS to improve our web client, a complex in-browser application relied upon by millions of users every day. You will work with real-time data streams, engineer for performance across browsers, and delight people by making the best software we can imagine. You will collaborate closely with Product, Design, Application Engineering, and QA to spec, build, test and deploy new features. This position reports directly to the Director of Frontend Engineering.</p>

              <br><br>
              <h5>A Typical Week</h5>
              <ul>
                <li>You'll brainstorm with Product Managers and Designers to conceptualize new features</li>
                <li>You'll collaborate with Application Engineering to build new features for our large-and-growing user base</li>
                <li>You'll learn about new web technologies and discuss potential solutions to problems</li>
                <li>You'll help our skilled support team triage bugs and troubleshoot production issues</li>
                <li>You'll mentor other engineers and deeply review code</li>
              </ul>


              <br>
              <h5>Requirements</h5>
              <ul>
                <li>Bachelor's degree in Computer Science, Engineering or related field, or equivalent training, fellowship, or work experience.</li>
                <li>3+ years of experience writing client-side JavaScript</li>
                <li>Expertise in building complex layouts with CSS and HTML</li>
                <li>Experience building and debugging complex systems in a team environment</li>
                <li>Experience with modern browser technologies</li>
                <li>Strong UX and design sensibilities, and a desire to sweat the small stuff</li>
                <li>Strong communication skills, a positive attitude, and empathy</li>
                <li>Self-­awareness and a desire to continually improve</li>
              </ul>


              <br>
              <h5>Bonus Points</h5>
              <ul>
                <li>Experience with jQuery, Handlebars, or LESS</li>
                <li>Experience investigating and improving JavaScript performance</li>
                <li>Experience with WebSockets, Local Storage, or ES6</li>
                <li>Experience in small start­up environments</li>
                <li>Experience designing web sites or applications</li>
              </ul>

            </div>
          </div>


        </div>
      </section>






      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Apply form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section" id="section-apply">
        <div class="container">
          <header class="section-header">
            <small>Submit your resume</small>
            <h2>Apply For This Job</h2>
            <hr>
            <p class="lead">Prepare a PDF for your resume and fill the following form. We will contact you as soon as possible.</p>
          </header>


          <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
              
              <form action="#" method="POST">

                <div class="row">
                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="text" placeholder="First Name">
                  </div>

                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="text" placeholder="Last Name">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="text" placeholder="Email">
                  </div>

                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="text" placeholder="Phone">
                  </div>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Location">
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Linkedin Profile">
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Website">
                </div>

                <div class="form-group input-group file-group">
                  <input type="text" class="form-control file-value" placeholder="Choose file..." readonly>
                  <input type="file" multiple>
                  <span class="input-group-btn">
                    <button class="btn btn-white file-browser" type="button"><i class="fa fa-upload"></i></button>
                  </span>
                </div>

                <div class="form-group">
                  <textarea class="form-control" placeholder="Extra information" rows="3"></textarea>
                </div>

                <button class="btn btn-primary btn-block" type="submit">Submit your resume</button>
              </form>

            </div>
          </div>


        </div>
      </section>



@stop
   




