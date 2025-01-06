
<aside class="app-sidebar shadow" style="background-color: orange;">
    <div class="sidebar-brand">
        <a href="../index.html" class="brand-link">
            <img src="{{ asset('./admin/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light"><img src="{{ asset('./admin/img/logo2.png') }}" width="150" height="30" alt=""></span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.custom.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Customize</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.cars.index')}}" class="nav-link">
                        <i class="nav-icon bi bi-car-front"></i>
                        <p>Mobil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.car_rental.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-list-columns-reverse"></i>
                        <p>Daftar Harga</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.transactions.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-bank"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-file-person-fill"></i>
                        <p>Users</p>
                    </a>
                </li>
            </li>
            </ul>
        </nav>
    </div>
</aside>