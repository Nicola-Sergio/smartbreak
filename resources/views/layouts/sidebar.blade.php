<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo - hide sidebar button-->
    <a data-widget="pushmenu" href="#" role="button" class="brand-link">
        <img src="{{ asset('img/logos/logo.svg') }}" alt="SmartBreak logo" style="max-width: 80%;">
        {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                @can('is-admin')
                <li class="nav-item">
                    <a href="{{ route('sites.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Sedi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('classes.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Classi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Utenti
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('students.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Studenti
                        </p>
                    </a>
                </li>

                @endcan

                @canany(['is-manager', 'is-admin'])

                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Categorie
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-hamburger"></i>
                        <p>
                            Prodotti
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-hamburger"></i>
                        <p>
                            Ordini
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('orders.by-day') }}" class="nav-link">
                                <p>
                                    Per classe
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products.by-day') }}" class="nav-link">
                                <p>
                                    Per prodotto
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                @endcanany

                @can('is-student')

                <li class="nav-item">
                    <a href="{{ route('orders.by-student') }} " class="nav-link">
                        <i class="nav-icon fas fa-hamburger"></i>
                        <p>
                            I miei ordini
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('orders.today-by-class') }}" class="nav-link">
                        <i class="nav-icon fas fa-hamburger"></i>
                        <p>
                            Ordine della mia classe
                        </p>
                    </a>
                </li>

                @endcan
                <li class="nav-item">
                    <hr>
                </li>
                
                <li class="nav-item">
                <a data-widget="pushmenu" href="#" role="button" class="nav-link">
                    <i class="nav-icon fas fa-window-close"></i>
                    <p>Chiudi</p>
                </a>
            </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>