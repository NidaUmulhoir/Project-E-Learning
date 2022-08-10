<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning Web</title>
    <!-- CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!--Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/subscribe.css" rel="stylesheet">
</head>

<body>
@include('header')
    <h1>Pricelist & Benefit</h1>
    <h2>Pilih Paket Langganan yang Sesuai Kebutuhan</h2>
    <div class="container">
        <h3>Pricelist</h3>
        <ul>
            <li> 1 Month 
                <h2>Rp 250.000,00</h2>
                <button class="btn"> <a href="">Subscribe</button></a>
            </li>
            <li> 3 Month 
                <h2>Rp 750.000,00</h2>
                <button class="btn"> <a href="">Subscribe</button></a>
            </li>
            <li> 6 Month 
                <div class="diskon"> 5% OFF</div>
                <p><s>Rp 1.500.000,00</s></p>
                <h2>Rp 1.425.000,00</h2>
                <button class="btn"> <a href="">Subscribe</button></a>
            </li>
            <li> 1 Year 
                <div class="diskon"> 10% OFF</div>
                <p><s>Rp 3.000.000,00</s></p>
                <h2>Rp 2.750.000,00</h2>
                <button class="btn"> <a href="">Subscribe</button></a>
            </li>
        </ul>
    </div>
    <h1>Benefit</h1>
    <h2>Akses penuh ke seluruh modul yang disediakan</h2>
    <h3>Sertifikat kompetensi kelulusan jika Anda berhasil menyelesaikan kelas</h3>
</body>
@include('footer')
</html>