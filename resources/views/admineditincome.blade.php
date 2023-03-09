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
    <title>INCOME INFORMATION</title>
<body>
<img class="logo" src="/images/LSRC.png" alt="ST. ROSE LOGO">
<section id="tablead">


      
     
<!-- end update modal -->
<div class="container"><br>

  <h1 >{{$req->cashier}}</h1>
 
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
  <form class="form-floating">
  <input type="text" class="form-control " id="floatingInputValue" placeholder="CASHIER INCOME"  value="TOTAL INCOME {{$search1}}" readonly>

</form><br>
<div class="form-search">

<form action="{{route('search4')}}" method="get">
@csrf   
   <div class="input-group">
    <input type="search" name="search4" class="form-control" placeholder="SEARCH RECEIPT" > 
    <input class="form-control" type="hidden" name="cashier" value="{{$req->cashier}}" >
    <input class="form-control" type="hidden" name="amount" value="{{$search1}}" >
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
        <th >CASHIER NAME</th>
          <th>COSTUMER</th>
          <th>EVENT</th>
          <th>YEAR</th>
         
          <th>RECEIPT</th>
          <th>AMOUNT </th>
          <th>POINTS </th>
          <th colspan="2">TASK</th>
        </tr>
      </thead>
      @foreach($incomes as $income) 
      @csrf 
      <tbody>
        <tr>
          <td  data-title="CASHIER NAME">{{$income['cashier']}}</td>
          <td class="roles" data-title="COSTUMER">{{$income['costumer']}}</td>
         
          <td data-title="EVENT">{{$income['events']}}</td>
          <td class="votes" data-title="YEAR">{{$income['date']}}</td>
          <td  class="stats" data-title="RECEIPT">{{$income['officialr']}}</td>
          <td  class="stats" data-title="AMOUNT">{{$income['amount']}}</td>
          <td  class="stats" data-title="POINTS">{{$income['points']}}</td>
        
          <td align="center"  data-title="TASK"class="task"style="width:200px;" >
           
           <a  href="{{ url('usereditincomeadmin/' .$income->id)}}" class="btn btn-primary">
            EDIT INCOME</a>
        
        
        </td>
        
        </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>

<a href="{{ url('admin/')}}" type="button" class="btn btn-primary home">HOME</a>
<a href="{{ url('income/')}}" type="button" class="btn btn-primary home">BACK</a>
</section>



</div>


</div>
</div>
</section>



</body>

</html>