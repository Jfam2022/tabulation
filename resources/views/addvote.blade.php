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
<title>ADD VOTE</title>
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
      margin: 10px;
      max-width:65%;
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      margin-top:20px;
      margin-left: 150px;
      transition: 2s ease-in-out;
    
  }

  .box{
      height: 88vh;
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
      margin: 10px 10px 10px 10px; 
      text-align: center;
      font-weight: 500;
      font-size:18px;
  }
  
  form .user-details .input-box{
    margin-bottom: 15px;
      width: 100%;
    }
  .container form .user-details{
      max-height:430px;
      overflow-y:hidden;
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
    border: 5px solid burlywood;
      height: 180px;
      width: 200;  
      font-weight:500;
      margin-left:80px;
  
  }

 
  .user-details input{
      width:70%;
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
     padding-top:10px;
      color: #FFF;
  }
  .alert {
    position: relative;
      font-weight: 700;
     font-size:.7rem;
      color: crimson;
     border: 2px solid crimson;
     padding: 3px 6px;
     margin-left:5px;
     width:80%;
      
  }
 

  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button{
    -webkit-appearance: none;
    margin:0;
  }
 
  @media only screen and (min-width:1200px) {
    .upload img{
height: 220px;
width: 240px;  
color:crimson;
font-weight:500;
margin-left:200px;
}
.title{
margin: 10px 10px 10px 10px; 
text-align: center;
font-weight: 500;
font-size:13px;
}

.container{
      margin: 20px;
      max-width:60%;
      margin-top:20px;
      margin-left: 300px;
    
  }


    .user-details input{
    align:center;
    font-size:16px;
    width:50%;
    } 
h2{
padding-top:22px;
}
.alert {
      position: relative;
      font-weight: 700;
     font-size:.8rem;
      color: crimson;
     border: 2px solid crimson;
     padding: 3px 6px;
     margin-left:1px;
     margin-top:8px;
     width:70%
      
  } 
form .button input{
font-size:18px;
margin-top:50px;
border-radius:3px;
} 
form .button a{
font-size:15px;
margin-top:50px;
} 
.box{
height: 98vh;

}
.user-details span{
font-weight: bold;
font-size:15px;
margin-left:40px;
}
.container form .user-details{
max-height:590px;
}
  }

