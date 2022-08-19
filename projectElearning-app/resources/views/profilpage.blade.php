<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>E-learning Web</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
    
      <!--CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/profil.css" rel="stylesheet">

  </head>
<body>
@include('header')
  @auth('member')
  <img class="profil" src="/assets/img/profilakun.png"/>
  <h2>{{ auth('member')->user()->name}}</h2>
  <div class="container mt-3">
    <button class="btn"> <a href="/">Logout</button></a> 
  </div>
  @endauth

  <div class="container">
    <h3 >Subscribe Status</h3>
    <div class="status"></div>
    <h3>Lastest Course </h3>
    <div class="percentCourse">
      <p>Course</p>
    </div>
    <div class="sertif">
      <h3>Lastest Sertificate</h3>
      <div class="pro">
        <img src="/assets/img/crown.png" alt="">
        Pro
      </div>
    </div> 
    <h4><a href="/subscribe">Upgrade to Pro</a> to Begin Earn Sertificates</h4>
  </div>

  <div class="showsertif">
    <img src="/assets/img/foldericon.png" alt="">
    <h4>This feed shows sertificate that can be downloaded</h4>
    <h6>Are there sertificate you miss? <a href="/profilpage">Reload the page.</a></h6>
    <button class="btn"> <a href="/mainpage">Browse All Course</button></a> 
  </div>
</body>
@include('footer')
</html>