<template>

  <section class="section overflow-hidden" id="series_category">
  <div class="container">

    <header class="section-header">
            
            <h2>Categories</h2>
           
   
          </header>

    <div data-provide="shuffle">
      <div class="text-center gap-multiline-items-2" data-shuffle="filter">

        <div class="row gap-y">

          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-grid fs-50 text-muted"></i></p>
                <h4 @click="getSeries()" class="card-title">All Series</h4>
              </a>
            </div>
          </div>


          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="web-development" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-browser fs-50 text-muted"></i></p>
                <h4 class="card-title">Web Developement</h4>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="database" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-layers fs-50 text-muted"></i></p>
                <h4 class="card-title">Databases</h4>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="web_development" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-briefcase fs-50 text-muted"></i></p>
                <h4 class="card-title">Business</h4>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="web_development" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-clipboard fs-50 text-muted"></i></p>
                <h4 class="card-title">Office Productivity</h4>
              </a>
            </div>
          </div>
          
          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="web_development" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-tools fs-50 text-muted"></i></p>
                <h4 class="card-title">Design</h4>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="web_development" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-camera fs-50 text-muted"></i></p>
                <h4 class="card-title">Photography</h4>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="web_development" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="icon-heart fs-50 text-muted"></i></p>
                <h4 class="card-title">Health & Fitness</h4>
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-3" data-shuffle="button" data-group="web_development" data-scrollto="section-series">
            <div class="card card-bordered card-hover-shadow text-center">
              <a class="card-block" href="#">
                <p><i class="ti-music fs-50 text-muted"></i></p>
                <h4 class="card-title">Music</h4>
              </a>
            </div>
          </div>





        </div>
        

      </div>




    

      













    </div>
  </div>


</div>
</section>


</template>
<script>
import axios from 'axios'
export default {
 data() {

  return{
    allSeries: []
    
  }
},


mounted() {

 this.getSeries();

},



methods: {

  getSeries(){

    axios.get('/get-series')
    .then(resp => {
     this.allSeries = resp.data;

   }).catch(error => {

     console.error(error);
   });
 }
 
}
}
</script>

<style scoped>
.v-lazy-image {

 filter: blur(10px);
 transition: filter 0.5s;

 width:240px;
 height:153px;

}
.v-lazy-image-loaded {
 filter: blur(0);
}
</style>