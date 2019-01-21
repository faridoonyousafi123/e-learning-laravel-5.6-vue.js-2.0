<template>

  <section class="section" id="section-apply">
    <div class="container">
      <header class="section-header">
        <h2>Create Your Series</h2>
        <hr>
        <p class="lead">Prepare a PDF for your resume and fill the following form. We will contact you as soon as possible.</p>
      </header>


      <div class="row">
        <div class="col-12 col-md-8 offset-md-2">

          <form>
            <div class="alert alert-danger text-left" v-if="errors.length > 0">
              <li v-for="error in errors" :key="errors.indexOf(error)"> {{ error }}</li>
            </div>
            <div class="alert alert-success text-left" id="mydiv" v-if="successes.length > 0">
              <li v-for="success in successes" :key="successes.indexOf(success)"> {{ success }}</li>
            </div>
            <div class="row">
              <div class="form-group col-12 col-md-6">
                <input class="form-control" type="text" name="series_title" placeholder="Title" v-model="series_title">
                <div class="avatar-upload">
                  <div class="avatar-edit">

                    <input type='file' id="imageUpload"  name="series_image_url"  accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                  </div>
                  <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('/assets/img/upload_image.gif');">
                    </div>
                  </div>
                </div>

              </div>


            </div>







            <div class="form-group">
              <textarea class="form-control" name="description" v-model="series_description" placeholder="Description" rows="3"></textarea>
            </div>

            <button class="btn btn-primary btn-block" @click="createSeries()" :disabled="!isValidSeriesForm" type="button">Create Series</button>
          </form>

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




   createSeries(){


    this.errors = []
    this.loading = true
    axios.post('/admin/series/store', {

      series_title: this.series_title, series_image_url: this.series_image_url, series_description: this.series_description

    }).then(res => {



      this.successes.push("Series Created Successfully");

      this.reloadForm();

    }).catch(error => {

      this.loading = false
      if(error.response.status == 422 && error.response.status == 500){
        var errorObject = error.response.data.errors;

        for (var key in errorObject) {
          this.errors.push(errorObject[key][0]);
        }
      }else{

       this.errors.push("Something went wrong, Please refresh and try again");
     }


   })
  },

  reloadForm(){
     setTimeout(function() {
        $('#mydiv').fadeOut('slow');
         $('form').find("input[type=text], textarea").val("");
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