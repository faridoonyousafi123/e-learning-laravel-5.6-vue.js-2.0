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
          <table class="table table-striped custab">
            <thead class="">
              <tr>
                <th>Name</th>
                <th>Email Confirmed</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody class="text-left">

              <tr v-for="user in users" v-if="hasAdminRequest(user)" :key="users.indexOf(user)">
                <td>{{ user.name }}</td>
                <td v-if="user.confirm_token == null">Yes</td>

                <td v-else>No</td>

                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Approve</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Reject</a></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="header-gradient">
      <div class="row col-lg-12 col-md-12 col-md-offset-2 custyle">
       <table class="table table-striped custab">
        <thead class="">
          <tr>
            <th>Name</th>
            <th>Email Confirmed</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody class="text-left">

          <tr v-for="user in users" v-if="hasAdminRequest(user)" :key="users.indexOf(user)">
            <td>{{ user.name }}</td>
            <td v-if="user.confirm_token == null">Yes</td>

            <td v-else>No</td>

            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Approve</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Reject</a></td>
          </tr>

        </tbody>
      </table>
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
      console.log(res);
    })
    .catch(error => {
      console.error(error);
    })
  },

  isConfirm(user){

    return user.confirm_token == null;

  },
  hasAdminRequest(user)
  {
    return user.admin_request != null;

  }





}


}

</script>