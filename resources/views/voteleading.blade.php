<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/adminvote.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
   
    <title>HIGHEST VOTE</title>

<body>
<!--header-->

<section id="header">
    <div class="header container">
           <div class="nav-bar">
            <div class="brand">
            <a href="#hero"><img src="/images/LSRC.png" alt="Logo of St. Rose"><a href="#hero"><h1>ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC.</h1></a>
            </div>
           <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
             <ul>
             <li><a href="{{ url('adminvote/')}}" data-after="BACK">BACK</a></li>
              
             </ul>
           </div>
        </div>
    </div>


</section><br><br>


<!-- end header-->
<!--hero--> 
<section id="hero"><br><br><br>
<H2 style="text-align:center; color:white; margin-top:10px; margin-bottom:10px;">HIGHEST VOTE</H2>

<div class="hero_container">
<div class="box1">
    <div class="title">FEMALE CANDIDATES</div>
    <form method="post" class="join">
    <div class="user-details">
   
                @csrf
          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
              <thead class="bg-dark text-light" >
                 <tr >
                <th align="center" >IMAGE</th>
                 <th >NAME</th>
                <th  >NO.</th>
                <th style=" width:100px; text-align:center; min-width: 100px;"  >EVENT</th>
                <th style=" width:100px; text-align:center;"  >TAGS</th>

                <th style=" width:10px; " >VOTES</th>
                <th  align="center" >TASK</th>


                </tr>
              </thead>
              @if(count($females) > 0)
               @foreach($females as $female) 
            <tbody>
                <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$female->image)}}" alt="candidate Picture"></td></td>
          <td style=" padding:15px;"   data-title="NAME:">{{$female['namecan']}}</td>
         
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$female['candino']}}</td>
          <td class="EVENT" data-title="EVENT:">{{$female['eventc']}}</td>
          <td class="EVENT" data-title="EVENT:">{{$female['currentc']}}</td>

         
          <td  style=" padding:15px; font-weight: 900; font-size: 1.5rem; color:crimson"  data-title="TOTAL VOTES:">{{$female['vpointsc']}}</td>
   <td align="center"  data-title="TASK">
   <a  href="{{ url('getvotewin/' .$female->id)}}" class="btn btn-primary editbtn">UPDATE</a>&nbsp&nbsp
          
        
       
        
        </td>
        </tr>
        </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "3">ADD CANDIDATES</td>
      </tr>
      @endif
        </table>
       </div>
       </div>
   
  </form>
   
  
  
    </div>
    <div class="box">
  <div class="title">MALE CANDIDATES</div>

    <form method="post" class="join">
    <div class="user-details">
                @csrf
          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
              <thead class="bg-dark text-light" >
                 <tr >
                <th align="center" >IMAGE</th>
                 <th   >NAME</th>
                <th  >NO.</th>
             
                <th style="  text-align:center; min-width: 100px;"  >EVENT</th>
                <th style=" width:100px; text-align:center;"  >TAGS</th>

                <th style=" width:10px; " >VOTE</th>
                <th  align="center">TASK</th>
                </tr>
              </thead>
              @if(count($males) > 0)
               @foreach($males as $male) 
            <tbody>
                <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$male->image)}}" alt="candidate Picture"></td></td>
        <td style=" padding:15px;"   data-title="NAME:">{{$male['namecan']}}</td>
         
         <td class="CANDIDATE" data-title="CANDIDATE:"> {{$male['candino']}}</td>
         <td class="EVENT" data-title="EVENT:">{{$male['eventc']}}</td>
         <td class="EVENT" data-title="EVENT:">{{$male['currentc']}}</td>
        
         <td  style=" font-weight: 900; font-size: 1.5rem;  color:crimson"  data-title="TOTAL VOTES:">{{$male['vpointsc']}}</td>
  <td align="center"  data-title="TASK" style="width:50px; " >
  <a  href="{{ url('getvotewin/' .$male->id)}}" class="btn btn-primary editbtn">UPDATE </a>&nbsp&nbsp
         
       
      
       
       </td>
        
       
        
        </td>
        </tr>
        </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "3">ADD CANDIDATES</td>
      </tr>
      @endif
        </table>
       </div>
       </div>
 
</form>
   
  
  
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