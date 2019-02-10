<template>

  <section class="section">
        <div class="container">
          

          <div class="row gap-y text-center">
            
            <div v-for="series in allSeries" :key="allSeries.indexOf(series)" class="col-12 col-md-4">
              <div class="pricing-1">
                <p class="plan-name">Single</p>
                <br>
                     <v-lazy-image 
                     :src="'storage/' + series.image_url"
           />
                <br>

                <small>30 days free trial</small><br>
                <small>Basic support</small><br>
                <small>1 GB attachment</small><br>
                <br>
                <p class="text-center py-3"><a class="btn btn-primary" href="#">Get started</a></p>
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