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
            @foreach($pricelists as $pricelist)
            <li> {{$pricelist->packet}}
                <h2>{{$pricelist->price}}</h2>
                <button class="btn"> <a href="/payment_dashboard/{{$pricelist->id}}">Subscribe</button></a>
            </li>
            @endforeach
        </ul>
    </div>
    <h1>Benefit</h1>
    <h2>Akses penuh ke seluruh modul yang disediakan</h2>
    <h3>Sertifikat kompetensi kelulusan jika Anda berhasil menyelesaikan kelas</h3>
</body>
@include('footer')
</html>