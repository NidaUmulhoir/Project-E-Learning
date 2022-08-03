<div class="sidebar">
    <div class="sidebar-brand">
       <img src="./asset/logo.png">
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="{{route('dashboard')}}">
                    <div class="menu">
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
                <a href="{{route('course')}}">
                    <div class="menu">
                        <img src="./asset/icon-3.png" alt="">
                        <h3>Course</h3>
                    </div>
                </a>
            </li>
            <li>
                <div class="menu">
                    <img src="./asset/icon-4.png" alt="">
                    <h3>Module</h3>
                </div>
            </li>
        </ul>
    </div>
</div>

