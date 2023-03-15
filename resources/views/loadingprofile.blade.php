<html lang="en">
<head>
<meta charset="utf-8"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
</head>
<title>LOADING STATION</title>
<style>

*{
    
}

body{

  margin: 0;
  justify-content:center;
  align-items:center;
  background-image: linear-gradient(rgba(199, 62, 131, 0.7),rgb(204,177,0));
}
.container{
    margin: 20px;
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap:20px;
}
.box{
    height: 73vh;
    border-radius: 6px;
    position: relative;
    background: #f5f3ed;
    color:black;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #0d6efd;
 
 

}
.title{
    margin: 20px 20px 20px 20px; 
    text-align: center;
    font-weight: 500;
    font-size:18px;
}
.container{
  max-width:95%;

  }
  form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }

  .container form .user-details{
    max-height:320px;
    
  }
  form .button input{
  width:30%;
  color:#fff;
  background: #0d6efd;
  border:none;
  font-size:15px;
 
  font-weight: 400;
  margin-top:20px;
  margin-left:220px;
  transform: translateX(-10%);
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
}

.user-details .input-box input{
  
  width:90%;
  outline:none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 8px;
  font-size:16px;
  transition: all 0.3s ease;
  resize:none;
 
  margin-left: 20px;
}


h1{
    display:absolute;
}


.upload{
    width: 100px;
    position: relative;
    margin-left:30px;
   
}
.upload img{
    border-radius: 50%;
    border: 5px solid #eaeaea;
    height: 120px;
    width: 120px;
    margin-left:220px;
    transform: translateX(-10%);
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
   
}
.upload .round{
    position: absolute;
    bottom: 0;
    background: #0d6efd;
    width: 30px;
    height: 30px;
    line-height: 23px;
    text-align: center;
    border-radius: 50%;
    overflow: hidden;
    margin-left:220px;
    transform: translateX(-10%);
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
  
   
}
.upload i{
    font-size:1.7rem;
}
.upload .round .fileimg[type='file']{
    position: absolute;
    transform: scale(4);
    opacity: 0;
   
}
 .fileimg[type='file']::-webkit-file-upload-button{
    cursor: pointer;
    
}

.user-details input{
    width:90%;
    margin-left: 30px;
    border:1px solid #0d6efd;
    font-weight: 500;
} 
.user-details span{
    font-weight: bold;
}
h2{
    text-transform: uppercase;
    text-align: center;
   padding-top:20px;
    color: #FFF;
}
a{
    float:right;
    margin-right:30px;
    margin-bottom:10px;
}
.buttonimages{
  width: 60%;
  color:#fff;
  background: #0d6efd;
  border:none;
  font-size:18px;
  margin-left:80px;
  font-weight: 500;
  margin-top:20px;
  margin-bottom:20px;
}
.form-container .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
.container .form-container1 .user-details{
    max-height:370px;
   
  }
  .alert {
    position: absolute;
    font-weight: 700;
   
    color: crimson;
   margin-bottom: 320px;
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:20px
}
.logo{
    height: 80px;
    width:80px;
    position:absolute;
    margin:20px;
}
.btn-danger{
    width:120px;
}
.user-details1{
    max-height:340px;
    overflow-y:scroll;
    border: 2px solid #df5d86;
    padding: 10px;
  }
.navigate{
    font-weight:500;
    font-size: 1.2rem;
}
.navigate1{
    font-weight: 500;
    font-size:14px;
}
.btn-danger{
  font-size:14px;
}
@keyframes spin{
    from {transform: rotateY(0deg);}
    to{transform: rotateY(360deg);}
}
.spinning{
    animation: spin 3s infinite;
}
@media only screen and (max-width: 870px){
  .box{
    height: 85vh;
  
}
    form .button input{
  margin-left:150px;
  transform: translateX(-30%);
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
       width:50%;
  margin-top:24px;

}

.upload .round{
    margin-left:100px;
    transform: translateX(-40%);
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
}
.upload img{
    transform: translateX(-30%);
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
    margin-left:120px;
   
}
.alert {
    position: absolute;
    font-weight: 700;
   font-size:.6rem;
    color: crimson;
   margin-bottom: 320px;
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:5px;
   margin-top: 30px;
    
}
}

