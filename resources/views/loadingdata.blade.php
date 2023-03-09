<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/loading.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    
   
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <title>LOADING DATA</title>
<body>
<img class="logo spinning" src="/images/LSRC.png" alt="ST. ROSE LOGO">
<section id="tablead">


      
     
<!-- end update modal -->
<div class="container"><br>
  <h1 >USERS INFORMATION</h1>
 
<div class="form-search">

<form action="{{route('search1')}}" method="get">
@csrf   
   <div class="input-group">
    <input type="search" name="search1" class="form-control" placeholder="SEARCH EMAIL" > 
    <span class="input-group-prepend">&nbsp&nbsp
      <button text="submit" class="btn btn-primary">Search</button>
    </span>
   </div>
</form>
</div><br><br><br>
<section class="bg-ligth p-5">

  <div class="table-reponsive" id="no-more-tables">
  <table id="datatable"   class="table bg-white">
      <thead class="bg-dark text-light" >
        <tr align="center">
        <th >IMAGE</th>
          <th  >NAME</th>
          <th  >ROLE</th>
         
          <th  >EMAIL</th>
          <th  >VOTE</th>
          <th  >STATUS</th>
          <th  >TASK</th>
        </tr>
      </thead>
      @foreach($students as $Student) 
      <tbody>
        <tr>
        <td  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$Student->avatar)}}" alt="No Picture"></td></td>
          <td  data-title="NAME">{{$Student['Name']}}</td>
          <td class="roles" data-title="ROLE">{{$Student['role']}}</td>
         
          <td data-title="EMAIL">{{$Student['email']}}</td>
          <td class="votes" data-title="VOTE">{{$Student['vote']}}</td>
          <td  class="stats" data-title="STATUS">{{$Student['status']}}</td>
          <td align="center"  data-title="TASK"class="task"style="width:300px;" >
           <a  href="{{ url('showload1/' .$Student->id)}}" class="btn btn-primary">ADD LOAD </a>
        
        
        </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
  <span class="tlinks">
    {{$students->links()}}
</span>
<br>
<a href="{{ url('loadingprofile/')}}" type="button" class="btn btn-primary home">HOME</a>

</section>



</div>


</div>
</div>
</section>

<script src="{{asset('bootstrap/js/apps.js')}}"></script>

</body>

</html>