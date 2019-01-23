<template>

  <section class="section overflow-hidden py-120" id="section-apply">
    <div class="container-wide">
      <div class="row">


        <div class="offset-1 col-10 col-lg-6 offset-lg-1 text-center text-lg-left">
          <h2>Create a new Series</h2>

          <p class="lead">Please fill in the blanks..</p>
          <br>
          <div class="alert alert-success text-left" id="mydiv" v-if="successes.length > 0">
            <li v-for="success in successes" :key="successes.indexOf(success)"> {{ success }}</li>
          </div>

          <div class="col-12 col-md-10">


            <form autocomplete="off">
              <div class="alert alert-danger text-left" v-if="errors.length > 0">
                <li v-for="error in errors" :key="errors.indexOf(error)"> {{ error }}</li>
              </div>

              <div class="row">
                <div class="form-group pl-0 col-sm-12 col-lg-12 col-md-12">
                  <input class="form-control" required type="text" name="series_title" placeholder="Title" v-model="series_title">

                  <div class="avatar-upload">
                    <div class="avatar-edit">

                      <input type='file' id="imageUpload"  @change="processFile($event)" name="series_image_url"/>
                      <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url('/assets/img/upload_img.gif');">
                      </div>
                    </div>
                  </div>

                </div>


              </div>





              <div class="form-group small-size-screen">
                <textarea class="form-control"  autocomplete="false" name="series_description" v-model="series_description" placeholder="Description" rows="3"></textarea>
              </div>

              <button class="btn btn-primary btn-block" @click="createSeries()" :disabled="!isValidSeriesForm" type="button">
               {{ loading ? 'Creating Series ...' : 'Create Series'}}
             </button>
           </form>

         </div>


       </div>


       <div class="col-lg-4 hidden-md-down align-self-center">
        <img class="shadow-3" src="/assets/img/series_img.jpg" alt="..." data-aos="slide-left" data-aos-duration="1500">
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
     csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
     series_title:'',
     series_image_url:'',
     series_description:'',
     loading : false,
     errors: [],
     successes:[]


   }

   
 },

 methods: {


  processFile(event) {
    this.series_image_url = event.target.files[0];

    console.log(this.series_image_url);
  },

  createSeries(){


    this.errors = []
    this.loading = true

    var formData = new FormData();

    formData.append("series_image_url", this.series_image_url);
    formData.append("series_title", this.series_title);
    formData.append("series_description", this.series_description);

    axios.post('/admin/series/store', formData, {
     headers: {
      'Content-Type': 'multipart/form-data'
    }


  }).then(res => {

    this.loading = false;

    this.successes.push("Series Created Successfully");

    this.series_description = '';
    this.series_title = '';
    this.reloadForm();


  }).catch(error => {

    this.loading = false
    if(error.response.status == 422){
      var errorObject = error.response.data.errors;

      for (var key in errorObject) {
        this.errors.push(errorObject[key][0]);
      }
    }else{

     this.errors.push("Sorry ! Can't create Series. Please make sure you uploaded a correct image file.");
   }


 })
},

reloadForm(){

 setTimeout(function() {

  $('#mydiv').fadeOut('slow');
  $('#imagePreview').css('background-image','url(/assets/img/upload_img.gif)');
}, 3000);

}


},



computed: {

 isValidSeriesForm(){

   return this.series_title && this.series_description && !this.loading
 },




}
}

</script>