@media (max-width: 570px){
    form .button input{
  margin-left:120px;
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
}
.upload .round{
    margin-left:66px;
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
}
.upload img{
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
    margin-left:100px;
   
}
h2{
  font-size:1.2rem;
  margin-left:28px;
}
.alert {
    position: absolute;
    font-weight: 700;
   font-size:.6rem;
    color: crimson;
   margin-bottom: 320px;
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:5px;
   margin-top: 30px;
    
}
.btn-primary{
  margin-top:30px;
}
.logo{
    height: 80px;
    width:80px;
    margin:50px;
}
.box{
    height: 70vh;
    margin-top:20px;
  
}
.user-details .input-box input{
  font-size:13px;
  width:75%;
  margin-left:2px;
  margin-top:10px;
}
.user-details1{
    max-height:270px;
  
  }
}
@media screen and (max-device-width: 320px)
and (-webkit-min-device-pixel-ratio: 2) {
  form .button input{
  margin-left:120px;
       right: initial;
       top: initial;
       transition: 2s ease-in-out;
}
.upload .round{
    margin-left:76px;
}
.upload img{
    margin-left:86px;
   
}
h2{
  font-size:1.2rem;
  margin-left:28px;
}
.alert {
    position: absolute;
    font-weight: 700;
   font-size:.6rem;
    color: crimson;
   margin-bottom: 320px;
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:5px;
   margin-top: 30px;
    
}
.btn-primary{
  margin-top:30px;
}
.logo{
    height: 80px;
    width:80px;
    margin:50px;
}
.box{
    height: 95vh;
    margin-top:10px;
  
}
.container{
  max-width:100%;
  margin-left:2px;

  }
.user-details .input-box input{
  font-size:10px;
  width:75%;
  margin-left:2px;
  margin-top:10px;
}
.user-details1{
    max-height:270px;
  
  }
  .user-details span{
    font-weight: bold;
  font-size:10px;

}

}



</style>


<body>
    <img class="logo spinning" src="/images/LSRC.png" alt="ST. ROSE LOGO" >
<H2>LOADING USER PROFILE</H2>

 <a href="/loadingdata" type="button" class="btn btn-primary">SHOW DATA</a>
 <div class="container">
 
    <!-- start how to join asdddddddddddddddddddddddddddddd-->
    <div class="box">
   

    
    <form enctype='multipart/form-data' action="{{url('update-student/'.$data->id)}}" method="post" class="form-container">
   
    @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
         @method('PUT') 
         <div class="title">PROFILE OUTLET INFO</div>
      <div class="user-details">
     
                <div class="upload">
                 <img src="{{asset('images/'.$data->avatar)}}"alt="IMAGE LOADING USER" id="output"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="images" onchange="loadFile(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input type="submit" value="UPDATE PROFILE"> </div>
          </form>
       
        <div class="input-box">
          <span class="details">NAME</span>
          <input type="text" name="Name" placeholder="CASHIER NAME" value="{{$data->Name}}" readonly></input>
        </div>
        <div class="input-box">
          <span class="details">EMAIL</span>
          <input  type="text" name="Step3"  placeholder="CASHIER EMAIL" value="{{$data->email}}" readonly></input>
        </div>
        <a href="{{ url('logout/')}}" type="button" class="btn btn-danger">LOG OUT</a>
      
      </div>
      
  </form>
</div>
<!-- end join asdddddddddddddddddddddddddddddd-->
<!-- start mr and ms asdddddddddddddddddddddddddddddd-->
    <div class="box">
    <div class="title">HOW TO NAVIGATE?</div>
  
       
        <div class="input-box user-details1">
        <p class="navigate">How to change Profile Picture?</p>
         <hr>
          <p class="navigate1">You can Change your Profile picture just the click camera icon and choose your profile picture to your folder then click upload profile. </p>
          <hr>
          <p class="navigate">How to load?</p>
         <hr>
         <p class="navigate1"> <span class="navigate">Step 1</span><br> Just click the "SHOW DATA" button to get all users and it will show to your dashboard </p>
         <p class="navigate1"> <span class="navigate">Step 2</span><br> Remind the costumer that one (1) point will cost three (3)pesos. Ask their Gmail account and use search engine box to pagination to find the users</p>
         <p class="navigate1"> <span class="navigate">Step 3</span><br> Click "ADD LOAD" and it will appear the loading station form and click save</p>

     
    
      </div>
       
       
      
      </div>

  </form>
    
 </div>
 <script src="{{asset('bootstrap/js/apps.js')}}"></script>

 
 <script>
 var loadFile = function(event){

  var output =document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
</body>

</html> 