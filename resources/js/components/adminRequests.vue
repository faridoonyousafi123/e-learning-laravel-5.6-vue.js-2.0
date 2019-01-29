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
  <li class="nav-item">
   <a @click="getTobeApprovedUsers('toBeApproved')" class="nav-link" data-toggle="tab" href="#tab-3">
    <h6>To be Approved</h6>
  </a>
</li>
</ul>
</div>
<div class="col-12 col-md-8  no-scroll">
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
        <td class="text-center">
          <h5>Action</h5>
          <p>
           <button  class="btn btn-primary btn-sm btn-round w-180 mb-5" @click="approveRequest(user, true)" :disabled="approvalSending">
             {{ user.loading ? 'Approving ...' : 'Approve'}}
           </button>
           <br>
           <button class="btn btn-danger btn-sm btn-round w-180 mb-5" @click="rejectRequest(user)" :disabled="approvalSending">
             {{ user.rejecting ? 'Rejecting...' : 'Reject'}}
           </button>
           <br>
           <button @click="approveRequestLater(user)" :disabled="approvalSending" class="btn btn-warning btn-sm btn-round w-180">
             {{ user.approving ? 'Approving Later...' : 'Approve Later'}}
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
<div class="tab-pane fade" id="tab-3">
 <div class="container">
  <form class="row gap-y" v-on:submit.prevent>
   <div class="col-lg-12 col-lg-8 col-md-6  no-scroll">
    <table class="table table-cart">
     <tbody valign="middle">
      <tr v-for="user in toBeApprovedUsers" :key="toBeApprovedUsers.indexOf(user)">
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
         <button  class="btn btn-primary btn-sm btn-round w-180 mb-5" @click="approveRequest(user, false)" :disabled="approvalSending">
           {{ user.loading ? 'Approving ...' : 'Approve'}}
         </button>
         <br>
         <button class="btn btn-danger btn-sm btn-round w-180 mb-5" @click="rejectRequest(user)" :disabled="approvalSending">
           {{ user.rejecting ? 'Rejecting...' : 'Reject'}}
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
<div class="tab-pane fade" id="tab-4">
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
    toBeApprovedUsers:[],
    loading: false,
    currentTab: 'pending'
  }
},


mounted() {
 this.getPendingRequests();


},



methods: {


 //Getting Users that are approved
getApprovedUsers(tab){
    if (tab == this.currentTab) {
      return;
    }

    this.currentTab = tab;
    axios.get('/users-approved')
    .then(resp => {
     this.approvedUsers = resp.data;


   })
    .catch(error => {
     console.error(error);
   })


},


//Getting Users that needs to be approved later
getTobeApprovedUsers(tab){

    if (tab == this.currentTab) {
      return;
    }

    this.currentTab = tab;
    axios.get('/users-to-be-approved')
    .then(resp => {
     this.toBeApprovedUsers = resp.data;


   })
    .catch(error => {
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



// Approve Users as Administrator
approveRequest(user, pending){

  this.loading = true
  user.loading = true;

  console.log(user.id);

  var formData = new FormData();

  formData.append("user_id", user.id);

  axios.post('/admin/approve-request', formData, {


  }).then(res => {

   this.loading = false;

   if (pending) {
    const index = this.users.indexOf(user);

     if (index > -1) {
       this.users.splice(index, 1);
     }
     return;
   }

   const index = this.toBeApprovedUsers.indexOf(user);

   if (index > -1) {
     this.toBeApprovedUsers.splice(index, 1);
   }

 }).catch(error => {

  console.log('errororrr');
  user.loading = false;

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




// Approve the Requests later
approveRequestLater(user){

 this.loading = true
 user.approving = true;

 console.log(user.id);

 var formData = new FormData();

 formData.append("user_id", user.id);

 axios.post('/admin/later-request', formData, {


 }).then(res => {

   this.loading = false;

   const index = this.users.indexOf(user);

   if (index > -1) {
     this.users.splice(index, 1);
   }

 }).catch(error => {

  console.log('errororrr');
  user.approving = false;

 });


},



},



computed: {

  approvalSending(){

    return this.loading
  }


}

}

</script>