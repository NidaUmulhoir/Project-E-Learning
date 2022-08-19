<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        {{-- <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard')? 'active' : ''}}" aria-current="page" >
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/course*')? 'active' : ''}}" href="/admin/user">
            <span data-feather="user"></span>
            User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/course*')? 'active' : ''}}" href="/admin/course">
            <span data-feather="file"></span>
            Course
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/course*')? 'active' : ''}}" href="/admin/pricelist">
            <span data-feather="tag"></span>
            Pricelist
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/course*')? 'active' : ''}}" href="/admin/payment">
            <span data-feather="credit-card"></span>
            Payment
          </a>
        </li>
      </ul>
    </div>
  </nav>