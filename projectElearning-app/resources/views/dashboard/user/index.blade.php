@extends('dashboard.layouts.main')

@section('container')
<div class="main-content">
    <div class="member">
        <div class="member-pre">
            <h3></h3>
            <h5>Member Premium</h4>
            <img src="/asset/user-ico.png" alt="">
            <a href="/admin/user/user-premium"><button class="info">More Info <i class='bx bx-right-arrow-circle'></i></button></a>
        </div>
        <div class="member-reg">
            <h3></h3>
            <h5>Member Regular</h5>
            <img src="/asset/user-ico.png" alt="">
            <a href="/admin/user/user-reguler"><button class="info">More Info <i class='bx bx-right-arrow-circle'></i></button></a>
        </div>
        
    </div>
</div>
@endsection

{{-- <script>
    $(".menu").on("click", function(){
    $(".menu").find(".active").removeClass("active");
    $(this).parent().addClass("active");
    });
</script> --}}
</html>