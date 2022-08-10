<div class="sidebar">
    <div class="sidebar-brand">
       <img src="./asset/logo.png">
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="{{route('dashboard')}}">
                    <div class="menu {{ Request::is('dashboard') ? 'active' : ''}}">
                            <img src="./asset/icon-1.png" alt="">
                            <h3>Users</h3>
                    </div>
                </a>
            </li>
            <li>
                {{-- <a href="{{route('payment')}}"> --}}
                    <div class="menu">
                        <img src="./asset/icon-2.png" alt="">
                        <h3>Payment</h3>
                    </div>
                {{-- </a> --}}
            </li>
            <li>
                <a href="{{route('course.index')}}">
                    <div class="menu {{ Request::is('course') ? 'active' : ''}}">
                        <img src="./asset/icon-3.png" alt="">
                        <h3>Course</h3>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>

