<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/adver.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<title>CANDIDATES INFORMATION</title>

<style>

.hour,
.dot {
background: -webkit-linear-gradient(90deg, #EC9F05, #ec0d05);
-webkit-text-fill-color: #202020;
-webkit-background-clip: text;
}
.minute,
.dot:nth-child(4) {
background: -webkit-linear-gradient(90deg, #0088ff, #8c00fe);
-webkit-text-fill-color: #202020;
-webkit-background-clip: text;
}
.second,
.period {
background: -webkit-linear-gradient(90deg, #a200ff, #ff00aa);
-webkit-text-fill-color: #202020;
-webkit-background-clip: text;
}
.time span {
text-shadow: 21spx 2px 3px rgba(0, 0, 0, 0.22);
}
.date {
transform: translateY(-10px);
background: -webkit-linear-gradient(90deg, #EC9F05, #ec0d05);
-webkit-text-fill-color:#202020;
-webkit-background-clip: text;
}       
</style>


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
             <li><a href="#tablead" data-after="VOTING">VOTING</a></li>
            
             <li><a href="#course" data-after="ACTIVITIES">ACTIVITIES</a></li>
             <li><a href="#offered" data-after="COURSES">COURSES</a></li>
             <li><a href="#offered12" data-after="VIDEO">ADVERTISEMENT</a></li>

             <li><a href="#vote" data-after=" VOTE RESULTS"> VOTE RESULTS</a></li>

                <li><a href="{{ url('logout/')}}" data-after="LOG OUT">LOG OUT</a></li>
             </ul>
           </div>
        </div>
    </div>
   

</section> 
<section id="tablead">
<br><br><br><br>

<!-- start add modal -->

     
@if(\Session::has('success'))
  <div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
  </div>
  @endif
        <div class="digital_clock">
       
        <h1 class="digital_clockh1">THE VOTE WILL CLOSE AT EXACLY 8 PM</h1>
            <div class="time">
                <span class="hour">00</span>
                <span class="dot">:</span>
                <span class="minute">00</span>
                <span class="dot">:</span>
                <span class="second">00</span>
                <span class="period">AM</span>
            </div>
            <!-- Date Format  -->
            <div class="date">
                <span class="day_name">Monday</span>,
                <span class="month">January</span>
                <span class="day_no">01</span>
            </div>
         
       </div>
     
     
        </section> 

        <section id="course">
<br><br><br><br>

 

<h1 class="courseh1">ACTIVITIES</h1>
<div class="content">

<br>


           <div class="carasoul">
              
               <figure class="shadow"><img src="images/LSRC.png"alt="ACTIVITIES IMG" ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->avatar1)}}"alt="ACTIVITIES IMG" ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->avatar2)}}"alt="ACTIVITIES IMG"  ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->avatar3)}}"alt="ACTIVITIES IMG" ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->avatar4)}}"alt="ACTIVITIES IMG" ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->name1)}}"alt="ACTIVITIES IMG" ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->name2)}}"alt="ACTIVITIES IMG" ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->name3)}}"alt="ACTIVITIES IMG" ></figure>
              
               <figure class="shadow"><img src="{{asset('images/'.$announcement->name4)}}"alt="ACTIVITIES IMG" ></figure>
               <figure class="shadow"><img src="{{asset('images/'.$announcement->avatarabout)}}"alt="POST PAGEANT IMG" class="spinning"></figure>
           
            </div>
       </div>




        </section>
        <section id="offered">
<br><br><br><br>

 

<h1 class="offered">COURSES OFFERED</h1>
<div class="content">


           <div class="carasoul">
           <figure class="shadow"><img src="images/educ.jpg"alt="COURSES IMG" ><h5>BACHELOR OF SECONDARY EDUCATION (Major in Mathemathics & Social Studies)</h5></figure>
             
           <figure class="shadow"><img src="images/bed.jpg"alt="COURSES IMG" ><h5>BACHELOR OF ELEMENTARY EDUCATION</h5></figure>
           
              <figure class="shadow"><img src="images/dcs.jpg"alt="COURSES IMG" ><h5>BACHELOR OF SCIENCE IN COMPUTER SCIENCE</h5></figure>
               <figure class="shadow"><img src="images/cs.jpg"alt="COURSES IMG" ><h5>BACHELOR OF SCIENCE IN COMPUTER SCIENCE</h5></figure>

               <figure class="shadow"><img src="images/pulis.jpg"alt="COURSES IMG" ><h5>BACHELOR OF SCIENCE IN CRIMINOLOGY</h5></figure>
              
            
               <figure class="shadow"><img src="images/crims.jpg"alt="COURSES IMG" ><h5>BACHELOR OF SCIENCE IN CRIMINOLOGY</h5></figure>
               <figure class="shadow"><img src="images/cba.jpg"alt="COURSES IMG" ><h5>BACHELOR OF SCIENCE IN ACCOUNTANCY</h5></figure>
               <figure class="shadow"><img src="images/ba.jpg"alt="COURSES IMG" ><h5>B.S.B.A (Major in Human Resources Management)</h5></figure>
             
               <figure class="shadow"><img src="images/LSRC.png"alt="COURSES IMG" ><h5 align="center">VISIT US</h5></figure>
           <figure class="shadow"><img src="{{asset('images/'.$announcement->avatarabout)}}"alt="POST PAGEANT IMG" class="spinning"></figure>
             
             
       </div>
       </div>


        </section>  
  <section id="offered12">

 <br><br><br><br><br>

    <h1 class="offered">SCHOOL VIDEO ADVERTISEMENT</h1>
    <div class="content1">

    <video width="80%" height="440" controls>
      <source src="{{asset('images/'.$announcement->anountags2)}}" type="video/mp4">
 
