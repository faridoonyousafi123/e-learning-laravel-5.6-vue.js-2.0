<template>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Authentication</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                  <div class="card mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Login</h5>
      <br><br>

      <form>


            <div class="alert alert-danger" v-if="errors.length > 0">
                <span v-for="error in errors" :key="errors.indexOf(error)"> {{ error }}</span>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" v-model="email">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" v-model="password">
            </div>

            <div class="form-group flexbox py-10">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" v-model="remember">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Remember me</span>
              </label>

              <a class="text-muted hover-primary fs-13" href="#">Forgot password?</a>
            </div>

            <div class="form-group">
              <button class="btn btn-bold btn-block btn-primary" @click="attemptLogin()" :disabled="!isValidLoginForm" type="button">Login</button>
            </div>
          </form>

      <div class="divider">Or Sign In With</div>
      <div class="text-center">
        <a class="btn btn-circular btn-sm btn-facebook mr-4" href="#"><i class="fa fa-facebook"></i></a>
        <a class="btn btn-circular btn-sm btn-google mr-4" href="#"><i class="fa fa-google"></i></a>
        <a class="btn btn-circular btn-sm btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
      </div>

      <hr class="w-30">

      <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a href="page-register.html">Sign up</a></p>
    </div>
                </div>
                
              </div>
            </div>
          </div>

</template>

<script>
    import axios from 'axios'
    export default {
        data() {

            return{

            email: '',
            password: '',
            remember: true,
            loading : false,
            errors: []

            }
            

        },

        methods: {

            isValidEmail() {

                 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
                  {
                    return (true)
                  }
                    return (false)
                },

            attemptLogin(){

                this.errors= []
                this.loading = true
                axios.post('/login', {

                    email: this.email, password: this.password, remember: this.remember

                }).then(res => {

                   location.reload()

                }).catch(error => {

                    this.loading = false

                    if(error.response.status == 422){

                        this.errors.push("Sorry ! We could not verify your account.");
                    }else{

                        this.errors.push("Something went wrong, Please refresh and try again");
                    }

                })




            }


        },

        computed: {

            isValidLoginForm(){

                return this.isValidEmail() && this.password && !this.loading
            }


        }
    }

</script>
