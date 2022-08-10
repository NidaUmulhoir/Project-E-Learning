<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/memberList.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    @include('dashboard.layouts.sidebar')
    @include('dashboard.layouts.header')
    <div class="main-content">
        <div class="title-member">
            <img src="./asset/user2-ico.png">
            <h2>Member Premium List</h2>
        </div>
        <div class="table-member">
            <table>
                <thead>
                    <tr>
                        <td class="title email">Email</td>
                        <td class="title pass">Password</td>
                        <td class="title course">Course</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>admin@gmail.com</td>
                        <td>password</td>
                        <td>Data Analyst</td>
                    </tr>
                </tbody>
            </table>
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