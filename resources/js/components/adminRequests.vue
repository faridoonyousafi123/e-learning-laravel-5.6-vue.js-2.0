<template>
   <section class="section no-scroll">
      <div class="container">
       
         <div class="row gap-5">
            <div class="col-12 col-md-4">
               <ul class="nav nav-vertical">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#tab-1">
                        <h6>Pending</h6>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a @click="getApprovedUsers" class="nav-link" data-toggle="tab" href="#tab-2">
                        <h6>Approved</h6>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#tab-3">
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
                                             <button  class="btn btn-primary btn-sm btn-round w-180 mb-5" @click="approveRequest(user)" :disabled="approvalSending">
                                             {{ user.loading ? 'Approving ...' : 'Approve'}}
                                             </button>
                                             <br>
                                             <button class="btn btn-danger btn-sm btn-round w-180 mb-5" @click="rejectRequest(user)" :disabled="approvalSending">
                                               {{ user.rejecting ? 'Rejecting...' : 'Reject'}}
                                             </button>
                                             <br>
                                             <button class="btn btn-warning btn-sm btn-round w-180">Approve Later</button>
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
                                             
                                             <button class="btn btn-danger btn-sm btn-round w-180 mb-5">
                                             Revoke
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
                     <img class="shadow-3" src="/assets/img/header-image.jpg" alt="...">
                  </div>
                  <div class="tab-pane fade" id="tab-4">
                     <img class="shadow-3" src="/assets/img/header-particle.jpg" alt="...">
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
        loading: false
   
   
      }
    },
   
   
    mounted() {
     this.getUsers();
   
   
   },
   
   
   
   methods: {

    getApprovedUsers(){

       axios.get('/users-approved')
       .then(resp => {
         this.approvedUsers = resp.data;
   
   
       })
       .catch(error => {
         console.error(error);
       })

      
    },
   
     getUsers(){
   
   
       
   
   
       axios.get('/users')
       .then(res => {
         this.users = res.data;
   
   
       })
       .catch(error => {
         console.error(error);
       })
     },
   
     approveRequest(user){
   
      this.loading = true
      user.loading = true;
   
      console.log(user.id);
   
      var formData = new FormData();
   
      formData.append("user_id", user.id);
   
      axios.post('/admin/approve-request', formData, {
   
   
      }).then(res => {
   
       this.loading = false;
   
       const index = this.users.indexOf(user);
   
       if (index > -1) {
         this.users.splice(index, 1);
       }
   
     }).catch(error => {
   
      console.log('errororrr');
      user.loading = false;
   
    })
   
   },

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