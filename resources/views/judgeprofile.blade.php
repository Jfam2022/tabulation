<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/judgeprofile.css')}}" rel="stylesheet">   
     <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
    <title>ST ROSE COLLEGE EDUCATIONAL FOUNDATION INC. JUDGES PROFILE</title>
<body>
<!--header-->

<section id="header">
    <div class="header container">
           <div class="nav-bar">
            <div class="brand">
            <a href="#hero"><img src="/images/LSRC.png" alt="Logo of St. Rose" class="spinning"><a href="#hero"><h1>ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC.</h1></a>
            </div>
           <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
            <ul>
                <li><a href="{{ url('judgegetcandidates/')}}" data-after="GET CANDIDATES">GET CANDIDATES</a></li>
              
                <li><a href="{{ url('logout/')}}" data-after="LOGOUT">LOGOUT</a></li>
             </ul>
           </div>
        </div>
    </div>


</section><br><br>


<!-- end header-->
<!--hero--> 
<section id="hero"><br><br><br>
<H2 style="text-align:center; color:white; margin-top:10px; margin-bottom:10px;">WELCOME JUDGE</H2>

<div class="hero_container">

  <div class="box1">
   
         <form enctype='multipart/form-data' action="{{url('update-student/'.$data->id)}}" method="post" class="form-container">
    @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
         @method('PUT') <br>
         <div class="title">JUDGE USER PROFILE</div>
      <div class="user-details">
     
                <div class="upload">
                 <img src="{{asset('images/'.$data->avatar)}}"alt="user picture" id="output"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="images" onchange="loadFile(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><br><br>
         
       
        <div class="input-box">
          <span class="details">NAME</span>
          <input type="text" name="Name" placeholder="STUDENT FULL NAME" value="{{$data->Name}}" readonly></input>
        </div>
        <div class="input-box">
          <span class="details">EMAIL</span>
          <input  type="text" name="Step3"  placeholder="STUDENT EMAIL" value="{{$data->email}}" readonly></input>
        </div>
       
        <div class="button">
                <input  type="submit" class="btn btn-primary" value="UPDATE PROFILE">  </div>
        </form>
      </div>
      
  </form>

  </div>

  
  
  <div class="box">
    <div class="form-container1">
      
     
      <div class="user-details">
    
      <div class="title">WHO WILL BE THE NEXT</div>
    <div class="hero_container"><img src="{{asset('images/'.$announcement->avatarabout)}}"alt="POST PAGEANT IMG" class="spinning">
      
      </div>
      </div>
</div>
 </section>
 <!--user profile start-->


 
 <script src="{{asset('bootstrap/js/apps.js')}}"></script>

 <script>
 var loadFile = function(event){

  var output =document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
</body>
</html>