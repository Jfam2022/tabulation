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
<title>Announcement</title>
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
.container{
  max-width:95%;
  }
  form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }

  .container form .user-details{
    max-height:320px;
    overflow-y:scroll;
  }
  form .button input{
  width: 60%;
  color:#fff;
  background: #0d6efd;
  border:none;
  font-size:18px;
  margin-left:80px;
  font-weight: 500;
  margin-top:20px;
}

.user-details .input-box textarea{
  height: 230px;
  width:90%;
  outline:none;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 15px;
  font-size:16px;
  transition: all 0.3s ease;
  resize:none;
  max-height: 230px;
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
    border: 5px solid #eaeaea;
    height: 200px;
    width: 300px;
   
    
}
source{
    border: 5px solid #eaeaea;
    height: 200px;
    width: 300px;
   
    
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
.user-details select{
    width:90%;
    margin-left: 30px;
    font-weight: 500;
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
    overflow-y:scroll;
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
@media only screen and (max-width: 570px){
  h2{
    font-size: 1.4rem;
  }
  .logo{
    height: 70px;
    width:70px;
    margin:45px;
    
}
.box{
    height: 71vh;
    margin-top:20px;
   
}
.container form .user-details{
    max-height:330px;
    overflow-y:scroll;
  }
  a{
    margin-bottom:10px;
}
.user-details .input-box textarea{
  width:87%;
  margin-left: 10px;
}
form .button input{
  width: 40%;
  margin-left:97px;
  font-weight: 550;
  margin-top:20px;
}
.upload img{
    height: 200px;
    width: 320px;
    
  
}
.upload{
    position: relative;
    margin-left:10px;
   
}
.form-container .user-details .input-box{
    width: 80%;
  }
  .details1{
    font-size:13px;
    color:crimson;
  
}
}

</style>


<body>
    <img class="logo" src="/images/LSRC.png" alt="ST. ROSE LOGO">
<H2>announcement</H2>
@if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
         @method('PUT')  <a href="/admin" type="button" class="btn btn-danger">BACK TO HOME</a>
 <div class="container">

    <!-- start how to join asdddddddddddddddddddddddddddddd-->
    <div class="box">
   
    <div class="title">EDIT HOW TO JOIN</div>
     
    <form action="{{url('editjoin/'.$announcement->id)}}" method="post" class="join">
    @csrf
      <div class="user-details">
        <div class="input-box">
          <span class="details">Step 1</span>
          <textarea type="text"  name="Step1"  placeholder="Write Step 1" required>{{$announcement->step1}}</textarea>
           </div>
       
        <div class="input-box">
          <span class="details">Step 2</span>
          <textarea type="text" name="Step2" placeholder="Write Step 2" required>{{$announcement->step2}}</textarea>
        </div>
        <div class="input-box">
          <span class="details">Step 3</span>
          <textarea  type="text" name="Step3"  placeholder="Write Step 3" required>{{$announcement->step3}}</textarea>
        </div>
       
        <div class="input-box">
          <span class="details">Step 4</span>
          <textarea  name="Step4"  placeholder="Write Step 4" required>{{$announcement->step4}}</textarea>
        </div>
      </div>
      <div class="button">
        <input type="submit" value="UPDATE">  </div>
  </form>
</div>
<!-- end join asdddddddddddddddddddddddddddddd-->
<!-- start mr and ms asdddddddddddddddddddddddddddddd-->
    <div class="box">
    <div class="title">ACTIVITIES IMAGES AND ADVERTISEMENT</div>
    <div class="form-container1">
      
     
            <div class="user-details">
        <!-- for event mr and ms asdddddddddddddddddddddddddddddd-->
        <!-- start female winner-->
          
          <form action="{{url('update-event/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
        
                   
                <span class="details">1st ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->avatar1)}}"alt="ACTIVITIES" id="output"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="avatar1" onchange="loadFile(event)" >
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>


 <!-- start male winner-->

          <form action="{{url('update-event2/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                     
                    
                  <span class="details">2nd ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->avatar2)}}"alt="ACTIVITIES"id="output2"/> 
                    <div class="round">
                     <input class="fileimg" type="file" name="avatar2" onchange="loadFile2(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>


           <!-- start female 1st runner up-->
          <form action="{{url('update-event3/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                   
                    
                  <span class="details">3rd ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->avatar3)}}"alt="ACTIVITIES" id="output3"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="avatar3" onchange="loadFile3(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>

          <!-- start female 1st runner up-->
          <form action="{{url('update-event4/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                
                  <span class="details">4th ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->avatar4)}}"alt="ACTIVITIES" id="output4"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="avatar4" onchange="loadFile4(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form>
          <form action="{{url('update-event5/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                   
                    
                  <span class="details">5th ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->name1)}}"alt="ACTIVITIES" id="output5"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="name1" onchange="loadFile5(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>
          <form action="{{url('update-event6/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                   
                    
                  <span class="details">6th ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->name2)}}"alt="ACTIVITIES" id="output6"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="name2" onchange="loadFile6(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>
          <form action="{{url('update-event7/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                   
                    
                  <span class="details">7th ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->name3)}}"alt="ACTIVITIES" id="output7"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="name3" onchange="loadFile7(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>
          <form action="{{url('update-event8/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                   
                    
                  <span class="details">8th ACTIVITIES IMAGES</span><br>
               <div class="upload">
                 <img src="{{asset('images/'.$announcement->name4)}}"alt="ACTIVITIES" id="output8"/>
                    <div class="round">
                     <input class="fileimg" type="file" name="name4" onchange="loadFile8(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>
          <form action="{{url('update-event9/'.$announcement->id)}}" method="post" class="join" enctype='multipart/form-data'>
          @csrf
         @method('PUT')
         
                   
                    
                  <span class="details">SCHOOL ADVERTISEMENT</span><br>
               <div class="upload">
               <video width="320" height="240" autoplay muted>
               <source src="{{asset('images/'.$announcement->anountags2)}}" type="video/mp4">
               </video>
               <div class="round">
                     <input class="fileimg" type="file" name="anountags2" onchange="loadFile10(event)">
                     <i class= "bi bi-camera" style =" color: #fff; "></i>
                    </div>
                </div><div class="button">
                <input   type="submit" value="UPDATE ">  </div>
          </form><br>
          
            </div>
            
  
    </div> 
</div>


<!-- end update modal asdddddddddddddddddddddddddddddd-->

    <div class="box">
    <div class="title">EDIT INFORMATION AND ABOUT IMAGE</div>
    <form enctype='multipart/form-data' action="{{url('update-announcement/'.$announcement->id)}}" method="post" class="form-container">
     
      @csrf
         @method('PUT')   
         <input type="hidden" id="date" name="date">
         <div class="user-details">
         <div class="input-box">
                     <span class="details">CHOOSE EVENT </span>
                        <select  name="event" class="form-select" aria-label="Default select example" required>
                        <option value="">{{$announcement->event1}}</option>
                       
                         <option value="MR AND MS INTRAMS">MR AND MS INTRAMS</option>
                         <option value="MR AND MS ST ROSE COLLEGE">MR AND MS ST ROSE COLLEGE</option>
                        
                         </select>
                         <span>REMARKS: <span class="details1">{{$announcement->event1}}</span></span>
                  </div>
                  <div class="input-box">
                     <span class="details">CHOOSE EVENT </span>
                        <select  name="VOTING" class="form-select" aria-label="Default select example" required>
                       
                         <option value="OPEN VOTING">OPEN VOTING</option>
                         <option value="CLOSE VOTING">CLOSE VOTING</option>
                        
                         </select>
                         <span>REMARKS: <span class="details1">{{$announcement->anountags4}}</span></span>
                  </div>
      	<div class="input-box">
            <!-- start male winner-->
            <span class="details">CHANGE PICTURE ABOUT</span><br>
               <div class="upload">
               <img class="imgprof"src="{{asset('images/'.$announcement->avatarabout)}}" alt="IMAGE WINNER" id="output9"/>
                         <div class="round">
                            <input class="fileimg" type="file" name="avatarabout" onchange="loadFile9(event)" >
                            <i class= "bi bi-camera" style =" color: #fff; "></i><br><br>
                        </div>
             </div>  
             </div>
       
        <div class="input-box">
          <span class="details">PHONE</span>
          <input type="text" name="phone" placeholder="Enter Your Phone Number" value="{{$announcement->phone}}" required>
      </div>
        <div class="input-box">
          <span class="details">EMAIL LINK</span>
          <input type="text" name="email" placeholder="Enter Your Email link" value="{{$announcement->email}}" required>
      </div>
       
        <div class="input-box">
          <span class="details">FACEBOOK LINK</span>
          <input type="text" name="fb" placeholder="Enter Your FB link" value="{{$announcement->fb}}" required>
          </div>
      </div>
    
             <div class="button">
        <input  type="submit" value="UPDATE">  </div>
    </form>
</form>   
        
   
    </div>
    </div>
    
 </div>
    
 </div>
 
 <script>
 var loadFile = function(event){

  var output =document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
 var loadFile2 = function(event){

  var output2 =document.getElementById('output2');
  output2.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
 var loadFile3 = function(event){

  var output3 =document.getElementById('output3');
  output3.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
 var loadFile4 = function(event){

  var output4 =document.getElementById('output4');
  output4.src = URL.createObjectURL(event.target.files[0]);
 };
</script>

<script>
 var loadFile5 = function(event){

  var output5 =document.getElementById('output5');
  output5.src = URL.createObjectURL(event.target.files[0]);
 };
</script>

<script>
 var loadFile6 = function(event){

  var output6 =document.getElementById('output6');
  output6.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
 var loadFile7 = function(event){

  var output7 =document.getElementById('output7');
  output7.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
 var loadFile8 = function(event){

  var output8 =document.getElementById('output8');
  output8.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
 var loadFile9 = function(event){

  var output9 =document.getElementById('output9');
  output9.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
 var loadFile10 = function(event){

  var output10 =document.getElementById('output10');
  output10.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
<script>
   
   var d = new Date()
   var yr = d.getFullYear();

   var c_date =yr;
   document.getElementById("date").value=c_date; 
</script>

</body>

</html> 