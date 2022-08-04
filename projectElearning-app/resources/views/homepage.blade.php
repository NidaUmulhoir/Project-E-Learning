<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-learning Web</title>
  
    <!-- CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/cardslider.css')}}">
</head>
<body>
@include('header')

  <main id="main">

    <!-- ======= Latest Activity Section ======= -->
    <section id="latest-activity" class="latest-activity">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <h3 style="margin-top: 100px">Hi, User</h3>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="boxlast-activity" style="width: auto; height: 6cm;  border-radius:15px; background-color:rgba(226, 225, 225, 0.53) ">
          <div class="col content" data-aos="fade-left" data-aos-delay="100" style="margin-left: 50px; margin-right: 50px; margin-top:10px">
            <h3>Latest Activity</h3>
            <p class="fst-italic"></p>
            <ul style="list-style: none"></ul>
            <h6 style="text-align: center">Belum ada aktivitas baru nih dari kamu, yuk pelajari modul modul yang kamu miliki </h6>
          </div>

        </div>

      </div>
    </section>
    <!-- End Latest Activity Section -->

  <!-- ======= Services Section ======= -->
  @include('layouts.cardslider')
  <!-- End Sevices Section -->
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

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
  </script>
</body>
@include('footer')
</html>