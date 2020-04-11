<header class="main-header">
  <a href="{{ route('home') }}" class="logo">
      <strong>GSB</strong>
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="/uploads/avatars/{{ Auth::user()->avatar}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }} {{ Auth::user()->prenom }}</span>
            </a>
            <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
            <img src="/uploads/avatars/{{ Auth::user()->avatar}} " class="img-circle" alt="User Image">

              <p>
                  {{ Auth::user()->name }} {{ Auth::user()->prenom }}
                <small>Membre depuis {{ Auth::user()->dateembauche }}</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{url('profil')}}" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">déconnexion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>

      