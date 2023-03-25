<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/event.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<title>EVENT</title>



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
                <li><a href="#tablead" data-after="CANDIDATES">CANDIDATES</a></li>
                <li><a href="#hero1" data-after="JUDGE">JUDGE</a></li>
                <li><a href="#tablead1" data-after="CRITERIA">CRITERIA</a></li>

                <li><a href="{{ url('admin/')}}" data-after="HOME">HOME</a></li>
             </ul>
           </div>
        </div>
    </div>
   

</section> 
<section id="tablead">
<br><br><br><br>

<button type="button" class="btn btn-primary btnadd" data-bs-toggle="modal" data-bs-target="#exampleModal">
 ADD CANDIDATES
</button>
<!-- start add modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <img src="/images/LSRC.png" alt="logo of St. rose">&nbsp<h1 class="modal-title fs-5" id="exampleModalLabel">ADD CANDIDATES HERE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('addcandidates-user')}}" class="addform" method="post" >
        @csrf
        <div class="modal-body">
        
         
     
            <div class="mb-3">
            
              <input type="text" class="form-control" name="candino" placeholder="CANDIDATE NO." value="{{old('CANDIDATE NO.')}}" style="width: 100%; height:50px;"required />
            
            </div>
            <div class="mb-3">
            <input type="text" class="form-control"  name="namecan" placeholder="CANDIDATES NAME" value="{{old('namecan')}}"  style="width: 100%; height:50px; "required/>
            </div>
            <div class="mb-3">
            <input type="number" class="form-control"  name="agec" placeholder="AGE" value="{{old('agec')}}"  style="width: 100%; height:50px;" required />
            </div>
            <br>
          <div class="input-box1 mb-3">
          <span class="details1">DEPARTMENT</span>
          <select name="deptc" class="form-select" aria-label="Default select example">
         
              <option value="DCS">DCS</option>
              <option value="EDUCATION">EDUCATION</option>
              <option value="BSBA">BSBA</option>
              <option value="BSA">BSA</option>
              <option value="CRIM">CRIM</option>
          </select>


        
        </div>
        <div class="input-box1 mb-3">
          <span class="details1">GENDER</span>
          <select name="gender" class="form-select" aria-label="Default select example" >
         
              <option value="FEMALE">FEMALE</option>
              <option value="MALE">MALE</option>
              
          </select>
       
         


       
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save User</button>
      </div>
      </div> 
    </form>
    </div>
  </div>
</div>
<h1>CANDIDATES INFORMATION </i></h1><br><br>

