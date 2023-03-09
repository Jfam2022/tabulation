<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/getwinner.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<title>GET WINNERS</title>



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
<br><br><br><br>

<!-- start add modal -->
<br><br><br>
<h1 >WINNERS INFORMATION</i></h1>


 <div class="container">

 
    <div class="box">
    @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
        <div class="title">FEMALE CANDIDATES</div>
            <form method="post" class="join">
                @csrf
                <div class="user-details">
    <section class="bg-ligth p-5">

        <div class="box">

          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
            
              @if(count($females) > 0)
               @foreach($females as $female) 
            <tbody>
                <tr> <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$female->image)}}" alt="candidate Picture"></td></td>
      
        <td  data-title="NAME:">{{$female['namecan']}}</td>
         
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$female['candino']}}</td>
         
          <td class="EVENT" data-title="EVENT:">{{$female['eventc']}}</td>
          <td class="TAGS" data-title="TAGS:">{{$female['optionb']}}</td>

          <td style="color:crimson;  font-weight: 900; font-size:2rem;"  class="SCORE" data-title="SCORE:">{{$female['vscores']}}</td>
          <td align="center"  data-title="TASK" class="task1" style="" >
            <a href="{{ url('updatetop/' .$female['id'])}}"type="button" class="btn btn-primary editbtn1" >GET TOP 5</a>&nbsp&nbsp
            <a href="{{ url('updatewinners/' .$female['id'])}}" type="button" class="btn btn-primary editbtn1" >GET TOP 3</a>&nbsp&nbsp
          
        
        
        </td>
        </tr>
        </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "3">NO CANDIDATES</td>
      </tr>
      @endif

     

      @if(count($voteswinnerFs) > 0)
               @foreach($voteswinnerFs as $voteswinnerF) 
            <tbody>
                <tr>
        <td  data-title="NAME:">{{$voteswinnerF['namecan']}}</td>
         
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$voteswinnerF['candino']}}</td>
         
          <td class="EVENT" data-title="EVENT:">{{$voteswinnerF['eventc']}}</td>

          <td style="color:crimson;  font-weight: 900; font-size:2rem;"  class="TAGS" data-title="TAGS:">{{$voteswinnerF['currentc']}}</td>
        
        </tr>
        </tbody>
        @endforeach
      @else
      <tr>
        <td  colspan= "3">NO VOTE WINNER YET</td>
      </tr>
      @endif
        </table>
        </table>
       </div>

    </section>

   
   
 
                </div>
 
            </form>
    </div>
<!-- end join asdddddddddddddddddddddddddddddd-->
<!-- start mr and ms asdddddddddddddddddddddddddddddd-->



<!-- end update modal asdddddddddddddddddddddddddddddd-->

    <div class="box">
        <div class="title">MALE CANDIDATES</div>
            <form enctype='multipart/form-data' action="" method="post" class="form-container">
 
                 @csrf
                 @method('PUT')
                <div class="user-details">
                <section class="bg-ligth p-5">

<div class="box">

  <div class="table-reponsive" id="no-more-tables">
  <table id="datatable"   class="table bg-white">
      <thead class="bg-dark text-light" >
     
      @if(count($males) > 0)
      @foreach($males as $male) 
      <tbody>
        <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$male->image)}}" alt="candidate Picture"></td></td>
      
        <td  data-title="NAME:">{{$male['namecan']}}</td>
         
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$male['candino']}}</td>
         
          <td class="EVENT" data-title="EVENT:">{{$male['eventc']}}</td>
          <td class="TAGS" data-title="TAGS:">{{$male['optionb']}}</td>

          <td style="color:crimson;  font-weight: 900; font-size:2rem;" class="SCORE" data-title="SCORE:">{{$male['vscores']}}</td>
          <td align="center"  data-title="TASK" class="task1" style=" margin:10px" >
            <a href="{{ url('updatetop/' .$male['id'])}}" type="button" class="btn btn-primary editbtn1" >GET TOP 5</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
           <a href="{{ url('updatewinners/' .$male['id'])}}" type="button" class="btn btn-primary editbtn1" >GET TOP 3</a>&nbsp&nbsp
          
        
        </td>
        </tr>
      </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "3">NO CANDIDATES</td>
      </tr>
      @endif

     

      @if(count($voteswinnerMs) > 0)
               @foreach($voteswinnerMs as $voteswinnerMs) 
            <tbody>
                <tr>
        <td  data-title="NAME:">{{$voteswinnerMs['namecan']}}</td>
         
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$voteswinnerMs['candino']}}</td>
         
          <td class="EVENT" data-title="EVENT:">{{$voteswinnerMs['eventc']}}</td>
          <td style="color:crimson;  font-weight: 900; font-size:2rem;"  class="TAGS" data-title="TAGS:">{{$voteswinnerMs['currentc']}}</td>
        
        </tr>
        </tbody>
        @endforeach
      @else
      <tr>
        <td  colspan= "3">NO VOTE WINNER YET</td>
      </tr>
      @endif
    </table>
  </div>

                </div>
     
</form>
 
    

</div>
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