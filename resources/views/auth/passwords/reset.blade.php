<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>New password page Bootstrap 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>

  <style type="text/css" media="screen">

  html,body { height: 100%; }

  body{
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-align: center;
    -ms-flex-pack: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    background-color: #f5f5f5;
    background-image: url('https://images.unsplash.com/photo-1477414348463-c0eb7f1359b6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');
    background-repeat: no-repeat;
    background-size: cover;
  }

  form{
    padding-top: 10px;
    font-size: 13px;
    margin-top: 30px;
  }

  .card-title{ font-weight:300; }

  .btn{
    font-size: 13px;
  }

  .login-form{ 
    width:320px;
    margin:20px;
  }

  .sign-up{
    text-align:center;
    padding:20px 0 0;
  }

  span{
    font-size:14px;
  }

  .submit-btn{
    margin-top:20px;
  }

</style>


</head>

<body>

  <div class="card login-form">
    <div class="card-body">
      <h3 class="card-title text-center">Change password</h3>

      <!--Password must contain one lowercase letter, one number, and be at least 7 characters long.-->

      <div class="card-text">
        <form method="POST" action="{{ route('password.update') }}">

         @csrf

         <input type="hidden" name="token" value="{{ $token }}">


         <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control form-control-sm {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus">

          @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Your new password</label>
          <input type="password" class="form-control form-control-sm {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required">

          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Repeat password</label>
          <input type="password" class="form-control form-control-sm" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block submit-btn">Confirm</button>
      </form>
    </div>
  </div>
</div>



</body>

</html>
