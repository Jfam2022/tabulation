<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('bootstrap/css/oldc.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
   
    <title>ST ROSE COLLEGE EDUCATIONAL FOUNDATION INC. VOTE NOW</title>
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
             <li><a href="{{ url('dashboard/')}}" data-after="HOME">HOME</a></li>
             </ul>
           </div>
        </div>
    </div>


</section><br><br>


<!-- end header-->
<!--hero--> 
<section id="hero"><br><br>
<H2 style="text-align:center; color:white; margin-top:25px; margin-bottom:10px;">SUPPORT YOUR CANDIDATES</H2>

<div class="hero_container">
<div class="box1">
  <form method="post" class="join">
    <div class="user-details">
   
                @csrf
          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
              <thead class="bg-dark text-light" >
                 <tr >
                 <th align="center" >IMAGE:</th>
                 <th   >NAME:</th>
                <th  >NO.:</th>
                <th  >DEPT:</th>
                <th  >EVENT:</th>
                <th   colspan="1"  >VOTE</th>
                </tr>
              </thead>
              @if(count($females) > 0)
               @foreach($females as $female) 
            <tbody>
                <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$female->image)}}" alt="candidate Picture"></td></td>
          <td style=" text-align:center; padding:20px; width:100%;"   data-title="NAME:">{{$female['namecan']}}</td>
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$female['candino']}}</td>
          <td data-title="DEPARTMENT:">{{$female['deptc']}}</td>
          <td class="EVENT" style="width:100%;"  data-title="EVENT:">{{$female['eventc']}}</td>
          <td align="center"  data-title="TASK" style="width:50px; padding:15px;" >
          <a href="{{ url('addvote/' .$female['id'])}}"type="button" class="btn btn-primary " >VOTE</a>&nbsp&nbsp
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
       <span class="tlinks">
    {{$females->links()}}
  </span>
  </form>
   
  
  
    </div>
    <div class="box">
 
    <form method="post" class="join">
    <div class="user-details">
                @csrf
          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
              <thead class="bg-dark text-light" >
                 <tr >
                 <th align="center" >IMAGE:</th>
                 <th   >NAME:</th>
                <th  >NO.:</th>
                <th  >DEPT:</th>
                <th  >EVENT:</th>
                <th   colspan="1"  >VOTE</th>
                </tr>
              </thead>
              @if(count($males) > 0)
               @foreach($males as $male) 
            <tbody>
                <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$male->image)}}" alt="candidate Picture"></td></td>
        <td style=" text-align:center; padding:20px; width:100%;"data-title="NAME:">{{$male['namecan']}}</td>
         
         <td class="CANDIDATE" data-title="CANDIDATE:"> {{$male['candino']}}</td>
         <td data-title="DEPARTMENT:">{{$male['deptc']}}</td>
         <td style="width:100%;"  class="EVENT">{{$male['eventc']}}</td>
        
          <td align="center"  data-title="TASK" style="width:50px; padding:15px;" >
 
          <a href="{{ url('addvote/' .$male['id'])}}"type="button" class="btn btn-primary " >VOTE</a>&nbsp&nbsp
          
        
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
       <span class="tlinks">
    {{$males->links()}}
</span>
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