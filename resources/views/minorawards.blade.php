<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/getminor.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<title>GET MINOR AWARDS WINNER</title>



<body>
 
<section id="header">
    <div class="header container1">
           <div class="nav-bar">
            <div class="brand">
            <a href="#hero"><img src="/images/LSRC.png" alt="logo of St. rose"><a href="#hero"><h1>ST. ROSE COLLEGE <span >EDUCATIONAL</span> FOUNDATION INC.</h1></a>
            </div>
           <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
             <ul>
             
                <li><a href="{{ url('event/')}}" data-after="EVENT">BACK TO EVENT</a></li>

                <li><a href="{{ url('admin/')}}" data-after="HOME">HOME</a></li>
             </ul>
           </div>
        </div>
    </div>
   

</section> 
<section id="tablead">
<br><br><br><br><br><br><br>

<!-- start add modal -->

<h1 >GET MINOR AWARDS WINNER</h1><br><br>


<div class="table-reponsive" id="no-more-tables2">
 <h3>GET FEMALE WINNER</h3>
     <table id="datatable1"   class="table bg-white" >
         <thead align="center" class="bg-dark text-light" >
           <tr >
           <th >CRITERIA</th>
           <th >TAGS</th>
           <th >EVENT</th>
           <th >TASK</th>
   
   
            
           </tr>
         </thead>
         @if(count($scores) > 0)
                  @foreach($scores as $scores) 
         <tbody align="center">
           <tr>
         
           <td class="CRITERIA" data-title="CRITERIA:"> {{$scores['creteriascores']}}</td>
             <td class="TAGS" data-title="TAGS"> {{$scores['scoreop1']}}</td>
             <td class="EVENT" data-title="EVENT"> {{$scores['scoreop2']}}</td>
   
             <td align="center"  data-title="TASK" class="task"style="width:100px;" >
             <a href="{{ url('GETMINORWIN/' .$scores['id'])}}"type="button" class="btn btn-primary editbtn" >GET RESULTS</a>&nbsp&nbsp
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

       <div class="table-reponsive" id="no-more-tables2">
       <h3>GET MALE WINNER</h3>
 
     <table id="datatable1"   class="table bg-white" >
         <thead align="center" class="bg-dark text-light" >
           <tr >
           <th >CRITERIA</th>
           <th >TAGS</th>
           <th >EVENT</th>
           <th >TASK</th>
   
   
            
           </tr>
         </thead>
         @if(count($malescores) > 0)
                  @foreach($malescores as $malescore) 
         <tbody align="center">
           <tr>
         
           <td class="CRITERIA" data-title="CRITERIA:"> {{$malescore['creteriascores']}}</td>
             <td class="TAGS" data-title="TAGS"> {{$malescore['scoreop1']}}</td>
             <td class="EVENT" data-title="EVENT"> {{$malescore['scoreop2']}}</td>
   
             <td align="center"  data-title="TASK" class="task"style="width:100px;" >
             <a href="{{ url('maleminor/' .$malescore['id'])}}"type="button" class="btn btn-primary editbtn" >GET RESULTS</a>&nbsp&nbsp
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
   
 <div class="container">

 <div class="box">


    <div class="box">
    @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
        <div class="title">WINNER OF MINOR AWARDS</div>
            <form method="post" class="join">
                @csrf
                <div class="user-details">
    <section class="bg-ligth p-5">

        <div class="box">

          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
            
              @if(count($minorawards) > 0)
               @foreach($minorawards as $minoraward) 
            <tbody>
                <tr>
     
         
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$minoraward['votecurrentc']}}</td>
          <td  data-title="AWARDS:">{{$minoraward['voteoptionb']}}</td>
          <td class="EVENT" data-title="EVENT:">{{$minoraward['voteoptiona']}}</td>
          <td style="color:crimson;  font-weight: 900; font-size:2rem;"  class="SCORE" data-title="SCORE:">{{$minoraward['votevscores']}}</td>
         
        </tr>
        </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "4">NO CANDIDATES</td>
      </tr>
      @endif

     

        </table>
       </div>

    </section>

   
   
 
                </div>
 
            </form>
    </div>
<!-- end join asdddddddddddddddddddddddddddddd-->
<!-- start mr and ms asdddddddddddddddddddddddddddddd-->



<!-- end update modal asdddddddddddddddddddddddddddddd-->

  
</div>
</section> 

<script src="{{asset('bootstrap/js/apps.js')}}"></script>
<script>
 var loadFile5 = function(event){

  var output5 =document.getElementById('output5');
  output5.src = URL.createObjectURL(event.target.files[0]);
 };
</script>
</body>

</html> 