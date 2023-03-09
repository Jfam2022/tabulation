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
    <title>INCOME</title>
<body>
<img class="logo" src="/images/LSRC.png" alt="ST. ROSE LOGO">
<section id="tablead">


      
     
<!-- end update modal -->
<div class="container"><br>

  <h1 >INCOME DATABASE</h1>
  <form class="form-floating">
  <input type="text" class="form-control " id="floatingInputValue" placeholder="CASHIER INCOME"  value="CURRENT INCOME {{$totalincome}} pesos" readonly>
 
</form><br>
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

<form action="{{route('search2')}}" method="get">
@csrf   
   <div class="input-group">
    <input type="search" name="search2" class="form-control" placeholder="SEARCH CASHIER NAME" > 
    <span class="input-group-prepend">&nbsp&nbsp
      <button text="submit" class="btn btn-primary">Search</button>
    </span>
   </div>
</form>
</div>
<section class="bg-ligth p-5">

  <div class="table-reponsive" id="no-more-tables">
  <table id="datatable"   class="table bg-white">
      <thead class=" text-light" >
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
      @if(count($incomes) > 0)
      @foreach($incomes as $income) 
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
           
           <a  href="{{ url('admineditincome/' .$income->cashier)}}" class="btn btn-primary">SHOW INCOME </a>
        
        
        </td>
        </tr>
      </tbody>
      @endforeach
      @else
      <tr>
        <td  colspan= "7">NO CUSTOMER</td>
      </tr>
      @endif
        </table>
       </div> 
 
  <span class="tlinks">
    {{$incomes->links()}}
</span>
<a href="{{ url('admin/')}}" type="button" class="btn btn-primary home">HOME</a>

</section>



</div>


</div>
</div>
</section>

<script src="{{asset('bootstrap/js/apps.js')}}"></script>

</body>

</html>