</video>
        
    </div>


   </section>  
        <section id="vote">
<br><br><br><br>

<!-- start add modal -->
    <div class="container">

 
    <div class="box">
      <h2>FEMALE CANDIDATES</h2>
    <form method="post" class="join">
                @csrf
                <div class="user-details">
    <section class="bg-ligth p-5">

<div class="table-reponsive" id="no-more-tables">
<table id="datatable"   class="table bg-white">
    <thead class="bg-dark text-light" >
      <tr align="center">
      <th >IMAGE:</th>

      <th >NAME:</th>
        <th  >CANDIDATE:</th>
        <th  >EVENT:</th>
        <th  style="width:200px;"> VOTES:</th>

       
      

      </tr>
    </thead>
    @if(count($females) > 0)
    @foreach($females as $female) 
    <tbody>
      <tr>
      <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$female->image)}}" alt="candidate Picture"></td></td>
         
      <td  data-title="NAME:">{{$female['namecan']}}</td>
         
         <td class="CANDIDATE" data-title="CANDIDATE:"> {{$female['candino']}}</td>
        
         <td class="EVENT" data-title="EVENT:">{{$female['eventc']}}</td>
       
         <td  align="center"style="color:crimson;  font-weight: 900; font-size:2rem;"  class="VOTES" data-title="VOTES">{{$female['vpointsc']}}</td>
 
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
</form>
    </div>
    </div>
   
<!-- end join asdddddddddddddddddddddddddddddd-->
<!-- start mr and ms asdddddddddddddddddddddddddddddd-->



<!-- end update modal asdddddddddddddddddddddddddddddd-->

    <div class="box">
    <h2>MALE CANDIDATES</h2>
    

    <form method="post" class="join">
                @csrf
                <div class="user-details">
    <section class="bg-ligth p-5">

<div class="table-reponsive" id="no-more-tables">
<table id="datatable"   class="table bg-white">
    <thead class="bg-dark text-light" >
      <tr align="center">
      <th >IMAGE:</th>

      <th >NAME:</th>
        <th  >CANDIDATE:</th>
        <th  >EVENT:</th>
        <th  style="width:200px;">VOTES:</th>

       

     
      </tr>
    </thead>
    @if(count($males) > 0)
    @foreach($males as $male) 
    <tbody>
      <tr>
      <td align="center"  data-title="IMAGE"><img class="imgprof"src="{{asset('images/'.$male->image)}}" alt="candidate Picture"></td></td>
         
      <td  data-title="NAME:">{{$male['namecan']}}</td>
         
         <td class="CANDIDATE" data-title="CANDIDATE:"> {{$male['candino']}}</td>
        
         <td class="EVENT" data-title="EVENT:">{{$male['eventc']}}</td>

         
         <td align="center" style="color:crimson;  font-weight: 900; font-size:2rem;"  class="SCORE" data-title="SCORE:">{{$male['vpointsc']}}</td>
      
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

</form>
    </div>

    </div>
</div>
        </section>  
        <script>

            function clock()
            {
                var today = new Date();
                var hour = today.getHours();
                var minute = today.getMinutes();
                var second = today.getSeconds();
                let period = "AM";
                var day_no = today.getDate();
                var day_name = today.toLocaleDateString( "default", { weekday: "long" } );
                var month = today.toLocaleDateString( "default", { month: "long" } );
                if ( hour < 10 )
                {
                    hour = "0" + hour;
                }
                if ( minute < 10 )
                {
                    minute = "0" + minute;
                }
                if ( second < 10 )
                {
                    second = "0" + second;
                }
                if ( hour > 12 )
                {
                    period = "PM";
                }
                if ( hour > 12 )
                {
                    hour = hour % 12;
                }
                document.querySelector( ".hour" ).innerHTML = hour;
                document.querySelector( ".minute" ).innerHTML = minute;
                document.querySelector( ".second" ).innerHTML = second;
                document.querySelector( ".day_no" ).innerHTML = day_no;
                document.querySelector( ".day_name" ).innerHTML = day_name;
                document.querySelector( ".month" ).innerHTML = month;
            }
            var UpdateTime = setInterval( clock, 1000 );

        </script>





<script src="{{asset('bootstrap/js/apps.js')}}"></script>

</body>

</html>