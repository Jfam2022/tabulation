<html lang="en">
<head>
<meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
  font-weight: 700;
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

 p{
    color:crimson;
    font-weight: 500;
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
 
    

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  -webkit-appearance: none;
  margin:0;
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
<title>LOADING STATION</title>
<body onload="aaaa();">
<div class="container">
<span class="loadingstation"> LOADING STATION </span><br>
@if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif  
 <div class="title" name="station"></div> 
  <form action="/ed-load" method="post">
  
      @csrf
    

<input class="form-control" type="hidden" name="cashier" id="cashier" value="{{$student->Name}}"  >
       
    <input type="hidden" name="id" value="{{$data['id']}}">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Full Name</span>
          <input type="text" name="costumer" placeholder="Enter Your Full Name" value="{{$data['Name']}}" readonly>
        </div>
       
       
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" name="email"  placeholder="Enter Your Email" value="{{$data['email']}}" readonly>
        </div>
        <div class="input-box">
          <span class="details">CURRENT BALANCE TO VOTE:</span>
          <input  type="number" name="vote" id="vote" value="{{$data['vote']}}" onchange="aaaa();" readonly>
        </div>
        <div class="input-box">
          <span class="details">AMOUNT LOAD </span>  <p> * P3  (three) pesos per vote *</p>
         
          <input class="form-control" type="number"  name="amount" id="amount" value="0" onchange="aaaa();"  >
        </div>
        
        <div class="input-box">
        
          <input class="form-control" type="hidden" name="points" id="points" value="3" onchange="aaaa();" >
        </div>
        <div class="input-box">
          <span class="details">TOTAL BALANCE </span>
          <input class="form-control" type="text" name="total" id="total" readonly >
          <input class="form-control" type="hidden" type="text" name="total1" id="total1" readonly >
        </div>
      <input class="form-control" type="hidden" name="date" id="date" >      
      <input class="form-control" type="hidden" name="events" value="{{$announcement->event1}}" >  
       
       
      </div>
    
      <div class="button">
        <input type="submit" value="SAVE">
      </div>
   
      <a href="/loadingdata" type="button" class="btn btn-primary">SHOW DATA</a>

  </form>
</div>
<script type="text/javascript">
  function aaaa(){
    var vote = document.getElementById("vote").value;
    var amount = document.getElementById("amount").value;
    var points = document.getElementById("points").value;
    
    var total1 = parseFloat(amount)/parseFloat(points);
    var total = parseFloat(vote)+parseFloat(total1);
    document.getElementById("total").value = total;
    document.getElementById("total1").value = total1; 
  }
</script>

<script>
   
   var d = new Date()
   var yr = d.getFullYear();

   var c_date =yr;
   document.getElementById("date").value=c_date; 
</script>
</body>
</html>