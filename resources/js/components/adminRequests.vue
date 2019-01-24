<template>



  <section class="section pb-0" id="section-apply">
    <div class="container">
      <header class="section-header">

        <h2>System Administrations</h2>
        <hr>
        <p class="lead">These are the requests by the users for the Administrator Role.</p>
      </header>

      <div class="text-center">
        <ul class="nav nav-outline nav-round">
          <li class="nav-item w-140">
            <a class="nav-link active" data-toggle="tab" href="#header-color">Pending</a>
          </li>

          <li class="nav-item w-140">
            <a class="nav-link" data-toggle="tab" href="#header-gradient">Approved</a>
          </li>

        </ul>
      </div>


      <br><br>


      <div class="tab-content text-center" data-aos="fade-in">
        <div class="tab-pane fade show active" id="header-color">
         <div class="row col-lg-12 col-md-12 col-md-offset-2 custyle">
          <table  class="table table-striped custab">
         <thead>
              <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Email Confirmed</th>
                <th class="text-center">Action</th>
              </tr>

            </thead>
            <tbody class="text-left">

              <tr v-for="user in users" v-if="hasAdminRequest(user)" :key="users.indexOf(user)">
                <td class="text-center">{{ user.name }}</td>
                <td class="text-center" v-if="isConfirm(user)">Yes</td>

                <td class="text-center" v-else>No</td>

                <td class="text-center">
                  <button class="btn btn-info btn-xs" type="button" @click="approveRequest(user)">Approve</button> 
                  <button class="btn btn-danger btn-xs">Reject</button>
                </td>
              </tr>



           

            </tbody>

           
            
          </table>

          
        </div>

      


      </div>
      <div class="tab-pane fade" id="header-gradient">
      <div class="row col-lg-12 col-md-12 col-md-offset-2 custyle">
   
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
     csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
     users: []


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

    console.log(user.id);

    var formData = new FormData();

    formData.append("user_id", user.id);

     axios.post('/admin/approve-request', formData, {
        

            }).then(res => {

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
    return user.admin_request != null;

  },



}


}

</script>