<aside class="main-sidebar sidebar-light-lightblue elevation-4">
    <a class="brand-link navbar-gray">
        <img src="{{ asset('dist/img/proeza.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 ml-1">
        <span class="brand-text font-weight-light">SiGeCOC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- @hasrole('TIC') --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                {{-- <a href="{{ route('dashboard') }}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard</p>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                {{-- @endrole --}}

                {{-- @can('permissions.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('permissions.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Permiso
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('roles.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('roles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Rol
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}
                {{-- @can('cities.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('cities.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Departamento
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('agencies.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('agencies.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-city"></i>
                            <p>
                                Agencia
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('users.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Usuarios
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('folders.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('folders.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Carpetas
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('clients.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('clients.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Clientes
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('personals.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('personals.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Ref. Personal
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('commercials.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('commercials.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Ref. Comercial
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('caedecs.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('caedecs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                CAEDEC
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('businesses.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('businesses.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Actividad Economica
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('loans.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('loans.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Prestamos
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('residences.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('residences.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Croquis Domicilio
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('jobs.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('jobs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Croquis Negocio
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('assets.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('assets.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Activos
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('passives.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('passives.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Pasivos
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('works.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('works.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Bienes de Negocio
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('families.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('families.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Bienes de Familia
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('products.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('products.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Productos
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('items.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('items.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Insumos
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('inventories.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('inventories.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Inventarios
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}

                {{-- @can('documents.index') --}}
                    <li class="nav-item">
                        <a href="{{ route('documents.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Recepcion de Doc
                            </p>
                        </a>
                    </li>
                {{-- @endcan --}}
            </ul>
        </nav>
    </div>
</aside>

