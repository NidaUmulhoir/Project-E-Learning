<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/course.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    @include('layouts.sidebar')
    @include('layouts.header')
    <div class="main-content">
        <h2>Add New Course</h2>
        <button class="add-data">Add New</button>
        <div class="table-course">
            <table>
                <thead>
                    <tr>
                        <td class="title id">ID</td>
                        <td class="title pass">Course</td>
                        <td class="title course">Module</td>
                        <td class="title description">Description</td>
                        <td class="title action">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>admin@gmail.com</td>
                        <td>password</td>
                        <td>Data Analyst</td>
                        <td>Data Analyst</td>
                        <td class="action">
                            <button class="edit-data"><i class='bx bxs-edit'></i></button>
                            <button class="delete-data"><i class='bx bxs-x-square'></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pop-up-back"></div>
        <div class="pop-up">
            <div class="close-btn">
                &times;
            </div>
            <div class="form">
                <h2>Add New Course</h2>
                <div class="form-element">
                    <label for="id">ID</label>
                    <input type="text" id="id" placeholder="">
                </div>
                <div class="form-element">
                    <label for="courseName">Course Name</label>
                    <input type="text" id="courseName" placeholder="">
                </div>
                <div class="form-element">
                    <label for="modul">Modul</label>
                    <input type="text" id="modul" placeholder="">
                </div>
                <div class="form-element">
                    <label for="desk">Description</label>
                    <input type="text" id="desk" placeholder="">
                </div>
        
                <div class="form-element">
                    <button>Add New</button>
                </div>
                
                <div class="form-element">
                    <h4>Or</h4>
                    <hr>
                    <!-- <h4>New Around Here?</h4> -->
                    <b href="/Login/login.html">Already Have Account? Login</b>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.querySelector(".add-data").addEventListener("click",function(){
        document.querySelector(".pop-up").classList.add("active");
    });
    document.querySelector(".edit-data").addEventListener("click",function(){
        document.querySelector(".pop-up").classList.add("active");
    });
    document.querySelector(".delete-data").addEventListener("click",function(){
        document.querySelector(".pop-up").classList.add("active");
    });
    document.querySelector(".pop-up .close-btn").addEventListener("click",function(){
        document.querySelector(".pop-up").classList.remove("active");
    });
</script>
<script>
    (".menu").on("click", function(){
    (".menu").find(".active").removeClass("active");
    (this).parent().addClass("active");
    });
</script>
</html>