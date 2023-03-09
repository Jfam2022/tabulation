<html lang="en">
<head>
<meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  display:flex;
  height: 100vh;
  justify-content:center;
  align-items:center;
  padding:10px;
  background-image: linear-gradient(rgba(199, 62, 131, 0.7),rgb(204,177,0));
  
  
}
.container{
  max-width:700px;
  width:100%;
  background:#fff;
  padding:25px 30px;
  border-radius:5px;
}
.container .title{
  font-size: 25px;
  font-weight:500;
  position:relative;

}
.container .title::before{
  content:'';
  position:absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  background:#0d6efd;
}
.container form .user-details{
  display:flex;
  flex-wrap:wrap;
  justify-content:space-between;
  margin:20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
.user-details .input-box .details{
  display:block;
  font-weight: 500;
  margin-bottom:5px;

}
.user-details .input-box input{
  height: 45px;
  width:100%;
  outline:none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding-left: 15px;
  font-size:16px;
  border-bottom-width: 2px;
  transition: all 0.3s ease;

}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #0d6efd;

}

form .button{
  height: 45px;
  margin:45px 0;
}
form .button input{
  height: 100%;
  width: 100%;
  outline:none;
  color:#fff;
  background: #0d6efd;
  border:none;
  font-size:18px;
  font-weight: 500;
}
form .button input:hover{
  color:black;
  background: #0d6efd;
} 
.alert {
    position: absolute;
    font-weight: 700;
   font-size:1rem;
    color: crimson;
   float: right;
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:160px;
 
}

@media only screen and (max-width:800px) {
  .container{
  max-width:100%;
  }
  form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }

  .container form .user-details{
    max-height:200px;
    overflow-y:scroll;
  }

}

</style>
</head>
<title>EDIT CRITERIA</title>
<body>
<div class="container">
  <div class="title">EDIT CRITERIA</div>
  @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
  <form action="/updatcritera1" method="post">
    @csrf
  
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="hidden" name="scoreop1" value="{{$data['scoreop1']}}">

      <div class="user-details">
        <div class="input-box">
          <span class="details">CRITERIA NAME</span>
          <input type="text" name="creteria" placeholder="Enter CRITERIA NAME" value="{{$data['creteriascores']}}" required>
        </div>
       
        <div class="input-box">

          <span class="details">PERCENT</span>
          <input type="text" name="percent" placeholder="Change PERCENT Here " value="{{$data['percentscores']}}" required>
        </div>
      
      
      </div>
    
      <div class="button">
        <input type="submit" value="EDIT">
      </div>
   
      <a href="/event" type="button" class="btn btn-danger">BACK TO HOME</a>

  </form>
</div>

</body>
</html>