@extends('layouts.app')
@section('header')
<!-- Header -->
<header class="header header-inverse" style="background: url('https://file.mockplus.com/image/2018/04/c69b939c-4955-4471-aba9-0adc9a8fb28d.jpg');" data-overlay="6">
   <div class="container text-center">
      <div class="row">
         <div class="col-12 col-lg-8 offset-lg-2">
            <h1>
               <div class="icon-container">
                  <span class="fs-50"><\></span>
               </div>
               Web Development  
            </h1>
         </div>
      </div>
   </div>
</header>

    


<!-- END Header -->
@stop
@section('content')

<div class="header2">
   <div class="logo">
     <i class="ion-ionic logo__icon"></i>
  </div>
  <nav>
     <div class="search-bar">
       <form class="search">
         <input type="search" class="search__input" name="search" placeholder="Search" onload="equalWidth()" required>
         <button class="search__btn">Search</button>
         <i class="ion-ios-search search__icon"></i>
       </form>
       <div class="suggestion">
         <div class="suggestion__content">
           <div class="suggestion__content-left-side">
            <h5>Popular Categories</h5>
            <ul>
              <li>Marketing Material</li>
              <li>Just Sold</li>
              <li>Small Business Card</li>
              <li>Mailing</li>
              <li>Just List</li>
            <ul>  
           </div>
           <div class="suggestion__content-right-side">
            <h5>Popular Keywords</h5>
            <ul>
              <li>Business Card</li>
              <li>Brochures</li>
              <li>Just List Just Sold</li>
              <li>Flyers</li>
            </ul>   
           </div>
         </div>  
       </div>  
    </div>  
  </nav>
  <div class="menu">
    <i class="ion-drag menu__icon"></i>
  </div>  
</div>
<main class="main-content" >
  
   <section class="section bg-gray">
      <div class="container">

         <div class="row gap-y mt-100">
            <div class="col-12 col-lg-4 mb-10">
               <div class="max-w-sm rounded overflow-hidden shadow-lg hover-effect">
                <span class="bg-pale-info d-inline-block text-center p-1 w-140 course-sticker sticker-hot-new">Hot & New</span>
                  <img class="w-full fixed-height" src="https://smartybro.com/wp-content/uploads/2018/07/Coding-for-Visual-Learners-Learning-JavaScript-from-Scratch.jpg" alt="Sunset in the mountains">
                  <div class="px-6 py-4">
                     <div class="font-bold text-md mb-2">Learn HTML5 with CSS3</div>
                     <p class="text-grey-darker text-base text-sm fixed-p-height">
                       Build modern responsive websites & UIs with HTML5 & CSS3 including Flexbox and CSS Grid
                     </p>
                  </div>
                  {{--     
                  <div class="px-6 py-4">
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                  </div>
                  --}}
                  <div class="px-6 py-4">
                     <div class='rating-stars text-left'>
                        <ul id='stars'>
                           <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Fair' data-value='2'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Good' data-value='3'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='Excellent' data-value='4'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='WOW!!!' data-value='5'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class="star">
                              <span class="fs-12 light-grey"> <strong>4.6</strong></span>
                           </li>
                           <li class="star text-right ml-40">
                              <i class="icon-profile-male fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>426</strong> </span>
                           </li>
                           <li class="star text-right ml-30">
                              <i class="icon-video fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>42</strong> </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                   <div class="text-right">
                       <a class="btn btn-success text-right price-border" href="#">1200 Afs</a>
                  </div>
               </div>
            </div>

            <div class="col-12 col-lg-4 mb-10">
               <div class="max-w-sm rounded overflow-hidden shadow-lg hover-effect">
                  <span class="bg-pale-info d-inline-block text-center p-1 w-140 course-sticker sticker-highest-rated">Highest Rated</span>
                  <img class="w-full fixed-height" src="https://udemy-images.udemy.com/course/750x422/461160_8d87_6.jpg" alt="Sunset in the mountains">

                  <div class="px-6 py-4">
                     <div class="font-bold text-md mb-2">Learn HTML5 with CSS3</div>
                     <p class="text-grey-darker text-base text-sm fixed-p-height">
                      Build modern responsive websites & UIs with HTML5 & CSS3 including Flexbox and CSS Grid
                     </p>
                  </div>
                  {{--     
                  <div class="px-6 py-4">
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                  </div>
                  --}}
                  <div class="px-6 py-4">
                     <div class='rating-stars text-left'>
                        <ul id='stars'>
                           <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Fair' data-value='2'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Good' data-value='3'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='Excellent' data-value='4'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='WOW!!!' data-value='5'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class="star">
                              <span class="fs-12 light-grey"> <strong>4.6</strong></span>
                           </li>
                           <li class="star text-right ml-40">
                              <i class="icon-profile-male fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>426</strong> </span>
                           </li>
                           <li class="star text-right ml-30">
                              <i class="icon-video fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>42</strong> </span>
                           </li>
                        </ul>
                     </div>

                  </div>
                  <div class="text-right">
                       <a class="btn btn-success text-right price-border" href="#">1200 Afs</a>
                  </div>
                
               </div>
            </div>

            <div class="col-12 col-lg-4 mb-10">
               <div class="max-w-sm rounded overflow-hidden shadow-lg hover-effect">
                <span class="bg-pale-info d-inline-block text-center p-1 w-140 course-sticker sticker-best-seller">Best Seller</span>

                  <img class="w-full fixed-height" src="https://udemy-images.udemy.com/course/750x422/666914_6c60_3.jpg">
                  <div class="px-6 py-4">
                     <div class="font-bold text-md mb-2">Learn HTML5 with CSS3</div>

                     <p class="text-grey-darker text-base text-sm fixed-p-height">
                        Build modern responsive websites & UIs with HTML5 & CSS3 including Flexbox and CSS Grid
                     </p>
                  </div>
                  {{--     
                  <div class="px-6 py-4">
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                  </div>
                  --}}
                  <div class="px-6 py-4">
                     <div class='rating-stars text-left'>
                        <ul id='stars'>
                           <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Fair' data-value='2'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Good' data-value='3'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='Excellent' data-value='4'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='WOW!!!' data-value='5'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class="star">
                              <span class="fs-12 light-grey"> <strong>4.6</strong></span>
                           </li>
                           <li class="star text-right ml-40">
                              <i class="icon-profile-male fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>426</strong> </span>
                           </li>
                           <li class="star text-right ml-30">
                              <i class="icon-video fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>42</strong> </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                   <div class="text-right">
                       <a class="btn btn-success text-right price-border" href="#">1200 Afs</a>
                  </div>
               </div>
            </div>


