<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Padauk&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/landing-page.css')}}">
  <link rel="stylesheet" href="{{asset('/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('/css/sign-up.css')}}">
  <link rel="stylesheet" href="{{asset('/css/email-verification.css')}}">
  <link rel="stylesheet" href="{{asset('/css/form-forgot-password.css')}}">
  <link rel="stylesheet" href="{{asset('/css/email-verf-fp.css')}}">
</head>
<body>
  
  <nav class="navbar">
    <h1>E-Learning</h1>
    <div class="nav-menu">
      <p>Subscription</p>
      <p>Service</p>
      <button id="show-signup">Sign-Up</button>
      <button id="show-login">Login</button>
    </div>
  </nav>
  @include ('register')
  @include ('login')
  @include ('email-verification')
  @include ('form-forgot-password')
  @include ('email-verf-fp')


  <section class="hero-container">
      <img src="assets/elearn.png" alt="">
      <div>
        <div>
          <h1>Welcome!!</h1>
          <p>Let's Find Something Interesting</p>
        </div>
      </div>
  </section>

  <hr>
  <h2 class="course-category">Service That We Provide</h2>
  @include ('card-slider-b')
</body>

<script>
const courseContainers = [...document.querySelectorAll('.course-container')];
const nextBtn = [...document.querySelectorAll('.next-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

courseContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nextBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

  document.querySelector("#show-signup").addEventListener("click",function(){
    document.querySelector(".pop-up").classList.add("active");
    document.getElementById("pop-up").style.display = "block";  
  });

  document.querySelector(".pop-up-login .form .form-element .btn-fp").addEventListener("click",function(){
    document.querySelector(".pop-up-login").classList.remove("active");
    document.querySelector(".pop-up-fp").classList.add("active");
    document.getElementById("pop-up-fp").style.display ="block";
  });

  document.querySelector(".pop-up-fp .close-btn").addEventListener("click", function(){
    document.querySelector(".pop-up-fp .close-btn").classList.remove("active");
  });

  document.querySelector("#show-login").addEventListener("click",function(){
    document.querySelector(".pop-up-login").classList.add("active");
  });

  document.querySelector(".pop-up-login .close-btn").addEventListener("click",function(){
      document.querySelector(".pop-up-login").classList.remove("active");
  });

  document.querySelector(".pop-up .form .form-element .btn-signup").addEventListener("click",function(){
      document.querySelector(".pop-up").classList.remove("active");
      document.querySelector(".verify-cont").classList.add("active");
      document.querySelector(".verify-cont .close-btn").addEventListener("click",function(){
        document.querySelector(".verify-cont").classList.remove("active");
      });
    });

  document.querySelector(".pop-up .close-btn").addEventListener("click",function(){
      document.querySelector(".pop-up").classList.remove("active");
  });
  
  document.querySelector(".pop-up .form .form-element .btn-login").addEventListener("click",function(){
      document.querySelector(".pop-up").classList.remove("active");
      document.querySelector(".pop-up-login").classList.add("active");
  });

  document.querySelector(".pop-up-login .form .form-element .btn-signup2").addEventListener("click",function(){
    document.querySelector(".pop-up-login").classList.remove("active");
    document.querySelector(".pop-up").classList.add("active");
    document.querySelector(".pop-up .close-btn").classList.addEventListener("click", function(){
      document.querySelector(".pop-up").classList.remove("active");
    });
  });

  document.querySelector(".pop-up-fp .form-fp .form-element .rtn-login").addEventListener("click",function(){
    document.querySelector(".pop-up-fp").classList.remove("active");
    document.querySelector(".pop-up-login").classList.add("active");
  });

  document.querySelector(".pop-up-fp .form-fp .form-element .send-email").addEventListener("click",function(){
    document.querySelector(".pop-up-fp").classList.remove("active");
    document.querySelector(".notif-cont").classList.add("active");
  });
  
</script>
</html>