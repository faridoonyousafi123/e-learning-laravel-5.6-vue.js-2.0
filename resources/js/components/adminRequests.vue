<template>
 <section class="section no-scroll">
  <div class="container">
   <div class="row gap-5">
    <div class="col-12 col-md-4">
     <ul class="nav nav-vertical">
      <li class="nav-item">
       <a @click="getUsers('pending', 0)" class="nav-link active" data-toggle="tab" href="#tab-1">
        <h6>Pending</h6>
      </a>
    </li>
    <li class="nav-item">
     <a @click="getUsers('approved', 1)" class="nav-link" data-toggle="tab" href="#tab-2">
      <h6>Approved</h6>
    </a>
  </li>
</ul>
</div>
<div class="col-12 col-md-8 no-scroll" data-aos-duration="500" data-aos-delay="200" data-aos-offset="100" data-aos="zoom-in">
 <div class="tab-content text-center">
  <div class="tab-pane fade show active" id="tab-1">
   <div class="container">
    <div v-if="this.loading" class="loading-spinner mt-100">
     <div class="dot dotOne"></div>
     <div class="dot dotTwo"></div>
     <div class="dot dotThree"></div>
   </div>
   <form class="row gap-y" v-on:submit.prevent>
     <div v-if="!loading" class="col-lg-12 col-md-10 col-sm-12 no-scroll" style="height:436px; overflow:auto;">
      <table class="table table-cart">
       <tbody valign="middle">
        <tr v-for="user in users" :key="users.indexOf(user)">
         <td>
          <a href="shop-single.html">
           <v-lazy-image 
           :src="'/' + user.avatar"
           />
         </a>
       </td>
       <td>
        <h5>{{ user.name }}</h5>
        <p>Senior Software at Netlinks</p>
      </td>
      <td>
        <label class="custom-control custom-checkbox c-pointer">
          <input class="checkbox custom-control-input c-pointer" type="checkbox" v-model="batchUsers" :value="user.id" :id="user.id">
          <span class="custom-control-indicator c-pointer"></span>
        </label>
      </td>
    </tr>
  </tbody>
</table>
</div>
</form>
</div>
<div v-if="!loading && users.length > 0" class="text-right mt-50">
  <button  class="btn btn-primary btn-sm btn-round w-180 mb-5"  @click="getCheckedUsers()"  :disabled="!isAnyUserChecked" data-toggle="modal" data-target="#approveUsersModal">
    {{ this.loading ? 'Approving ...' : 'Approve'}}
  </button>
  <button class="btn btn-danger btn-sm btn-round w-180 mb-5" @click="getCheckedUsers()" :disabled="!isAnyUserChecked" data-toggle="modal" data-target="#rejectUsersModal">
    Reject 
  </button>
</div>
</div>
<div class="tab-pane fade" id="tab-2">

  <div class="container">
    <div v-if="loading" class="loading-spinner mt-100">
     <div class="dot dotOne"></div>
     <div class="dot dotTwo"></div>
     <div class="dot dotThree"></div>
   </div>
   <form class="row gap-y" v-on:submit.prevent>
     <div v-if="!loading" class="col-lg-12 col-md-10 col-sm-12 no-scroll" style="height:436px; overflow:auto;">
      <table class="table table-cart">
       <tbody valign="middle">
        <tr v-for="user in users" :key="users.indexOf(user)">
         <td>
          <a href="shop-single.html">
           <v-lazy-image 
           :src="'/' + user.avatar"
           />
         </a>
       </td>
       <td>
        <h5>{{ user.name }}</h5>
        <p>Senior Software at Netlinks</p>
      </td>
      <td>
        <label class="custom-control custom-checkbox c-pointer">
          <input class="checkbox custom-control-input c-pointer" type="checkbox" v-model="batchUsers" :value="user.id" :id="user.id">
          <span class="custom-control-indicator c-pointer"></span>
        </label>
      </td>
    </tr>
  </tbody>
</table>
</div>
</form>
</div>
<div v-if="!loading && users.length > 0" class="text-right mt-50">
  <button class="btn btn-danger btn-sm btn-round w-180 mb-5"  @click="getCheckedUsers()"  :disabled="!isAnyUserChecked" data-toggle="modal" data-target="#revokeUsersModal">
    Revoke
  </button>

