<template>
 <section class="section no-scroll">
  <div class="container">
   <div class="row gap-5">
    <div class="col-12 col-md-4">
     <ul class="nav nav-vertical">
      <li class="nav-item">
       <a @click="getPendingRequests('pending')" class="nav-link active" data-toggle="tab" href="#tab-1">
        <h6>Pending</h6>
      </a>
    </li>
    <li class="nav-item">
     <a @click="getApprovedUsers('approved')" class="nav-link" data-toggle="tab" href="#tab-2">
      <h6>Approved</h6>
    </a>
  </li>
 
</ul>
</div>
<div class="col-12 col-md-8  no-scroll" data-aos-duration="500" data-aos-delay="200" data-aos-offset="100" data-aos="zoom-in">
 <div class="tab-content text-center">
  <div class="tab-pane fade show active" id="tab-1">
   <div class="container">
    <form class="row gap-y" v-on:submit.prevent>
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
        <td>
          <label class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" v-model="bacthUsers" :value="user.id" :id="user.id">
            <span class="custom-control-indicator"></span>
          </label>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="text-right buttons" v-if="bacthUsers.length > 0" data-aos-duration="500" data-aos-delay="300" data-aos-offset="100" data-aos="fade-up">
   <button  class="btn btn-primary btn-sm btn-round w-180 mb-5" @click="approveRequest(bacthUsers, true)" :disabled="approvalSending">
     {{ this.loading ? 'Approving ...' : 'Approve'}}
   </button>
   <button class="btn btn-danger btn-sm btn-round w-180 mb-5" @click="rejectRequest(users)" :disabled="approvalSending">
     Reject 
   </button>
  </div>
</div>
</form>
</div>
</div>
<div class="tab-pane fade" id="tab-2">
 <div class="container">
  <form class="row gap-y" v-on:submit.prevent>
   <div class="col-lg-12 col-lg-8 col-md-6  no-scroll">
    <table class="table table-cart">
     <tbody valign="middle">
      <tr v-for="user in approvedUsers" :key="approvedUsers.indexOf(user)">
       <td>
        <a href="shop-single.html">
          <img style="border-radius:50%;" v-bind:src="'/' + user.avatar" alt="...">
        </a>
      </td>
      <td>
        <h5>{{ user.name }}</h5>
        <p>Senior Software at Netlinks</p>
      </td>
      <td class="text-center">
        <h5>Action</h5>
        <p>
         <button class="btn btn-danger btn-sm btn-round w-180 mb-5" @click="revokeRequestBack(user)" :disabled="approvalSending">
           {{ user.revoking ? 'Revoking Request ...' : 'Revoke'}}
         </button>
       </p>
     </td>
   </tr>
 </tbody>
</table>
</div>
</form>
</div>
</div>
</table>
</div>
</form>
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
     csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
     users: [],
     approvedUsers:[],
    
     loading: false,
     currentTab: 'pending',
     bacthUsers:[],
   }
 },


 mounted() {

  this.getPendingRequests();

},



methods: {

        /* Functions that get data from API's  */

    //Getting Users that are approved
    getApprovedUsers(tab){
       
       if (tab == this.currentTab) {
         return;
       }

       this.currentTab = tab;
       axios.get('/users-approved')
       .then(resp => {
        this.approvedUsers = resp.data;


       }).catch(error => {

        console.error(error);
    })

    },
   
   

   
   
   
   
   // get Users that needs to be approved now
   getPendingRequests(tab){
     if (tab == this.currentTab) {
       return;
     }


     this.currentTab = tab;
     axios.get('/users')
     .then(res => {
      this.users = res.data;


    })
     .catch(error => {
      console.error(error);
    })
     
   },
   

   /* Functions that set data to Database  */
   
   
   // Approve Users as Administrator
   approveRequest(user, currentTab){

     this.loading = true

     var formData = new FormData();

     if (user.id) {
       this.bacthUsers.push(user.id);
     }

     formData.append("users", this.bacthUsers);

     axios.post('/admin/approve-request', formData, {


     }).then(res => {

       this.loading = false;

       return this.getCurrentTab(currentTab);


    }).catch(error => {

     console.log(error);

   });

  },




   // Rejects the Users Requests
   rejectRequest(user){

    this.loading = true
    user.rejecting = true;

    console.log(user.id);

    var formData = new FormData();

    formData.append("user_id", user.id);

    axios.post('/admin/reject-request', formData, {


    }).then(res => {

      this.loading = false;

      const index = this.users.indexOf(user);

      if (index > -1) {
        this.users.splice(index, 1);
      }

    }).catch(error => {

     console.log('errororrr');
     user.rejecting = false;

   });


  },

   // Revoke Requests Back
   revokeRequestBack(user){

    this.loading = true
    user.revoking = true;

    console.log(user.id);

    var formData = new FormData();

    formData.append("user_id", user.id);

    axios.post('/admin/revoke-request', formData, {


    }).then(res => {

      this.loading = false;

      const index = this.approvedUsers.indexOf(user);

      if (index > -1) {
        this.approvedUsers.splice(index, 1);
      }

    }).catch(error => {

     console.log('errororrr');
     user.revoking = false;

   });


  },


   /* UI Utilities Functions  */

 // getting current tab to stop
  getCurrentTab(currentTab){
    if (currentTab) {

     this.bacthUsers.forEach(userId => {
       let user = this.users.find(user => user.id == userId);
       const index = this.users.indexOf(user);

      this.removeTheUserFromTable(user);

    });

     return;

   }
 },

 removeTheUserFromTable(user){
  const index = this.users.indexOf(user);
       
       if (index > -1) {
        this.users.splice(index, 1);

        if(this.users.length < 1){
          $('.buttons').css('display', 'none');
        }

      }
 }




},



computed: {

 approvalSending(){

   return this.loading
 },

}

}

</script>