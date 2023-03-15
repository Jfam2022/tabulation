<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
     <!-- Bootstrap CSS -->
     <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/logreg.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Sign in and Sign Up Form</title>

<body>
<div class="containerl">

    <div class="forms-containerl">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <img src="/images/LSRC.png" alt="logo of St. rose">&nbsp<h1 class="modal-title fs-5" id="exampleModalLabel">SEND YOUR PASSWORD TO YOUR GMAIL</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('send-email')}}" class="addform" method="get" >
        @csrf
      <div class="modal-body">
     
            <div class="mb-3">
            
              <input type="text" class="form-control" 
              name="email" placeholder="EMAIL ACCOUNT" value="{{old('email')}}"
               style="width: 290px; height:50px;" required/>
            
            </div>
           
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn1">SEND</button>
      </div>
    </form>
    </div>
  </div>
</div>
     <div class="signin-signup">
    
      <form action="{{route('login-user')}}" class="sign-in-form" method="post">
        @csrf
      @if(Session::has('success'))
        <div class="alert alert-sucess">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
      
        <h2 class="title1">Log In</h2>
          <div class="input-field">
            <i class="bi bi-envelope-fill"></i>
            <input type="email" name="email" placeholder="Email" required>
            <span class="text-danger">@error('email'){{$message}} @enderror</span>

          </div>
          <div class="input-field">
            <i class="bi bi-lock-fill"></i>
            <input type="password" name="password" placeholder="Password" required>
            <span class="text-danger">@error('password'){{$message}} @enderror</span>

          </div>
          <input type="submit" class="btn solid" value="Log In">
          <a href="{{ url('/')}}" class="buts">BACK TO HOME</a>
          <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal" class="forgot">FORGOT PASSWORD?</a>
      </form>

      <form action="{{route('register-user')}}" method="post" class="sign-up-form">
       
        @csrf
          <h2 class="title">Sign Up</h2>
         
          <div class="input-field">
          <i class="bi bi-person-fill"></i>
            <input type="text" name="name" placeholder="Full Name" required/>
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
          </div>
          <div class="input-field">
            <i class="bi bi-envelope-fill"></i>
            <input type="email" name="email" placeholder="Email" required/>
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
          </div>
          <div class="input-field">
            <i class="bi bi-lock-fill"></i>
            <input type="password" name="password" placeholder="Password" required/>
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
          </div>
          <input type="submit" class="btn solid" value="Sign up">
         
          
        </form>
     </div>
    </div>

    <div class="panels-containerl">
      <div class="panel left-panel">
        <div class="content">
          <h3> New Here?</h3>
          <p> WELCOME TO  MR. AND MS ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC. TABULATION</p>
          <button class="btn transparent" id="sign-up-btn">Sign Up</button>
        </div>

        <img src="/images/LSRC.png" class="image" alt="SRC IMAGE" class="spinning">
      </div>

      <div class="panel right-panel">
        <div class="content">
           <h3> One of us?</h3>
           <p> WELCOME TO  MR. AND MS ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC. TABULATION</p>
         
            <button class="btn transparent" id="sign-in-btn">Sign In</button>
         
        </div>

        <img src="/images/LSRC.png" class="image"  alt="SRC IMAGE" class="spinning">

       </div>
    </div>
  </div>
  <script src="{{asset('bootstrap/js/app.js')}}"></script>
</body>
</html>