<br>
 <div class="container">

 
    <div class="box">

        <div class="title">FEMALE CANDIDATES</div>
            <form method="post" class="join">
                @csrf
                <div class="user-details">
    <section class="bg-ligth p-5">

        <div class="box">

          <div class="table-reponsive" id="no-more-tables">
            <table id="datatable"   class="table bg-white">
              <thead class="bg-dark text-light" >
                 <tr >
                <th  >IMAGE:</th>
                 <th  >NAME:</th>
                <th  >CANDIDATE:</th>
                <th  >DEPARTMENT:</th>
                <th  >EVENT:</th>
                <th  >GENDER:</th>
                 <th  >VOTE:</th>
                 <th  >PLACE:</th>

                 <th  >SCORE:</th>
               <th   colspan="3"  >TASK</th>
                </tr>
              </thead>
              @if(count($females) > 0)
               @foreach($females as $female) 
            <tbody>
                <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$female->image)}}" alt="candidate Picture"></td></td>
          <td  data-title="NAME:">{{$female['namecan']}}</td>
         
          <td class="CANDIDATE" data-title="CANDIDATE:"> {{$female['candino']}}</td>
         
          <td data-title="DEPARTMENT:">{{$female['deptc']}}</td>
          <td class="EVENT" data-title="EVENT:">{{$female['eventc']}}</td>
          <td  class="GENDER" data-title="GENDER:">{{$female['gender']}}</td>
          
          <td  class="TOTAL VOTE" data-title="TOTAL VOTE:">{{$female['vpointsc']}}</td>
          <td  class="SCORE" data-title="SCORE:">{{$female['vscores']}}</td>
          <td  class="CATEGORY" data-title="CATEGORY">{{$female['currentc']}}</td>
         <td class="PLACE" data-title="PLACE:"> {{$female['optionb']}}</td>

          <td align="center"  data-title="TASK" class="task1" style="" >
            <a href="{{ url('editcandidates/' .$female['id'])}}"type="button" class="btn btn-primary editbtn1" >EDIT CANDIDATES</a>&nbsp&nbsp
          
        
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
        <tr >
        <th >IMAGE:</th>
          <th  >NAME:</th>
          <th  >CANDIDATE:</th>
         
          <th  >DEPARTMENT:</th>
          <th  >EVENT:</th>
          <th  >GENDER:</th>
     
          <th  >VOTE:</th>
          <th  >PLACE:</th>

          <th  >SCORE:</th>
          <th>CATEGORY:</th>
          <th   colspan="3"  >TASK</th>
        </tr>
      </thead>
      @if(count($males) > 0)
      @foreach($males as $male) 
      <tbody>
        <tr>
        <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$male->image)}}" alt="candidate Picture"></td></td>
          <td  data-title="NAME:">{{$male['namecan']}}</td>
         
          <td  class="CANDIDATE:" data-title="CANDIDATE"> {{$male['candino']}}</td>
         
          <td data-title="DEPARTMENT:">{{$male['deptc']}}</td>
          <td class="EVENT" data-title="EVENT:">{{$male['eventc']}}</td>
          <td  class="GENDER" data-title="GENDER:">{{$male['gender']}}</td>
      
          <td  class="TOTAL VOTE" data-title="TOTAL VOTE:">{{$male['vpointsc']}}</td>
          <td  class="SCORE" data-title="SCORE:">{{$male['vscores']}}</td>
          <td  class="CATEGORY" data-title="CATEGORY">{{$male['currentc']}}</td>
          <td class="PLACE" data-title="PLACE:"> {{$male['optionb']}}</td>

          
          <td align="center"  data-title="TASK" class="task1" style="" >
          <a href="{{ url('editcandidates/' .$male['id'])}}"type="button" class="btn btn-primary editbtn1" >EDIT CANDIDATES</a>&nbsp&nbsp
        
        
        </td>
        </tr>
      </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "3">ADD CANDIDATES </td>
      </tr>
      @endif
    </table>
  </div>

                </div>
     
</form>
 
    

</div>
</div>
</section> 
<!-- JUDGE SCORESSSS ----------------------------------------><!-- JUDGE SCORESSSS ----------------------------------------><!-- JUDGE SCORESSSS ---------------------------------------->
<!-- JUDGE SCORESSSS ----------------------------------------><!-- JUDGE SCORESSSS ----------------------------------------><!-- JUDGE SCORESSSS ---------------------------------------->
<section id="hero1">
<div class="hero1 container">
<div class="hero1"><br><br><br><br>
<div class="logopage"><img  src="/images/LSRC.png"/>
    <a href="{{ url('getwinner/')}}"type="button" class="btn btn-primary editbtn2" >
      GET RESULTS</a>
      <a href="{{ url('minorawards/')}}"type="button" class="btn btn-primary editbtn2" >
      MINOR AWARDS</a>
   
<div class="box">
        <div class="title">JUDGES</div>
    
            <form enctype='multipart/form-data' action="" method="post" class="form-container">
 
                 @csrf
                 @method('PUT')
                <div class="user-details">
                <section class="bg-ligth p-5">

<div class="box">
     
        </form>
  <div class="table-reponsive" id="no-more-tables1">
    
  <table id="datatable"   class="table bg-white" >
      <thead align="center" class="bg-dark text-light" >
        <tr >
        <th >JUDGE</th>
        
         
          <th >TASK</th>
        </tr>
      </thead>
      @if(count($students) > 0)
      @foreach($students as $student) 
      <tbody align="center">
        <tr>
        <td  data-title="NAME:">{{$student['Name']}}</td>
         
         
          <td align="center"  data-title="TASK" class="task1" style="" >
          <a href="{{ url('viewjudge/' .$student->Name)}}"type="button" class="btn btn-primary editbtn1" >VIEW SCORING</a>&nbsp&nbsp
        
        
        </td>
        </tr>
      </tbody>
      @endforeach
      @else
      <tr>
        <td align="center" colspan= "8">JUDGE NAME NOT FOUND</td>
      </tr>
      @endif
    </table>
  </div>

                </div>
           
 
