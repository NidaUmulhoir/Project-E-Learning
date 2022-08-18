{{-- @extends('') --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/modul.css">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

    <title>Modul</title>
</head>
<body>
    @include('header')
    <div class="space"></div>
    <div class="wrap">
        <div class="sidebar-modul">
            <h2>{{$modul->course->courseName}}</h2>
            <div class="sidebar-menu">
                <ul>
                    @foreach ($modul->course->modules as $module)
                    <li>
                        <div class="nama-modul">
                            <a href="/modul/{{ $module->id }}">
                                <h3>{{$module->moduleName}}</h3>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="detail">
            {!!$modul->materi!!}
        </div>
    </div>
        
</body>
</html>