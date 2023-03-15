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


<img class="logo spinning" src="/images/LSRC.png" alt="ST. ROSE LOGO">
<section id="tablead">


      
     
<!-- end update modal -->
<div class="container"><br>
  <h1 >INCOME DATABASE</h1>
  <form class="form-floating">
  <input type="text" id="floatingInputValue" placeholder="CASHIER INCOME"  value="CURRENT INCOME {{$totalincome}} PESOS" readonly>

</form><br>
<div class="form-search">

<form action="{{route('search2')}}" method="get">
@csrf   
   <div class="input-group">
    <input type="search" name="search2"  class="form-control" placeholder="SEARCH CASHIER NAME" > 
    <span class="input-group-prepend">&nbsp&nbsp
      <button text="submit" class="btn btn-primary">Search</button>
    </span>
   </div>
</form>
</div><br><br><br>
<section class="bg-ligth p-5 table23">

  <div class="table-reponsive" id="no-more-tables">
  <table id="datatable"   class="table bg-white">
      <thead class="bg-dark text-light" >
        <tr align="center">
        <th>NAME</th>

        <th>ROLE</th>
          <th>EMAIL </th>
          <th>STATUS </th>
          <th >TASK</th>
        </tr>
      </thead>
      @if(count($incomes) > 0)
      @foreach($incomes as $income) 
      <tbody>
        <tr>
          <td  data-title="NAME">{{$income['Name']}}</td>
          <td class="roles" data-title="ROLE">{{$income['role']}}</td>
         
          <td data-title="EMAIL">{{$income['email']}}</td>
          <td class="votes" data-title="STATUS">{{$income['status']}}</td>
        
          <td align="center"  data-title="TASK"class="task"style="width:300px;" >
          <a  href="{{ url('admineditincome/' .$income->Name)}}" class="btn btn-primary SHOW">SHOW INCOME </a>
        
        
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
<br>
<a href="{{ url('admin/')}}" type="button" class="btn btn-primary home">HOME</a>

</section>



</div>


</div>
</div>
</section>

<script src="{{asset('bootstrap/js/apps.js')}}"></script>

</body>

</html>