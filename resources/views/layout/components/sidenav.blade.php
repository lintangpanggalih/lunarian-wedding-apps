<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
        <img src="{{asset('img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="fa fa-home text-primary"></i>
              <span class="nav-link-text">Beranda</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('wedding.index')}}">
              <i class="fa fa-heart text-danger"></i>
              <span class="nav-link-text">Wedding</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('story.index')}}">
              <i class="fa fa-scroll text-info"></i>
              <span class="nav-link-text">Story</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('invitation.index')}}">
              <i class="ni ni-book-bookmark text-green"></i>
              <span class="nav-link-text">Undangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('event.index')}}">
              <i class="fa fa-calendar-day text-red"></i>
              <span class="nav-link-text">Acara</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('music.index')}}">
              <i class="fa fa-music text-black"></i>
              <span class="nav-link-text">Musik</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('comment.index')}}">
              <i class="fa fa-comment-dots text-yellow"></i>
              <span class="nav-link-text">Komentar</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
