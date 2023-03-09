<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/styleadmin.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <title>ADMIN PROFILE</title>
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
                <li><a href="{{ url('announcement/')}}" data-after="ANNOUNCEMENT">ANNOUNCEMENT</a></li>
                <li><a href="{{ url('adminvote/')}}" data-after="VOTE RESULTS">VOTE RESULTS</a></li>
                <li><a href="{{ url('event/')}}" data-after="EVENT">EVENT</a></li>
                <li><a href="{{ url('income/')}}" data-after="INCOME">INCOME</a></li>
                <li><a href="{{ url('adminoldcandidates/')}}" data-after="OLDCANDIDATES">OLD CANDIDATES</a></li>
                <li><a href="{{ url('logout/')}}" data-after="LOGOUT">LOG OUT</a></li>
             </ul>
           </div>
        </div>
    </div>
   

</section> 
<section id="tablead">
<!-- Button trigger modal --> <br><br><br><br>
<!-- start add modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <img src="/images/LSRC.png" alt="logo of St. rose">&nbsp<h1 class="modal-title fs-5" id="exampleModalLabel">ADD USERS HERE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('add-user')}}" class="addform" method="post" >
        @csrf
      <div class="modal-body">
     
            <div class="mb-3">
            
              <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{old('name')}}" style="width: 100%; height:50px;"/>
            
            </div>
            <div class="mb-3">
            <input type="email" class="form-control"  name="email" placeholder="Email" value="{{old('email')}}"  style="width: 100%; height:50px;"/>
            </div>
            <div class="input-field">
            <input type="password" class="form-control"  name="password" placeholder="Password"  style="width: 100%; height:50px;"/>
           
          </div><br>
          <div class="input-box1 mb-3">
          <span class="details1">Status</span>
          <select name="status" class="form-select" aria-label="Default select example" required>
         
              <option value="VERIFIED">VERIFIED</option>
              <option value="Not Verified">Not Verified</option>
          </select>


       
        </div>
        <div class="input-box1 mb-3">
          <span class="details1">Status</span>
          <select name="role" class="form-select" aria-label="Default select example" required>
         
              <option value="STUDENT">STUDENT</option>
              <option value="JUDGE">JUDGE</option>
              <option value="FOR LOAD">FOR LOAD</option>
              <option value="MASTER CEREMONY">MASTER CEREMONY</option>
              <option value="ADMIN">ADMIN</option>
             
          </select>
       
         


       
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save User</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- end add modal -->
<!-- start update modal asdddddddddddddddddddddddddddddd-->

      
     
<!-- end update modal -->
<div class="container"><br>

  <h1 >USERS INFORMATION</h1>
 
  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @if(\Session::has('success'))
  <div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
  </div>
  @endif
  <button type="button" class="btn btn-primary btnadd"  data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD USERS
</button><div class="form-search">

<form action="{{route('search')}}" method="get">
@csrf   
   <div class="input-group">
    <input type="search" name="search" class="form-control" placeholder="SEARCH EMAIL" > 
    <span class="input-group-prepend">&nbsp&nbsp
      <button text="submit" class="btn btn-primary">Search</button>
    </span>
   </div>
</form>
</div>
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
          <th   colspan="3"  >TASK</th>
        </tr>
      </thead>
      @if(count($students) > 0)
      @foreach($students as $Student) 
      <tbody>
        <tr>
        <td  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$Student->avatar)}}" alt="No Picture"></td></td>
          <td  data-title="NAME">{{$Student['Name']}}</td>
          <td class="roles" data-title="ROLE">{{$Student['role']}}</td>
         
          <td data-title="EMAIL">{{$Student['email']}}</td>
          <td class="votes" data-title="VOTE">{{$Student['vote']}}</td>
          <td  class="stats" data-title="STATUS">{{$Student['status']}}</td>
          <td  data-title="TASK" class="task"style="width:200px;" >
            <a href="{{ url('showup/' .$Student['id'])}}"type="button" class="btn btn-primary editbtn" >EDIT</a>&nbsp&nbsp
            <a  href="{{ url('edit/' .$Student->id)}}" class="btn btn-primary editbtn">CONFIRMATION</a>&nbsp&nbsp
            <a  href="{{ url('showload/' .$Student->id)}}" class="btn btn-primary editbtn">LOAD </a>
        
        
        </td>
        </tr>
      </tbody>
      @endforeach
      @else
      <tr>
        <td colspan= "6">USER NOT FOUND</td>
      </tr>
      @endif
    </table>
  </div>

</section>



</div>

<span class="tlinks">
    {{$students->links()}}
</span>
</div>
</div>
</section>

<script src="{{asset('bootstrap/js/apps.js')}}"></script>

</body>

</html>