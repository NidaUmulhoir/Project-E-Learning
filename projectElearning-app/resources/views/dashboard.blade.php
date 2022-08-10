<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    @include('layouts.sidebar')
    @include('layouts.header')
    <div class="main-content">
        <h2>Dashboards Users</h2>
        <div class="member">
            <div class="member-pre">
                <h1>150</h1>
                <h4>Member Premium</h4>
                <img src="./asset/user-ico.png" alt="">
                <button class="info">More Info <i class='bx bx-right-arrow-circle'></i></button>
            </div>
            <div class="member-reg">
                <h1>150</h1>
                <h4>Member Regular</h4>
                <img src="./asset/user-ico.png" alt="">
                <button class="info">More Info <i class='bx bx-right-arrow-circle'></i></button>
            </div>
            
        </div>
    </div>
</body>
<script>
    $(".menu").on("click", function(){
    $(".menu").find(".active").removeClass("active");
    $(this).parent().addClass("active");
    });
</script>
</html>