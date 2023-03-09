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
  font-size: 12px;
  font-weight:500;
  position:relative;

}
.container .title::before{
  content:'';
  position:absolute;
  left: 0;
  bottom: 0;
  height: .1rem;
  width: 30px;
  background:#0d6efd;
}
.container form .user-details{
  display:flex;
  flex-wrap:wrap;
  justify-content:space-between;

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
  .loadingstation{
    font-weight: bolder;
  }
  .Cashier{
    font-weight: bolder;
  }
  .Cashiername{
    font-weight: bolder;
    color:crimson;
  }
  .announcement
  {
    font-weight: bolder;
    
  }
  .alert {
    position: absolute;
    font-weight: 700;
   font-size:.9rem;
    color: crimson;
   
   border: 2px solid crimson;
   padding: 3px 6px;
   margin-left:120px;

 
    
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  -webkit-appearance:none;
  margin:0;
}
.button2{
    float:right;
  }
  .button1{
    float:left;
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
    margin-top:30px;
    max-height:260px;
    overflow-y:scroll;
  }
  .button2{
    float:right;
  }
  .button1{
    float:left;
  }
@media only screen and (max-width: 570px){
  .btn-primary{
    font-size:10px;
  }
  .button2{
    float:right;
  }
  .button1{
    float:left;
  }
}
  
 
}

</style>
</head>
<title>EDIT THE LOAD OF COSTUMER </title>
<body onload="aaaa();">
<div class="container">
<span class="loadingstation">EDIT THE LOAD OF COSTUMER </span><br>
@if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif  
 <div class="title" name="station"></div> 
  <form action="/editincomeadmin" method="post">
  
      @csrf
    

      <input type="hidden" name="officialr" value="{{$EDITINCOMEUSER['officialr']}}">

      
        <input type="hidden" name="id" value="{{$EDITINCOMEUSER['id']}}">
        <input type="hidden" name="pointsiminus" value="{{$EDITINCOMEUSER['points']}}">

          <div class="user-details">
            <div class="input-box">
              <span class="details">CASHIER NAME</span>
              <input type="text" name="cashier" placeholder="Enter Your Full Name" value="{{$EDITINCOMEUSER['cashier']}}" readonly>
            </div>
           
            
            <div class="input-box">
              <span class="details">Email Costumer</span>
              <input type="text" name="email"  placeholder="Enter Your Email" value="{{$EDITINCOMEUSER['costumer']}}" readonly>
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
           
              <input class="form-control" type="text" type="text" name="total1" id="total1" readonly >
            </div>
    
           
          </div>
        
          <div class="button">
            <input type="submit" value="SAVE">
          </div>
          <div class="button1">
          <a href="/admin" type="button" class="btn btn-primary">BACK TO HOME</a>
          </div>
          <div class="button2">
          <a href="/income" type="button" class="btn btn-primary">BACK TO INCOME</a>
          </div>
    
      </form>
    </div>
    <script type="text/javascript">
      function aaaa(){
     
        var amount = document.getElementById("amount").value;
        var points = document.getElementById("points").value;
        
        var total1 = parseFloat(amount)/parseFloat(points);
    
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