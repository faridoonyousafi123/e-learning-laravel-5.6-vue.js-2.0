<template>



     <section class="section">
        <div class="container">

          <form class="row gap-y">
            <div class="col-lg-12 col-lg-8 col-md-8">

              <table class="table table-cart">
                <tbody valign="middle">
                 




                  <tr v-for="user in users" v-if="hasAdminRequest(user)" :key="users.indexOf(user)">
                    <td>
                      <a href="shop-single.html">
                        <img style="border-radius:50%;" v-bind:src="'/' + user.avatar" alt="...">
                      </a>
                    </td>

                    <td>
                      <h5>{{ user.name }}</h5>
                      <p>Senior Software at Netlinks</p>
                    </td>
                      
                    <td v-if="isConfirm(user)">
                      <h5>Email Confirmation</h5>
                      <p>Confirmed</p>
                    </td>

                    <td v-else>
                      <p>Not Confirmed</p>

                    </td>
  
                    <td>
                      <h4 class="price"></h4>
                    </td>
                  </tr>


                 

                </tbody>
              </table>


            

             
            

            </div>


          
          </form>



        </div>
      </section>




</template>

<script>
import axios from 'axios'
export default {
 data() {

   return{
     csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
     users: [],
     loading: false


   }
 },


 mounted() {
  this.getUsers();

},



methods: {

  getUsers(){
    axios.get('/users')
    .then(res => {
      this.users = res.data;
      
      if(this.users == null )
      {
        console.log("its null");
      }else{

        console.log("its not null");
      }


    })
    .catch(error => {
      console.error(error);
    })
  },

  approveRequest(user){

   this.loading = true

   console.log(user.id);

   var formData = new FormData();

   formData.append("user_id", user.id);

   axios.post('/admin/approve-request', formData, {


   }).then(res => {

    this.loading = false;

    console.log('approved');

    location.reload();




  }).catch(error => {

   console.log('errororrr');


 })

},

isConfirm(user){

  return user.confirm_token == null;

},

hasAdminRequest(user)
{
  return user.admin_request != null && user.email != "faridoon.y@gmail.com";

},

},

computed: {

 isApprovalSending(){

   return !this.loading
 }


}
}

</script>