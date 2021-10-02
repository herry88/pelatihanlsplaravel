<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
            </li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">


        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../stisla/img/avatar/avatar-1.png" class="rounded-circle mr-1">
<<<<<<< HEAD
                <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
=======
                <div class="d-sm-none d-lg-inline-block">{{ \Auth::user()->name }}</div>
>>>>>>> 70a5d6ea5410ea4e58b9b5c40bfbd17e36771484
            </a>
            <div class="dropdown-menu dropdown-menu-right">


                <div class="dropdown-divider"></div>
<<<<<<< HEAD
=======
                {{-- <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a> --}}
>>>>>>> 70a5d6ea5410ea4e58b9b5c40bfbd17e36771484
                <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
