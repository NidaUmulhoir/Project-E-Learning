<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Padauk&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/css/landing-page.css')}}">
  <link rel="stylesheet" href="{{asset('/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('/css/sign-up.css')}}">
  <link href="assets/css/cardslider.css" rel="stylesheet">

  {{-- <link rel="stylesheet" href="{{asset('/css/cardslider.css')}}"> --}}
</head>
<body>
  
  <nav class="navbar">
    <img src="./asset/logo.png" alt="">
    <div class="nav-menu">
      <p><a href="subscribe">Subscription</a></p>
      <p><a href="card-slider-b">Service</a></p>
      <button id="show-signup">Sign-Up</button>
      <button id="show-login">Login</button>
    </div>
  </nav>
  @include ('register')
  @include ('login')

  <section class="hero-container">
      <img src="assets/elearn.png" alt="">
      <div>
        <div>
          <h1>Welcome!!</h1>
          <p>Let's Find Something to Learn</p>
        </div>
      </div>
  </section>
  @include ('cardslider')
</body>


<script>

  document.querySelector("#show-signup").addEventListener("click",function(){
    document.querySelector(".pop-up").classList.add("active");
  });

  document.querySelector(".pop-up-login .form .form-element .btn-login").addEventListener("click",function(){
   document.querySelector(".pop-up-login").classList.remove("active");
  });

  document.querySelector("#show-login").addEventListener("click",function(){
    document.querySelector(".pop-up-login").classList.add("active");
  });

  document.querySelector(".pop-up-login .close-btn").addEventListener("click",function(){
      document.querySelector(".pop-up-login").classList.remove("active");
  });

  document.querySelector(".pop-up .form .form-element .btn-signup").addEventListener("click",function(){
      document.querySelector(".pop-up").classList.remove("active");
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
  });
 
</script>
</html>