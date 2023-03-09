<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('bootstrap/css/style.css')}}" rel="stylesheet">
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ST ROSE COLLEGE EDUCATIONAL FOUNDATION INC. HOME PAGE</title>

<body>
<!--header-->

<section id="header">
    <div class="header container">
 
        <div class="nav-bar"> 
            <div class="brand"> 
            <a href="#hero"><img src="/images/LSRC.png"><h1>ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC. </h1></a>
            </div>
           <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
             <ul>
                <li><a href="#hero" data-after="HOME">HOME</a></li>
                <li><a href="#services" data-after="JOINUS">JOIN US</a></li>
                <li><a href="#about" data-after="ABOUT">ABOUT</a></li>
                <li><a href="#contact" data-after="CONTACTS">CONTACTS</a></li>
                <li><a href="{{url('login/')}}" data-after="LOGIN">LOG IN</a></li>
             </ul>
           </div>
        </div>
    </div>


</section>


<!-- end header-->
<!--hero-->
<section id="hero">
<div class="hero_container"><img src="{{asset('images/'.$announcement->avatarabout)}}"alt="POST PAGEANT IMG" class="spinning">
<div>
      <h1>WELCOME TO, <span></span></h1>
      <h1>TABULATION OF <span></span></h1>
      <h1>ST ROSE COLLEGE<span></span></h1>

   

</div>
</div>
 </section>
 <!--end of hero-->
 <!--course sections-->

 <section id="services">
 
<div class="services container" >
    <div class="service-top">
       <h1 class="section-title" >HOW TO JOIN </h1>
       
    </div>
    <div class="service-bottom">
        <div class="service-item">
            <div class="icon"><img src="/images/LSRC.png"/>
            </div>
            <h2>STEP 1.</h2>
            <p>{{$announcement->step1}} </div>
        <div class="service-item">
            <div class="icon"><img src="/images/LSRC.png"/>
            </div>
            <h2>STEP 2.</h2>
            <p>{{$announcement->step2}} </p>
       
        </div>
        <div class="service-item">
            <div class="icon"><img src="/images/LSRC.png"/>
            </div>
            <h2>STEP 3.</h2>
            <p> {{$announcement->step3}} </p>
        </div>
        <div class="service-item">
            <div class="icon"><img src="/images/LSRC.png"/>
            </div>
            <h2>STEP 4.</h2>
            <p>{{$announcement->step4}}  </p>
        </div>
        
    </div>
</div>


</section>
    <!--end of course-->

     <!--projects-->

<!--end of activity-->

<!--about section-->
<section id="about">


    <div class="about container"  >
        <div class="col-left">
            <div class="about-img">
                <img src="{{asset('images/'.$announcement->avatarabout)}}" alt="POST PAGEANT IMG" class="spinning">
            </div>

        </div>
        <div class="col-right">
            <h1 class="section-title">ABOUT US</h1>
            <h2>QUALITY EDUCATION</h2>
            <p style=" font-size:1.9rem; letter-spacing:2px">St. Rose College Educational Foundation Inc. was established in 2002 also established in that year Mr. and Ms. St. rose college and Mr. and Ms. Intrams until presently proceeds to celebrate Mr. and Ms. st. rose college and Mr. and Ms. Intrams we have made strides it by making an online tabulation so that the celebration of these sorts of occasions can be more smooth and easy.

St. Rose College Educational Foundation Inc. also has courses offered such as Bachelor of Science in criminology, Bachelor of Science in Accountancy, Bachelor of Science in Business Administration, Bachelor of Secondary Education and Bachelor of Science in Computer Science.

            </p>
        

        </div>
    </div>

</section>
<!--contack section-->





<section id="contact">
  <div class="contact container"  >
    <div><h1 class="section-title">CONTACT INFO</h1></div>
    <div class="contact-items">
        <div class="contact-item">
        <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/phone--v1.png"/></div>
        <div class="contact-info">
            <h1>Phone</h1>
            <h2>{{$announcement->phone}}</h2>
            <h2>Call us</h2>
        </div>
    </div>
    <div class="contact-item">
        <div class="icon"><a href="{{$announcement->email}}"><img src="https://img.icons8.com/bubbles/50/000000/new-post.png"/></div></a>
        <div class="contact-info">
            <h1>Email</h1>
            <h2>Click icon</h2>

            <h2>EMAIL US</h2>
         
        </div>
    </div>
    <div class="contact-item">
        <div class="icon"><a href="{{$announcement->fb}}"><img src="https://img.icons8.com/bubbles/50/000000/facebook.png"/></div></a>
        <div class="contact-info">
            <h1>Facebook</h1>
            <h2>Click icon</h2></a>
            <h2>CHAT US</h2>
         
        </div>
    </div>
    </div>
  </div>
</section>
<!--footer-->
<section id="footer">
    <div class="footer container" >
        <div class="brand1"><h1> TABULATION OF ST. ROSE COLLEGE EDUCATIONAL FOUNDATION INC.</h1></div>
        <h2>Social Media Accounts</h2>
        <div class="social-icon">
            <div class="social-item">
                <a href="https://www.facebook.com/profile.php?id=100055861144721"><img src="https://img.icons8.com/ios/50/000000/facebook--v1.png"alt="FACEBOOK IMG"/></a>
            </div>
        
            <div class="social-item">
                <a href="https://www.mail.google.com/mail/mu/"><img src="https://img.icons8.com/ios/50/000000/apple-mail.png" alt="EMAIL IMG"/></a>
            </div>
        
        
            <div class="social-item">
                <a href="https://vt.tiktok.com/ZSee9x4Ly/"><img src="https://img.icons8.com/ios/50/000000/tiktok--v1.png" alt="TIKTOK IMG"/></a>
            </div>
       
        
            <div class="social-item">
                <a href="https://www.instagram.com/martabs10/"><img src="https://img.icons8.com/ios/50/000000/twitter-squared.png" alt="INSTAGRAM IMG"/></a>
            </div>
            </div>
            <p id="date-today"></p>
       
    </div>
</section>

<!--end of footer-->
<script src="{{asset('bootstrap/js/apps.js')}}"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script type="text/javascript">
   var counter = 1;
   setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
        counter = 1;
    }
   }, 3000);
</script>
<script>
     var jfam = "JFAM.All rights reserved";
    var copyrigth = "Copyright";
    let dateToday = document.getElementById
    ("date-today");
    let today = new Date();
    let year = today.getFullYear();
    dateToday.textContent = `${copyrigth} ${year} ${jfam}`;
</script>

</body>
</html>