</div>
</div>




</div>
</table>
</div>
</form>
</div>
</div>
</div>
<div class="modal fade" id="approveUsersModal" tabindex="-1" role="dialog" aria-labelledby="approveUsersModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="approveUsersModalLabel">Confirmation</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="text-left">
     Are you sure to give Administration Permissions to the following Users
     <ul>
      <li class="list"  v-for="user in checkedUsers">{{user.name}} <span  @click="removeUserFromCheckedUsers(user)" class="fa fa-minus-circle ml-10" ></span> </li>
    </ul>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
  <button type="button" class="btn btn-primary" @click="processRequest(batchUsers, true, 'approve-request')" data-dismiss="modal">Yes</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="rejectUsersModal" tabindex="-1" role="dialog" aria-labelledby="rejectUsersModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="approveUsersModalLabel">Confirmation</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="text-left">
     Are you sure to rejects to the following Users requests
     <ul>
      <li  v-for="user in checkedUsers">{{user.name}} <span  @click="removeUserFromCheckedUsers(user)" class="fa fa-minus-circle ml-10" ></span> </li>
    </ul>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
  <button type="button" class="btn btn-primary" @click="processRequest(batchUsers, true, 'reject-request')" data-dismiss="modal">Yes</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="revokeUsersModal" tabindex="-1" role="dialog" aria-labelledby="revokeUsersModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="revokeUsersModalLabel">Confirmation</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="text-left">
     Are you sure to revoke Administration access from the following users:
     <ul>
      <li  v-for="user in checkedUsers">{{user.name}} <span  @click="removeUserFromCheckedUsers(user)" class="fa fa-minus-circle ml-10" ></span> </li>
    </ul>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
  <button type="button" class="btn btn-primary" @click="processRequest(batchUsers, true, 'revoke-request')" data-dismiss="modal">Yes</button>
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
    users: [],
    loading: false,
    currentTab: 'pending',
    batchUsers:[],
    checkedUsers:[]
  }
},


mounted() {

 this.getUsers('', 0);

},



methods: {

 /* Functions that get data from API's  */

         //Getting Users that are approved
         getUsers(tab, status){
          let url = '/users';

          if (tab == this.currentTab) {
            return;
          }

          // status 1 for approved users
          if (status == 1) {
            url = '/users-approved';
          }

          this.currentTab = tab;
          axios.get(url)
          .then(resp => {
           this.users = resp.data;

         }).catch(error => {

           console.error(error);
         })

       },

       getCheckedUsers(){

          let checkedUsersObjects = this.users.filter(user => this.batchUsers.includes(user.id));
          let checkedUsersNames = checkedUsersObjects.map(user => user);
          this.checkedUsers = checkedUsersNames;
      },


      /* Functions that set data to Database  */


      processRequest(user, currentTab, requestType){

        this.loading = true

        var formData = new FormData();

        if (user.id) {
          this.batchUsers.push(user.id);
        }

        formData.append("users", this.batchUsers);

        axios.post('/admin/' + requestType, formData, {


        }).then(res => {

          this.loading = false;

          this.removeTheUserFromTable();


          this.checkedUsers = [];
          this.batchUsers = [];

        }).catch(error => {
          this.loading = false;
        });

      },



      /* UI Utilities Functions  */




    removeTheUserFromTable(){
      this.batchUsers.forEach(userId => {
        let user = this.users.find(user => user.id == userId);
        const index = this.users.indexOf(user);
        if (index > -1) {
          this.users.splice(index, 1);
        }

      });


    },


    removeUserFromCheckedUsers(user){

     var index = this.checkedUsers.indexOf(user);


     this.checkedUsers.splice(index, 1);

     this.batchUsers.splice(index, 1);

     if(this.checkedUsers.length < 1){


       $('.fa-minus-circle').attr('data-dismiss','modal');

       this.batchUsers = [];
       this.checkedUsers = [];

     }





   }


 },





 computed: {
  isAnyUserChecked(){

   return this.batchUsers.length > 0;

 },
}

}

</script>
<style scoped>
.v-lazy-image {
 border-radius:50%;
 filter: blur(10px);
 transition: filter 0.5s;
}
.v-lazy-image-loaded {
 filter: blur(0);
}
</style>