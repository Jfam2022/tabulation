<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/income.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    
   
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <title>INFORMATION</title>
<body>
<section id="tablead">


      
     
<!-- end update modal -->
<div class="container"><br>

  <h1 >SCORING INFORMATION</h1>
 
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

<div class="form-search">

<form action="{{route('searchtally')}}" method="get">
@csrf   
   <div class="input-group">
   <input class="form-control" type="hidden" name="Name" value="{{$req->Name}}"  >

    <input type="search" name="searchtally" class="form-control" placeholder="SEARCH CANDIDATE" > 

    <span class="input-group-prepend">&nbsp&nbsp
      <button text="submit" class="btn btn-primary">Search</button>
    </span>
   </div>
</form>
</div>


<section class="bg-ligth p-5">
<h3>TOTAL SCORED: {{$creteriscount}}</h3>
  <div class="table-reponsive" id="no-more-tables">
  <table id="datatable"   class="table bg-white">
   
      <thead class="bg-dark text-light" >
        <tr align="center">
        <th >JUDGE NAME</th>
          <th>CANDIDATE NAME</th>
          <th>OVERALL SCORE</th>
          <th>EVENT</th>
          
          <th   colspan="3"  >TASK</th>
         
      
        </tr>
      </thead>
      @if(count($judges) > 0)
      @foreach($judges as $judges) 
      @csrf 
      <tbody>
        <tr align="center">
          <td  data-title="JUDGE NAME">{{$judges['namejudge']}}</td>
          <td  data-title="CANDIDATE NAME">{{$judges['namecandidates']}}</td>
         
          <td data-title="OVERALL SCORE">{{$judges['percentscores']}}</td>
          <td class="votes" data-title="EVENT">{{$judges['overalltags']}}</td>
          <td align="center"  data-title="TASK" class="task1" style="" >
            <a href="{{ url('showup12/' .$judges['id'])}}"type="button" class="btn btn-primary editbtn1" >VIEW TALLY</a>&nbsp&nbsp

        </td>
         
       
        
         
        
        </td>
        </tr>
      </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "3">NO SCORES SUBMITTED</td>
      </tr>
      @endif
    </table>
  </div>


<a href="{{ url('event/')}}" type="button" class="btn btn-primary home">BACK</a>
</section>



</div>


</div>
</div>
</section>



</body>

</html>