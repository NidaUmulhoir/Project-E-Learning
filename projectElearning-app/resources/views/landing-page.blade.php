<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Landing Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Padauk&display=swap" rel="stylesheet">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Padauk&display=swap" rel="stylesheet"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/css/landing-page.css')}}">
  
</head>
<body>
  <nav class="navbar">
    <h1>E-Learning</h1>
    <div class="nav-menu">
      <p>Subscription</p>
      <p>Service</p>
      {{-- <a href="#" class=signup-btn>Sign-In</a> --}}
      <button id="show-signup">Sign-Up</button>
    </div>
  </nav>
  <div class="pop-up">
    <div class="close-btn">
        &times;
    </div>
    <div class="form">
        <h2>Sign-Up</h2>
        <div class="form-element">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Type Here">
        </div>
        <div class="form-element">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter Email">
        </div>
        <div class="form-element">
            <label for="password">Password</label>
            <input type="text" id="password" placeholder="Enter Password">
        </div>
        <div class="form-element">
            <label for="confirm-password">Confirm Password</label>
            <input type="text" id="confirm-password" placeholder="Confirm Password">
        </div>
        
        <div class="form-element">
            <button>Sign-Up</button>
        </div>
        
        <div class="form-element">
            <h4>Or</h4>
            <hr>
            <!-- <h4>New Around Here?</h4> -->
            <b href="/Login/login.html">Already Have Account? Login</b>
        </div>
    </div>
</div>

  <section class="hero-container">
    <div>
      <div>
        <h1>Welcome!!</h1>
        <p>Let's Find Something Interesting</p>
      </div>
    </div>
      <img src="assets/elearn.png" alt="">
  </section>

  <hr>
  <h2 class="course-category">Service That We Provide</h2>
  <section class="course-slider">
    <button class="pre-btn"><img src="assets/arrow.png" alt=""></button>
    <button class="next-btn"><img src="assets/arrow.png" alt=""></button>
    <div class="course-container">
      <div class="course-card">
        <div class="course-image">
          <img src="assets/algorithmProgram.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Programming Algorithm</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/algorithmProgram.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Programming Algorithm</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/machineLearning.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Machine Learning</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/dataStructure.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Structured Data</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/recomsystem.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Recommeder System</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/digital.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">System Digital</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/algorithmProgram.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Programming Algorithm</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/machineLearning.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Machine Learning</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/dataStructure.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Structured Data</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>

      <div class="course-card">
        <div class="course-image">
          <img src="assets/recomsystem.png" class="course-thumb" alt="">
          <button class="card-btn">View More</button>
        </div>
        <div class="course-info">
          <h2 class="course-name">Recommeder System</h2>
          <p class="course-short-description">a short line about the cloth..</p>
        </div>
      </div>
    </div> 
  </section>
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
  });
  document.querySelector(".pop-up .close-btn").addEventListener("click",function(){
      document.querySelector(".pop-up").classList.remove("active");
  });
</script>
</html>