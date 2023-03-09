<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/master.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
   
     <title>WINNERS OF PEOPLE CHOICE AND MINOR AWARDS</title>
<body>
<!--header-->

<section id="header">
    <div class="header container">
           <div class="nav-bar">
            <div class="brand">
            <a href="#hero"><img src="/images/LSRC.png" alt="Logo of St. Rose"   class="spinning"><a href="#hero"><h1>ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC.</h1></a>
            </div>
           <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
            <ul>
             
             <li><a href="{{ url('masterceremony/')}}" data-after="HOME">HOME</a></li>

             </ul>
           </div>
        </div>
    </div>


</section><br><br>


<!-- end header-->
<!--hero--> 
<section id="hero"><br><br>
<H2 style="text-align:center; color:white; margin-top:30px; margin-bottom:20px;">WINNERS INFORMATIONS</H2>

<div class="hero_container">
<div class="box1">
  <br>
<H2 style="text-align:center; color:black;">PEOPLE CHOICE </H2>
  
  <form method="post" class="join">
    <div class="user-details">
   
                @csrf
          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
            <thead class="bg-dark text-light" >
      <tr align="center">
      <th >NAME:</th>
        <th  >CANDIDATE:</th>
        <th  >EVENT:</th>
       
        <th  >SCORE:</th>
      </tr>
      </thead>
    @if(count($voteswinners) > 0)
    @foreach($voteswinners as $voteswinner) 
    <tbody>
      <tr>
      <td  data-title="NAME:">{{$voteswinner['votenamecan']}}</td>
         
         <td class="CANDIDATE" data-title="CANDIDATE:"> {{$voteswinner['votecandino']}}</td>
        
         <td class="EVENT" data-title="EVENT:">{{$voteswinner['voteeventc']}}</td>

         <td style="color:crimson;  font-weight: 900; font-size:2rem; text-align:center;"  class="SCORE" data-title="SCORE:">{{$voteswinner['votevpointsc']}}</td>
   
      </tr>
    </tbody>
    @endforeach
    @else
    <tr>
      <td colspan= "6">NO WINNERS YET</td>
    </tr>
    @endif
  </table>
       </div>
       </div>
   
  </form>
   
  
  
    </div>
    <div class="box">
    <br>
<H2 style="text-align:center; color:black;">MINOR AWARDS </H2>
 
    <form method="post" class="join">
    <div class="user-details">
                @csrf
          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
            <thead class="bg-dark text-light" >
      <tr align="center">
      <th >NAME:</th>
        <th  >EVENT:</th>
        <th  >TAGS:</th>

        <th  >SCORE:</th>

       

     
      </tr>
      </thead>
    @if(count($minorwinners) > 0)
    @foreach($minorwinners as $minorwinner) 
    <tbody>
      <tr>

      <td  data-title="NAME:">{{$minorwinner['votecurrentc']}}</td>
         
        
         <td class="EVENT" data-title="EVENT:">{{$minorwinner['voteoptiona']}}</td>
         <td  data-title="TAGS:">{{$minorwinner['voteoptionb']}}</td>

         <td style="color:crimson;  font-weight: 900; font-size:2rem; text-align:center;"  class="SCORE" data-title="SCORE:">{{$minorwinner['votevscores']}}</td>
   
      </tr>
    </tbody>
    @endforeach
    @else
    <tr>
      <td colspan= "6">NO WINNERS YET</td>
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