</div>
</div>
</div>
</section>

<!-- criteriaaa for judgingl ----------------------------------------><!-- criteriaaa for judgingl ---------------------------------------->
<!-- criteriaaa for judgingl ----------------------------------------><!-- criteriaaa for judgingl ---------------------------------------->
<!-- criteriaaa for judgingl ----------------------------------------><!-- criteriaaa for judgingl ---------------------------------------->

<section id="tablead1">
<br><br><br><br>
<button type="button" class="btn btn-primary btnadd1" data-bs-toggle="modal" data-bs-target="#exampleModal1">
 ADD CRITERIA
</button>
<!-- start add modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <img src="/images/LSRC.png"  alt="logo of St. rose">&nbsp<h1 class="modal-title fs-5" id="exampleModalLabel">ADD CRITERIA HERE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('addcriteria-user')}}" class="addform" method="post" >
        @csrf
        <div class="modal-body">
        
        <div class="input-box1 mb-3">
          <span class="details1">CRITERIA FOR JUDGING</span>
          <select name="deptc" class="form-select" aria-label="Default select example">
         
              <option value="MAIN EVENT">MAIN EVENT</option>
              <option value="MINOR AWARDS">MINOR AWARDS</option>
              
          </select>


        
        </div>
        <input type="hidden" class="form-control" name="total" placeholder="ENTER CRITERIA" value="{{$total}}"/>
            
            <div class="mb-3">
            <span class="details1">CRITERIA</span>
              <input type="text" class="form-control" name="creteria" placeholder="ENTER CRITERIA" value="{{old('creteria')}} "  style="width: 100%; height:50px;"required />
            
            </div>
            <div class="mb-3">
            <span class="details1">CRITERIA PERCENTAGE</span>
            <input type="number" class="form-control"  name="percent" placeholder="ENTER PERCENTAGE" value="0"  style="width: 100%; height:50px; "required/>
            </div>
           
      
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Criteria</button>
      </div>
      </div> 
    </form>
    </div>
  </div>
</div>
<h1> {{$announcement->event}} </i></h1><br><br>



 <div class="container">


 <div class="box">
   @if(Session::has('success'))
             <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
             @if(Session::has('fail'))
             <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif   
      @csrf
        <div class="title">CRITERIA FOR THIS EVENT</div>
            <form enctype='multipart/form-data' action="" method="post" class="form-container">
 
                 @csrf
                 @method('PUT')
                <div class="user-details">
                <section class="bg-ligth p-5">

<div class="box">

  <div class="table-reponsive" id="no-more-tables1">
  <table id="datatable"   class="table bg-white" >
      <thead align="center" class="bg-dark text-light" >
        <tr >
        <th >CRITERIA</th>
          <th  >PERCENTAGE</th>
          <th  >EVENT</th> 
       
         
          <th >TASK</th>
        </tr>
      </thead>
      @if(count($scores) > 0)
      @foreach($scores as $score) 
      <tbody align="center">
        <tr>
        <td class="CRITERIA" data-title="CRITERIA">{{$score['creteriascores']}}</td>
          <td class="PERCENTAGE" data-title="PERCENTAGE">{{$score['percentscores']}}%</td>
          <td class="EVENT" data-title="EVENT">{{$score['scoreop1']}}</td>
         
          <td align="center"  data-title="TASK" class="task1" style="" >
          <a href="{{ url('editcri/' .$score['id'])}}"type="button" class="btn btn-primary editbtn1" >EDIT CRITERIA</a>&nbsp&nbsp
          <a href="{{ url('deleteall/' .$score['id'])}}"type="button" class="btn btn-danger" >DELETE</a>&nbsp&nbsp
        
        
        </td>
        </tr>
      </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "3">NO CRITERIA PLEASE ADD</td>
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