@media only screen and (max-device-width: 800px){
 .upload img{
height: 170px;
width: 270px;  
color:crimson;
text-align:center;
font-weight:500;
margin-left:90px;
}
.title{
margin: 10px 10px 10px 10px; 
text-align: center;
font-weight: 500;
font-size:13px;
}

.container{
      margin: 20px;
      max-width:80%;
      margin-top:50px;
      margin-left: 100px;
    
  }


.user-details input{
margin-left: 10px;
font-size:16px;
} 
h2{
padding-top:22px;
}
.alert {
      position: relative;
      font-weight: 700;
     font-size:.8rem;
      color: crimson;
     border: 2px solid crimson;
     padding: 3px 6px;
     margin-left:1px;
     width:80%;
      
  } 
form .button input{
font-size:15px;
margin-top:35px;
} 
form .button a{
font-size:10px;
margin-top:35px;
} 
.box{
height: 100vh;

}
.user-details span{
font-weight: bold;
font-size:15px;

}
.container form .user-details{
max-height:390px;
}
  }
  @media only screen and (min-device-width: 270px) and (max-device-width: 570px) {

      .upload img{

      height: 170px;
      width: 170px;  
      color:crimson;
      text-align:center;
      font-weight:500;
      margin-left:1px;
  }
  .title{
      margin: 10px 10px 10px 10px; 
      text-align: center;
      font-weight: 500;
      font-size:13px;
  }

  .container{
      margin: 2px;
      max-width:99%;
      margin-top:5px;
  }
 
 
  .user-details input{
      margin-left: 10px;
      font-size:16px;
  } 
  h2{
     padding-top:22px;
  }
  .alert {
      font-weight: 600;
     font-size:.6rem;
     margin-top: 1px;
     padding: 3px 6px;
     margin-left:1px;
     width: 90%;
     position: relative;
      
  
  }  
  form .button input{
    font-size:15px;
    margin-top:30px;
  } 
  form .button a{
    font-size:10px;
    margin-top:30px;
  } 
  .box{
      height: 95vh;
    
  }
  .user-details span{
      font-weight: bold;
    font-size:15px;

  }
  .container form .user-details{
      max-height:390px;
    }
  
}
@media only screen and (max-width: 570px) {

.upload img{

height: 170px;
width: 170px;  
color:crimson;
text-align:center;
font-weight:500;
margin-left:40px;
}
.title{
margin: 10px 10px 10px 10px; 
text-align: center;
font-weight: 500;
font-size:13px;
}

.container{
margin: 2px;
max-width:99%;
margin-top:5px;
}


.user-details input{
margin-left: 10px;
font-size:16px;
} 
h2{
padding-top:22px;
}
.alert {
font-weight: 600;
font-size:.6rem;
margin-top: 1px;
padding: 3px 6px;
margin-left:1px;
width: 90%;
position: relative;


}  
form .button input{
font-size:15px;
margin-top:30px;
} 
form .button a{
font-size:10px;
margin-top:30px;
} 
.box{
height: 95vh;

}
.user-details span{
font-weight: bold;
font-size:15px;

}
.container form .user-details{
max-height:390px;
}

}
@media screen and (max-device-width: 320px)
and (-webkit-min-device-pixel-ratio: 2) {
    .upload img{
      height: 120px;
      width: 120px;  
      margin-left:30px;
  }
  .title{
      margin: 10px 10px 10px 10px; 
      text-align: center;
      font-weight: 900;
      font-size:8px;
  }

  .container{
      margin: 2px;
      max-width:98%;
      margin-top:5px;
  }
 
  
  .user-details input{
      margin-left: 10px;
      font-size:.8rem;
  } 
  h2{
     padding-top:12px;
  }
  .alert {
      font-weight: 600;
     font-size:.6rem;
     margin-top: 1px;
     padding: 3px 6px;
     margin-left:1px;
     width: 90%;
     position: relative;
      
  
  }  
  form .button input{
    font-size:15px;
    margin-top:10px;
    border-radius:3px;
  } 
  form .button a{
    font-size:8px;
    margin-top:10px;

  } 
  .box{
      height: 90vh;
  }
  .input-box span{
    font-size:10px;

  }
 
}

</style>


<body>

<h2>CAST YOUR VOTE</h2>



 <div class="container">

    <!-- start how to join asdddddddddddddddddddddddddddddd-->
    
    <div class="box">
    @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
         @method('PUT')
    <div class="title">CANDIDATE INFORMATION VOTE WISELY</div>
    <form enctype='multipart/form-data' action="{{url('castvote/'.$vote->id)}}" method="post" class="form-container">
   
      @csrf
         @method('PUT')  
      
         <div class="user-details">
      	<div class="input-box">
            <!-- start male winner-->
            <span class="details1">CANDIDATE PHOTO</span><br>
               <div class="upload">
               <img class="imgprof"src="{{asset('images/'.$vote->image)}}" alt="CANDIDATE PHOTO HERE" id="output5"/>
                        
             </div>  
             </div>
             <input type="hidden" name="id" placeholder="id NO." value="{{$vote->id}}">
             <input type="hidden" name="eventc" placeholder="EVENT" value="{{$vote->eventc}}">
     
        <div class="input-box">
          <span class="details spand2">CANDIDATE NO.</span>
          <input type="text" name="candino" placeholder="CANDIDATE NO." value="{{$vote->candino}}" readonly>
      </div>
    
       
        <div class="input-box">
          <span class="details">CANDIDATE NAME</span>
          <input type="text" name="namecan" placeholder="CANDIDATE NAME"  value="{{$vote->namecan}}" readonly>
          </div>
          <div class="input-box">
          <span class="details">ENTER YOUR VOTE</span>
          <input type="number" name="vpointsc" placeholder="ENTER YOUR VOTE"  value="0" required>
          </div>
    </div>

    
          <div class="button">
        <input  type="submit" value="UPDATE"> 
        <a href="/votenow" type="button" class="btn btn-danger">BACK TO CANDIDATES</a> </div>
  
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