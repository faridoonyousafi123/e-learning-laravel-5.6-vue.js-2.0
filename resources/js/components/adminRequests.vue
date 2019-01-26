<template>



     <section class="section">
        <div class="container">

          <form class="row gap-y">
            <div class="col-lg-12 col-lg-8 col-md-6">

              <table class="table table-cart">
                <tbody valign="middle">
                 




                  <tr v-for="user in users" :key="users.indexOf(user)">
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
  
                    <td class="text-center">
                     
                     <h5>Action</h5>
                     
                     <p>
                       <button class="btn btn-primary btn-sm btn-round w-180" @click="approveRequest(user, index)" :disabled="approvalSending">
                        Approve
                       </button>

                        <button class="btn btn-danger btn-sm btn-round w-180">Reject</button>
                     </p>


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


    })
    .catch(error => {
      console.error(error);
    })
  },

  approveRequest(user, index){

   this.loading = true

   console.log(user.id);

   var formData = new FormData();

   formData.append("user_id", user.id);

   axios.post('/admin/approve-request', formData, {


   }).then(res => {

    this.loading = false;

    console.log(index);




  }).catch(error => {

   console.log('errororrr');


 })

},

isConfirm(user){

  return user.confirm_token == null;

},


},

computed: {

 approvalSending(){

   return this.loading
 }


}
}

</script>