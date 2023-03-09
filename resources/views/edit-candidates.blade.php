<html lang="en">
<head>
<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
</head>
<title>CANDIDATE INFORMATION</title>
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
    overflow-y:scroll;
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
.upload{
    width: 100px;
    position: relative;
    margin-left:50px;
  
}
.upload img{
    border: 5px solid #eaeaea;
    height: 320px;
    width: 400px;  
    color:crimson;
    text-align:center;
    font-weight:500;
    margin-left:150px;

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
    margin-left:160px;
    margin-bottom: 10px;
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
.alert {
    position: absolute;
    font-weight: 700;
   font-size:.6rem;
    color: crimson;
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:95px;
    
}
.logo{
    height: 80px;
    width:80px;
    position:absolute;
    margin:20px;
}
.user-details select{
    width:90%;
    margin-left: 30px;
    font-weight: 300;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  -webkit-appearance: none;
  margin:0;
}
option{
    font-weight: 700;
}
@media only screen and  (max-width: 870px){
    .upload img{
    border: 5px solid #eaeaea;
    height: 300px;
    width: 350px;  
    color:crimson;
    text-align:center;
    font-weight:500;
    margin-left:90px;
}
.container{
    margin: 20px;
    max-width:95%;
    display:grid;
  
    grid-gap:20px;
    margin-top:50px;
}
.upload .round{
   margin-left: 100px; 
   transition: 2s ease-in-out;
}
.logo{
    height: 60px;
    width:60px;
    position:absolute;
    margin:20px;
}
@media only screen and (max-width: 570px){
    .upload img{
    border: 5px solid #eaeaea;
    height: 250px;
    width: 250px;  
    color:crimson;
    text-align:center;
    font-weight:500;
    margin-left:1px;
}
.upload .round{
   margin-left: 20px; 
   transition: 2s ease-in-out;
}
.container{
    margin: 2px;
    max-width:99%;

    margin-top:5px;
}
.logo{
    height: 60px;
    width:60px;
    position:relative;
    margin:5px;
}  
.user-details select{
    margin-left: 5px;
}     
.user-details input{
    margin-left: 5px;
} 
h2{
   padding-top:1px;
}
.alert {
    font-weight: 600;
   font-size:1rem;
   margin-top: 13px;
   padding: 3px 6px;
   margin-left:95px;
    

}  
form .button input{
  width: 30%;
  font-size:15px;
  margin-top:30px;
} 
form .button a{
  font-size:10px;
  margin-top:30px;
} 
.box{
    height: 72vh;
  
}
    }
}

</style>


<body>
@csrf
         @method('PUT')  
@if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif  
    <img class="logo" src="/images/LSRC.png" alt="ST. ROSE LOGO">
  
<H2>{{$data->namecan}} </H2>
 
     
 <div class="container">

    <!-- start how to join asdddddddddddddddddddddddddddddd-->

    <div class="box">
    <div class="title">EDIT CANDIDATE INFORMATION</div>
    <form enctype='multipart/form-data' action="{{url('updatecandidates/'.$data->id)}}" method="post" class="form-container">
    
      @csrf
         @method('PUT')
      
         <div class="user-details">
      	<div class="input-box">
            <!-- start male winner-->
            <span class="details1">CANDIDATE PHOTO</span><br>
               <div class="upload">
               <img class="imgprof"src="{{asset('images/'.$data->image)}}" alt="CANDIDATE PHOTO HERE" id="output5"/>
                         <div class="round">
                            <input class="fileimg" type="file" name="image" onchange="loadFile5(event)" >
                            <i class= "bi bi-camera" style =" color: #fff; "></i><br><br>
                        </div>
             </div>  
             </div>
       
        <div class="input-box">
          <span class="details">CANDIDATE NO</span>
          <input type="text" name="candino" placeholder="CANDIDATE NO." value="{{$data->candino}}" required>
      </div>
    
       
        <div class="input-box">
          <span class="details">CANDIDATE NAME</span>
          <input type="text" name="namecan" placeholder="CANDIDATE NAME"  value="{{$data->namecan}}" required>
          </div>
          <div class="input-box">
          <span class="details">CATEGORY</span>
          <input type="text" name="CATEGORY" placeholder="CATEGORY"  value="{{$data->currentc}}" required>
          </div>
    
      <div class="input-box">
                     <span class="details">DEPARTMENT</span>
                        <select  name="deptc" class="form-select" aria-label="Default select example" required>
                        <option  selected >{{$data->deptc}}</option>
                         <option value="DCS">DCS</option>
                         <option value="EDUCATION">EDUCATION</option>
                         <option value="CBA">CBA</option>
                         <option value="CRIM">CRIM</option>
                         </select>
         </div>
      
            <div class="input-box">
                     <span class="details">GENDER</span>
                        <select  name="gender" class="form-select" aria-label="Default select example" required>
                        <option  selected >{{$data->gender}}</option>
                         <option value="FEMALE">FEMALE</option>
                         <option value="MALE">MALE</option>
                         </select>
             </div> 
        <div class="input-box">
                <span class="details">AGE OF CANDIDATE</span>
                <input type="number" name="agec" placeholder="CHANGE AGE" value="{{$data->agec}}" required>
        </div>  
        
         <div class="input-box">
                <span class="details">POINTS OF VOTE</span>
                <input type="number" name="vpointsc" placeholder="CHANGE POINTS" value="{{$data->vpointsc}}" required>
        </div>  
        <div class="input-box">
                <span class="details">JUDGE SCORE</span>
                <input type="number" name="vscores" placeholder="CHANGE SCORE" value="{{$data->vscores}}"  required>
        </div>  

         </div>
             <div class="button">
        <input  type="submit" value="UPDATE"> <a href="/event" type="button" class="btn btn-danger">BACK TO EVENT</a> </div>
    </form>
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