<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>mainpage</title>
</head>
<body>
    @include('header')
    {{-- <div class="header">
        <div class="header-brand">
            <img src="./asset/logo.png" alt="">
            <div class="profile">
                <h3>Kim Jongin</h3>
                <img src="./asset/profile.png" alt="">
            </div>
        </div>
    </div> --}}
    <hr>
    @foreach ($courses as $course)
    <div class="accordion"> 
        <div class="accordion-item">
            <div class="accordion-item-header">
                {{ $course->courseName }}
            </div>
            <div class="accordion-item-body">
                @foreach ($modules as $module)
                    @if (($module->idCourse) == ($course->id))
                        @if (($module->isSubscribe == 0))
                            @if ($module->type == 'link')
                                <div class="accordion-item-body-content">
                                    @php $content = strip_tags($module->materi); @endphp
                                    <a href="{{ $content }}">{{ $module->moduleName}}</a>
                                    <img src="./asset/lock.png" alt="">
                                </div>
                            @else
                                <div class="accordion-item-body-content">
                                    <a href="/homepage">{{ $module->moduleName}}</a>
                                    <img src="./asset/lock.png" alt="">
                                </div>
                            @endif
                        @else
                            @if ($module->type == 'link')
                                <div class="accordion-item-body-content">
                                    @php $content = strip_tags($module->materi); @endphp
                                    <a href="{{ $content }}">{{ $module->moduleName}}</a>
                                </div>
                            @else
                                <div class="accordion-item-body-content">
                                    <a href="/homepage">{{ $module->moduleName}}</a>
                                </div>
                            @endif
                        @endif
                    @endif
                @endforeach
                {{-- <div class="accordion-item-body-content">
                    Module 2 : Bentuk Perulangan
                    <img src="./asset/lock.png" alt="">
                </div>
                <div class="accordion-item-body-content">
                    Module 3 : Bentuk Percabangan
                    <img src="./asset/lock.png" alt="">
                </div> --}}
            </div>
        </div>

        {{-- <div class="accordion-item">
            <div class="accordion-item-header">
                Representasi Pengetahuan
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Module 1 : Running Modul
                </div>
                <div class="accordion-item-body-content">
                    Module 2 : HTML & GIT
                    <img src="./asset/lock.png" alt="">
                </div>
                <div class="accordion-item-body-content">
                    Module 3 : Cascading Style Sheet (CSS)
                    <img src="./asset/lock.png" alt="">
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-item-header">
                Aplikasi Berbasis Platform
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Module 1 : Running Modul
                </div>
                <div class="accordion-item-body-content">
                    Module 2 : HTML & GIT
                    <img src="./asset/lock.png" alt="">
                </div>
                <div class="accordion-item-body-content">
                    Module 3 : Cascading Style Sheet (CSS)
                    <img src="./asset/lock.png" alt="">
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-item-header">
                RPL : Desain dan Implementasi
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Module 1 : Running Modul
                </div>
                <div class="accordion-item-body-content">
                    Module 2 : HTML & GIT
                    <img src="./asset/lock.png" alt="">
                </div>
                <div class="accordion-item-body-content">
                    Module 3 : Cascading Style Sheet (CSS)
                    <img src="./asset/lock.png" alt="">
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-item-header">
                Pembelajaran Mesin
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Module 1 : Running Modul
                </div>
                <div class="accordion-item-body-content">
                    Module 2 : HTML & GIT
                    <img src="./asset/lock.png" alt="">
                </div>
                <div class="accordion-item-body-content">
                    Module 3 : Cascading Style Sheet (CSS)
                    <img src="./asset/lock.png" alt="">
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-item-header">
                Sistem Pemberi Rekomendasi
            </div>
            <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                    Module 1 : Running Modul
                </div>
                <div class="accordion-item-body-content">
                    Module 2 : HTML & GIT
                    <img src="./asset/lock.png" alt="">
                </div>
                <div class="accordion-item-body-content">
                    Module 3 : Cascading Style Sheet (CSS)
                    <img src="./asset/lock.png" alt="">
                </div>
            </div>
        </div> --}}
    </div>
    @endforeach
    

    <script src="js/mainpage.js"></script>
    
</body>
{{-- @include('footer') --}}
</html>
