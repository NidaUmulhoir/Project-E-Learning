<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
    <title>Main Page Section</title>
  </head>
  <body>
    <div class="header">
        <div class="header-brand">
            <img src="./asset/logo.png" alt="">
            <div class="profile">
                <h3>Kim Jongin</h3>
                <img src="./asset/profile.png" alt="">
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="matakuliah">
            <div class="matkul">Programming Algorithm</div>
            <div class="content">
                <p>hallo ini kai!</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="matakuliah">
            <div class="matkul">Machine Learning</div>
            <div class="content">
                <p>hallo ini kai!</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="matakuliah">
            <div class="matkul">Structure Data</div>
            <div class="content">
                <p>hallo ini kai!</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="matakuliah">
            <div class="matkul">Reccomender System</div>
            <div class="content">
                <p>Hallo ini kai!</p>
            </div>
        </div>
    </div>
    <script>
        const container = document.getElementsByClassName
        ('matakuliah');

        for (i = 0; i<container.length; i++){
            container[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>
  </body>
</html>