<div class="col-12 col-lg-4 mb-10">
               <div class="max-w-sm rounded overflow-hidden shadow-lg hover-effect">
                <span class="bg-pale-info d-inline-block text-center p-1 w-140 course-sticker sticker-best-seller">Best Seller</span>

                  <img class="w-full fixed-height" src="https://udemy-images.udemy.com/course/750x422/666914_6c60_3.jpg">
                  <div class="px-6 py-4">
                     <div class="font-bold text-md mb-2">Learn HTML5 with CSS3</div>

                     <p class="text-grey-darker text-base text-sm fixed-p-height">
                        Build modern responsive websites & UIs with HTML5 & CSS3 including Flexbox and CSS Grid
                     </p>
                  </div>
                  {{--     
                  <div class="px-6 py-4">
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                  </div>
                  --}}
                  <div class="px-6 py-4">
                     <div class='rating-stars text-left'>
                        <ul id='stars'>
                           <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Fair' data-value='2'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Good' data-value='3'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='Excellent' data-value='4'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='WOW!!!' data-value='5'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class="star">
                              <span class="fs-12 light-grey"> <strong>4.6</strong></span>
                           </li>
                           <li class="star text-right ml-40">
                              <i class="icon-profile-male fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>426</strong> </span>
                           </li>
                           <li class="star text-right ml-30">
                              <i class="icon-video fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>42</strong> </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                   <div class="text-right">
                       <a class="btn btn-success text-right price-border" href="#">1200 Afs</a>
                  </div>
               </div>
            </div>


            <div class="col-12 col-lg-4 mb-10">
               <div class="max-w-sm rounded overflow-hidden shadow-lg hover-effect">
                <span class="bg-pale-info d-inline-block text-center p-1 w-140 course-sticker sticker-best-seller">Best Seller</span>

                  <img class="w-full fixed-height" src="https://udemy-images.udemy.com/course/750x422/666914_6c60_3.jpg">
                  <div class="px-6 py-4">
                     <div class="font-bold text-md mb-2">Learn HTML5 with CSS3</div>

                     <p class="text-grey-darker text-base text-sm fixed-p-height">
                        Build modern responsive websites & UIs with HTML5 & CSS3 including Flexbox and CSS Grid
                     </p>
                  </div>
                  {{--     
                  <div class="px-6 py-4">
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                  </div>
                  --}}
                  <div class="px-6 py-4">
                     <div class='rating-stars text-left'>
                        <ul id='stars'>
                           <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Fair' data-value='2'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Good' data-value='3'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='Excellent' data-value='4'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='WOW!!!' data-value='5'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class="star">
                              <span class="fs-12 light-grey"> <strong>4.6</strong></span>
                           </li>
                           <li class="star text-right ml-40">
                              <i class="icon-profile-male fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>426</strong> </span>
                           </li>
                           <li class="star text-right ml-30">
                              <i class="icon-video fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>42</strong> </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                   <div class="text-right">
                       <a class="btn btn-success text-right price-border" href="#">1200 Afs</a>
                  </div>
               </div>
            </div>


            <div class="col-12 col-lg-4 mb-10">
               <div class="max-w-sm rounded overflow-hidden shadow-lg hover-effect">
                <span class="bg-pale-info d-inline-block text-center p-1 w-140 course-sticker sticker-best-seller">Best Seller</span>

                  <img class="w-full fixed-height" src="https://udemy-images.udemy.com/course/750x422/666914_6c60_3.jpg">
                  <div class="px-6 py-4">
                     <div class="font-bold text-md mb-2">Learn HTML5 with CSS3</div>

                     <p class="text-grey-darker text-base text-sm fixed-p-height">
                        Build modern responsive websites & UIs with HTML5 & CSS3 including Flexbox and CSS Grid
                     </p>
                  </div>
                  {{--     
                  <div class="px-6 py-4">
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                  </div>
                  --}}
                  <div class="px-6 py-4">
                     <div class='rating-stars text-left'>
                        <ul id='stars'>
                           <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Fair' data-value='2'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Good' data-value='3'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='Excellent' data-value='4'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='WOW!!!' data-value='5'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class="star">
                              <span class="fs-12 light-grey"> <strong>4.6</strong></span>
                           </li>
                           <li class="star text-right ml-40">
                              <i class="icon-profile-male fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>426</strong> </span>
                           </li>
                           <li class="star text-right ml-30">
                              <i class="icon-video fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>42</strong> </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                   <div class="text-right">
                       <a class="btn btn-success text-right price-border" href="#">1200 Afs</a>
                  </div>
               </div>
            </div>


            <div class="col-12 col-lg-4 mb-10">
               <div class="max-w-sm rounded overflow-hidden shadow-lg hover-effect">
                <span class="bg-pale-info d-inline-block text-center p-1 w-140 course-sticker sticker-best-seller">Best Seller</span>

                  <img class="w-full fixed-height" src="https://udemy-images.udemy.com/course/750x422/666914_6c60_3.jpg">
                  <div class="px-6 py-4">
                     <div class="font-bold text-md mb-2">Learn HTML5 with CSS3</div>

                     <p class="text-grey-darker text-base text-sm fixed-p-height">
                        Build modern responsive websites & UIs with HTML5 & CSS3 including Flexbox and CSS Grid
                     </p>
                  </div>
                  {{--     
                  <div class="px-6 py-4">
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
                     <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
                  </div>
                  --}}
                  <div class="px-6 py-4">
                     <div class='rating-stars text-left'>
                        <ul id='stars'>
                           <li class='star selected' title='Poor' data-value='1'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Fair' data-value='2'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star selected' title='Good' data-value='3'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='Excellent' data-value='4'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class='star' title='WOW!!!' data-value='5'>
                              <i class='fa fa-star fa-fw'></i>
                           </li>
                           <li class="star">
                              <span class="fs-12 light-grey"> <strong>4.6</strong></span>
                           </li>
                           <li class="star text-right ml-40">
                              <i class="icon-profile-male fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>426</strong> </span>
                           </li>
                           <li class="star text-right ml-30">
                              <i class="icon-video fs-16 text-muted text-right"></i>
                              <span class="fs-12 light-grey"> <strong>42</strong> </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                   <div class="text-right">
                       <a class="btn btn-success text-right price-border" href="#">1200 Afs</a>
                  </div>
               </div>
            </div>

        

         
         </div>
      </div>
   </section>
</main>
<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
@stop