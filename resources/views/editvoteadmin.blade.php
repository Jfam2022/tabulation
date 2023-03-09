<html lang="en">
<head>
<meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
</head>
<title>EDIT VOTE</title>
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
    max-width:65%;
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap:20px;
    margin-top:50px;
    margin-left: 250px;
    transition: 2s ease-in-out;
  
}
.box{
    height: 78vh;
    border-radius: 6px;
    position: relative;
    background: #f5f3ed;
    color:black;
}
.user-details .input-box textarea:focus,
.user-details .input-box textarea:valid{
  border-color: #0d6efd;
}
.title{
    margin: 20px 20px 20px 20px; 
    text-align: center;
    font-weight: 500;
    font-size:18px;
}

form .user-details .input-box{
  margin-bottom: 15px;
    width: 100%;
  }
.container form .user-details{
    max-height:330px;
  }
form .button input{
  width: 30%;
  color:#fff;
  background: #0d6efd;
  border:none;
  font-size:20px;
  margin-left:20px;
  font-weight: 500;
  margin-top:15px;
}
a{
    float:right;
    margin-right:30px;
    margin-top:10px;  
}

h1{
    display:absolute;
}



.user-details input{
    width:90%;
    margin-left: 10px;
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
.alert {
    position: absolute;
    font-weight: 700;
   font-size:1rem;
    color: crimson;
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:95px;
    
}


input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  -webkit-appearance: none;
  margin:0;
}
form .button input{
  width: 25%;
  font-size:20px;
  margin-left:30px;
  font-weight: 400;
  margin-top:20px;
  float:left;
  border-radius:4px;
}
 .button2 {
  font-weight: 900;
  margin-top:20px;
}

@media only screen and  (max-width: 870px){

.container{
    margin: 20px;
    max-width:95%;
  
    margin-top:50px;
}
.box{
    height: 58vh;
}
form .button input{
  width: 25%;
  font-size:20px;
  margin-left:30px;
  font-weight: 400;
  margin-top:20px;
  float:left;
  border-radius:4px;
}
 .button2 {
  font-weight: 900;
  margin-top:20px;
}

@media only screen and (max-width: 570px){

  .box{
    height: 58vh;
}
.container{
    margin: 10px;
    max-width:95%;
    margin-top:50px;
}
  form .button input{
  width: 28%;
  font-size:16px;
  margin-left:30px;
  font-weight: 400;
  margin-top:20px;
  float:left;
  border-radius:4px;
}
 .button2 {
  font-weight: 900;
  margin-top:20px;
}
}
}

</style>


<body>
<H2>CANDIDATE INFORMATION</H2>
@if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
         @method('PUT')  
 <div class="container">

    <!-- start how to join asdddddddddddddddddddddddddddddd-->

    <div class="box">
    <div class="title">EDIT VOTE</div>
    <form enctype='multipart/form-data' action="{{url('editvote/'.$vote->id)}}" method="post" class="form-container">
    
      @csrf
         @method('PUT')
      
         <div class="user-details">
      
             <input type="hidden" name="id" placeholder="id NO." value="{{$vote->id}}">
     
        <div class="input-box">
          <span class="details">CANDIDATE NO.</span>
          <input type="text" name="candino" placeholder="CANDIDATE NO." value="{{$vote->candino}}" readonly>
      </div>
    
       
        <div class="input-box">
          <span class="details">CANDIDATE NAME</span>
          <input type="text" name="namecan" placeholder="CANDIDATE NAME"  value="{{$vote->namecan}}" readonly>
          </div>
          <div class="input-box">
          <span class="details">EDIT VOTE</span>
          <input type="number" name="vpointsc" placeholder="ENTER YOUR VOTE"  value="{{$vote->vpointsc}}" required>
          </div>
    
        <div class="button">
        <input  type="submit" value="UPDATE"> 
        </div>
        <div class="button2">

        <a href="/adminvote" type="button" class="btn btn-danger">BACK</a> </div>
        </div>
  
</form>   
        
   
    </div>
    </div>
    
 </div>
    
 </div>
 
 
<script>
 var loadFile5 = function(event){

  var output5 =document.getElementById('output5');
  output5.src = URL.createObjectURL(event.target.files[0]);
 };
</script>


</body>

</html> 