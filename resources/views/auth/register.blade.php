<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Register | Laravel Admin</title>

   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">

   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
   <div class="login-box">
      <div class="login-logo">
         <a href="#">Laravel<b>Admin</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
         <p class="login-box-msg">Register New memberhsip</p>

         <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group has-feedback">
               <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" placeholder="Full name" value="{{ old('name') }}">
               <span class="glyphicon glyphicon-user form-control-feedback"></span>
               @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group has-feedback">
               <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
               <span class="glyphicon glyphicon-user form-control-feedback"></span>
               @if ($errors->has('username'))
                  <span class="help-block">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group has-feedback">
               <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
               <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
               @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
               @endif
            </div>



            <div class="form-group has-feedback">
               <input type="password" name="password" class="form-control" placeholder="Password">
               <span class="glyphicon glyphicon-lock form-control-feedback"></span>
               @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
               @endif
            </div>


            <div class="form-group has-feedback">
               <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
               <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
               <input type="file" name="picture" class="form-control" accept="image/*">
            </div>

            <div class="row">
               <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">
                     <i class="fa fa-chevron-right"></i>
                     <span>REGISTER NOW</span>
                  </button>
               </div>
            </div>
         </form>
         <br>

      </div>
      <!-- /.login-box-body -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery 3 -->
   <script src="{{ asset('js/jquery.min.js') }}"></script>
   <!-- Bootstrap 3.3.7 -->
   <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
