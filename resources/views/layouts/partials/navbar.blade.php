<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"> 
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown"> 
            <button
                        class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                        id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                        data-bs-display="static"> <span class="theme-icon-active"> <i class="my-1"></i> </span>
                        <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span> </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text" style="--bs-dropdown-min-width: 8rem;">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="false">
                            <i class="bi bi-sun-fill me-2"></i> Light <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                            <i class="bi bi-moon-fill me-2"></i> Dark <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="true">
                            <i class="bi bi-circle-fill-half-stroke me-2"></i> Auto <i class="bi bi-check-lg ms-auto d-none"></i>
                        </button>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown user-menu"> 
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ asset('./admin/img/avatar/avatar-illustrated-02.png') }}" class="user-image rounded-circle shadow" alt="User Image">
                    <span class="d-none d-md-inline"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-warning">
                        <img src="{{ asset('./admin/img/avatar/avatar-illustrated-02.png') }}" class="rounded-circle shadow" alt="User Image">
                        <p>
                            @auth
                                {{ auth()->user()->name }}
                                <small>
                                {{ auth()->user()->role }}
                                </small>
                            @endauth
                        </p>                        
                    </li>
                    <li class="user-footer">
                        <a href="{{ route('profile.edit') }}" class="btn btn-default btn-flat">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-default btn-flat float-end">
                                {{ __('Log Out') }} 
                            </button>
                        </form>                        
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>