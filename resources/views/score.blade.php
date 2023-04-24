<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/score.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 
    <title>ST ROSE COLLEGE EDUCATIONAL FOUNDATION INC. USER PROFILE</title>
 
    <style>  


input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button{
  -webkit-appearance:none;
  margin:0;
}




</style>
<body>
<!--header-->

<section id="header">
    <div class="header container">
           <div class="nav-bar">
            <div class="brand">
            <a href="#hero"><img src="/images/LSRC.png" alt="Logo of St. Rose"class="spinning"><a href="#hero"><h1>ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC.</h1></a>
            </div>
           <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
             <ul>
             <li> <a href="{{ url('judgegetcandidates/')}}" data-after="BACK">BACK TO CANDIDATES</a></li>
              
                <li><a href="{{ url('judgeprofile/')}}" data-after="HOME">HOME</a></li>

             </ul>
           </div>
        </div>
    </div>


</section><br><br>


<!-- end header-->
<!--hero--> 
<section id="hero"><br><br>
<h2>CANDIDATES SCORE</h2>

<div class="hero_container">

  <div class="box1">
   

    @if(Session::has('success'))
        <div class="alert alert-sucess msg">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger msg">{{Session::get('fail')}}</div>
        @endif
      
    <form action="/savescore" method="post">
    @csrf
    
    <input type="hidden" name="judge"  class="scoring" value="{{$student->Name}}">      
    <input type="hidden" name="gender" value="{{$data['gender']}}">
  
    <input type="hidden" name="id" value="{{$data['id']}}">

      <div class="user-details">
        
        <div class="input-box">
        <img class="imgprof" src="{{asset('images/'.$data->image)}}" alt="user picture" id="output"/>
        <label><span class="label">{{$data->candino}}</span> {{$data->namecan}} </label> 
            <input type="hidden" name="namecan" value="{{$data['namecan']}}">

       
        <br>

        <span class="details">SELECT CRITERIA</span>
        <select name="cretieria" class="form-select" aria-label="Default select example" required>
        @foreach($scores as $scores) 
         <option value="{{$scores->creteriascores}}">{{$scores->creteriascores}}</option>
         
         @endforeach 
     </select>
     <span class="details">SCORE HERE</span>
     <input type="number" name="judgescore"  class="scoring" value="0">      
       </div>        
      </div>  
      <div class="button">   
        <input type="submit" class="btn btn-primary editbtn1" value="SAVE">
        
        </div>
    
  </form>
    </div>
  
  
  <div class="box">
  <div class="table-reponsive" id="no-more-tables1">
   
   <h3>YOUR SCORES</h3>
     <table id="datatable"   class="table bg-white" >
         <thead align="center" class="bg-dark text-light" >
           <tr >
           <th >CANDIDATE</th>
           <th >CRITERIA</th>
           <th >PERCENT</th>
           <th >SCORE</th>
           <th >TASK</th>
   
   
            
           </tr>
         </thead>
         @if(count($creteris) > 0)
                  @foreach($creteris as $creteris) 
         <tbody align="center">
           <tr>
         
           <td class="CANDIDATE" data-title="CANDIDATE:"> {{$creteris['cricandidates']}}</td>
             <td class="CRITERIA" data-title="CRITERIA"> {{$creteris['creteria']}}</td>
             <td class="PERCENT" data-title="PERCENT"> {{$creteris['numberoption']}}%</td>
   
             <td class="SCORE" data-title="SCORE:"> {{$creteris['scores']}}</td>
             <td align="center"  data-title="TASK" class="task" >
             <a href="{{ url('deletecri/' .$creteris['id'])}}"type="button" class="btn btn-danger editbtn" >CANCEL</a>&nbsp&nbsp
             </td>
       
        
           </tr>
           
         </tbody>
         @endforeach
         @else
         <tr>
           <td align="center" colspan= "8">NO SUBMITTED SCORES</td>
         </tr>
         @endif
         
       </table>
   
   
   
   <!-- sumbit scoressssssssssssssssssssssssssss maleeeesss asdddddddddddddddddddddddddddddd-->
   
       <form action="/submitscores" method="post">
       @csrf
       @if(Session::has('success1'))
           <div class="alert alert-sucess msg1">{{Session::get('success1')}}</div>
           @endif
           @if(Session::has('fail1'))
           <div class="alert alert-danger msg1">{{Session::get('fail1')}}</div>
           @endif
       <input type="hidden" name="judge"  class="scoring" value="{{$student->Name}}">      
     
       <input type="hidden" name="id" value="{{$data['id']}}">
         <div class="user-details">
           
           <div class="input-box">
           
       <input type="hidden" name="gender" value="{{$data['gender']}}">
         
           <input type="hidden" name="namecno" value="{{$data['candino']}}">
   
               <input type="hidden" name="namecan" value="{{$data['namecan']}}">
   
          
           <br> 
         <div class="button">   
         <input type="submit" class="btn btn-primary editbtnsubmit" value="SUBMIT SCORES">
   
           
           </div>
   
     </form>
   
     </div>
   
      
       </div>
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