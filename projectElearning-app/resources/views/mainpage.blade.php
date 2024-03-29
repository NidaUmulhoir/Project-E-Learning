<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mainpage.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>mainpage</title>
</head>
<body>
    @include('header')

    <div class="space"></div>
    @foreach ($courses as $course)
    <div class="accordion"> 
        <div class="accordion-item">
            <div class="accordion-item-header">
                {{ $course->courseName }}
            </div>
            <div class="accordion-item-body">
                @foreach ($modules as $module)
                    @if (($module->idCourse) == ($course->id))
                        @if ((($module->isSubscribe == 1) && (auth('member')->user()->isSubscribe())) || ($module->isSubscribe == 0))
                                <div class="accordion-item-body-content">
                                    <a href="/modul/{{ $module->id }}">{{ $module->moduleName}}</a>
                                </div>
                        @else
                            
                                <div class="accordion-item-body-content">
                                    <a>{{ $module->moduleName}}</a>
                                    <img src="./asset/lock.png" alt="">
                                </div>
                        @endif
                    @endif
                @endforeach
              
            </div>
        </div>

    </div>
    @endforeach
    

    <script src="js/mainpage.js"></script>
</body>
</html>
