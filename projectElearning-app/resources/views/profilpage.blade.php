<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>E-learning Web</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
    
      <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
      <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/profil.css" rel="stylesheet">

  </head>
<body>
@include('header')

  <img class="profil" src="/assets/img/profilfoto.jpeg"/>
  <h2>Nama User</h2>
  <div class="container mt-3">
    <button class="btn"> <a href="">Logout</button></a> 
  </div>


  <div class="container">
    <h3 >Subscribe Status</h3>
    <div class="status"></div>
    <h3>Lastest Course </h3>
    <div class="percentCourse"></div>
    <h3>Lastest Sertificate</h3>
    <h4><a href="">Upgrade to Pro</a> to Begin Earn Sertificates</h4>
  
  </div>
</body>
@include('footer')
</html>