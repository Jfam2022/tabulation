<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/judge.css')}}" rel="stylesheet">
     <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
    <title>ST ROSE COLLEGE EDUCATIONAL FOUNDATION INC. CANDIDATES INFORMATION</title>
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
              
                <li><a href="{{ url('judgeprofile/')}}" data-after="HOME">HOME</a></li>
             </ul>
           </div>
        </div>
    </div>


</section><br><br>


<!-- end header-->
<!--hero--> 
<section id="hero"><br><br><br>
<h2  >CANDIDATES INFORMATION</h2>

<div class="hero_container">

  <div class="box1">
   

  <div class="title">FEMALE CANDIDATE</div>
      <h3 style="text-align:center; color:crimson">COUNT: {{$countingFEMALE}}</h3>
    <form method="post" class="join">
                @csrf
        <div class="user-details">
        @if(count($females) > 0)
               @foreach($females as $female) 
          <div class="table-reponsive" id="no-more-tables">
            <br>
            <table id="datatable"   class="table bg-white">
              <thead class="bg-dark text-light" >
                 <tr >
                 <th  >IMAGE</th>
                 <th  >NAME</th>
                 <th  >NO.</th>
                 <th  >GENDER</th>
                 <th   colspan="2"  >TASK</th>

                </tr>
              </thead>
          
            <tbody>
                <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$female->image)}}" alt="candidate Picture"></td></td>
          <td style="padding-top:30px" data-title="NAME:">{{$female['namecan']}}</td>
          <td style="padding-top:30px"  class="CANDIDATE" data-title="CANDIDATE:"> {{$female['candino']}}</td>
          <td style="padding-top:30px"  class="CANDIDATE" data-title="GENDER:"> {{$female['gender']}}</td>

    
          <td style="padding-top:30px"  align="center"  data-title="TASK" class="task1" style="" >
            <a href="{{ url('givescore/' .$female['id'])}}"type="button" class="btn btn-primary editbtn1" >SCORE</a>&nbsp&nbsp

        </td>
        </tr>
        </tbody>
       
      @endforeach
      @else
      <tr  >
        <td   colspan= "32">NO CANDIDATES</td>
      </tr>
      @endif

        </table><br><br>
        <span class="tlinks">
    {{$females->links()}}
</span>
       </div> 
          <!-- start mr and ms asdddddddddddddddddddddddddddddd-->
    </div> 
  
</form>

  </div>

  
  
  <div class="box">
  <div class="title">MALE CANDIDATE</div>
    <h3 style="text-align:center; color:crimson">COUNT: {{$countingMALE}}</h3>

    <form method="post" class="join">
                @csrf
        <div class="user-details">
        @if(count($males) > 0)
               @foreach($males as $male) 
          <div class="table-reponsive" id="no-more-tables">
            <br>
            <table id="datatable"   class="table bg-white">
              <thead class="bg-dark text-light" >
                 <tr >
                 <th  >IMAGE</th>
                 <th  >NAME</th>
                 <th  >NO.</th>
                 <th  >GENDER</th>
                 <th   colspan="2"  >TASK</th>
                </tr>
              </thead>
          
            <tbody>
                <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$male->image)}}" alt="candidate Picture"></td></td>
          <td style="padding-top:30px"   data-title="NAME:">{{$male['namecan']}}</td>
          <td style="padding-top:30px"  class="CANDIDATE" data-title="CANDIDATE:"> {{$male['candino']}}</td>
          <td  style="padding-top:30px" class="CANDIDATE" data-title="GENDER:"> {{$male['gender']}}</td>
    
          <td style="padding-top:30px"  align="center"  data-title="TASK" class="task1"  >
            <a href="{{ url('givescore/' .$male['id'])}}"type="button" class="btn btn-primary editbtn1" >SCORE</a>&nbsp&nbsp

        </td>
        </tr>
        </tbody>
       
      @endforeach
      @else
      <tr>
        <td  colspan= "3">NO CANDIDATES</td>
      </tr>
      @endif
      
        </table><br><br>
        <span class="tlinks">
    {{$males->links()}}
    </span>
       </div> 
          <!-- start mr and ms asdddddddddddddddddddddddddddddd-->
    </div> 
  
</form>
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