<link href="assets/css/style.css" rel="stylesheet">
<header id="header" class="fixed-top border-bottom border-dark">
    <div class="container-1">
      <img class="image" src="/assets/img/logo.png"/>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/homepage">Home</a></li>
          <li><a href="/subscribe">Subscribe</a></li>
          @auth('member')
          <li class="dropdown">
            <div class="dropprofil">
                  <a>{{ auth('member')->user()->name }}</a>
            </div>
              <ul>
                <div class="dropprofil1">
                  <li><a href="/profile">Profile</a></li>
                </div>
                <div class="dropprofil1">
                  <li><a href="/logout">Logout</a></li>
                </div>
              </ul>
          </li>
          @endauth
        </ul>
      </nav>
    </div>
  </header>