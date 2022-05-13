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

                @can('permissions.index')
                    <li class="nav-item">
                        <a href="{{ route('permissions.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Permiso
                            </p>
                        </a>
                    </li>
                @endcan

                @can('roles.index')
                    <li class="nav-item">
                        <a href="{{ route('roles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Rol
                            </p>
                        </a>
                    </li>
                @endcan
                @can('cities.index')
                    <li class="nav-item">
                        <a href="{{ route('cities.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Departamento
                            </p>
                        </a>
                    </li>
                @endcan

                @can('agencies.index')
                    <li class="nav-item">
                        <a href="{{ route('agencies.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-city"></i>
                            <p>
                                Agencia
                            </p>
                        </a>
                    </li>
                @endcan

                @can('users.index')
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Usuarios
                            </p>
                        </a>
                    </li>
                @endcan

                @can('folders.index')
                    <li class="nav-item">
                        <a href="{{ route('folders.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Carpetas
                            </p>
                        </a>
                    </li>
                @endcan

                @can('assigns.index')
                    <li class="nav-item">
                        <a href="{{ route('assigns.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-walking"></i>
                            <p>
                                Asignaciones
                            </p>
                        </a>
                    </li>
                @endcan

                @can('observeds.index')
                    <li class="nav-item">
                        <a href="{{ route('observeds.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-search"></i>
                            <p>
                                Observadas
                            </p>
                        </a>
                    </li>
                @endcan

                @can('approveds.index')
                    <li class="nav-item">
                        <a href="{{ route('approveds.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Aprobadas
                            </p>
                        </a>
                    </li>
                @endcan

                @can('rejecteds.index')
                    <li class="nav-item">
                        <a href="{{ route('rejecteds.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-times"></i>
                            <p>
                                Rechazadas
                            </p>
                        </a>
                    </li>
                @endcan

                @can('disbursements.index')
                    <li class="nav-item">
                        <a href="{{ route('disbursements.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>
                                Desembolsadas
                            </p>
                        </a>
                    </li>
                @endcan

                @can('clients.index')
                    <li class="nav-item">
                        <a href="{{ route('clients.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Clientes
                            </p>
                        </a>
                    </li>
                @endcan

                @can('personals.index')
                    <li class="nav-item">
                        <a href="{{ route('personals.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-check"></i>
                            <p>
                                Ref. Personal
                            </p>
                        </a>
                    </li>
                @endcan

                @can('commercials.index')
                    <li class="nav-item">
                        <a href="{{ route('commercials.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Ref. Comercial
                            </p>
                        </a>
                    </li>
                @endcan

                @can('caedecs.index')
                    <li class="nav-item">
                        <a href="{{ route('caedecs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                CAEDEC
                            </p>
                        </a>
                    </li>
                @endcan

                @can('businesses.index')
                    <li class="nav-item">
                        <a href="{{ route('businesses.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Actividad Economica
                            </p>
                        </a>
                    </li>
                @endcan

                @can('loans.index')
                    <li class="nav-item">
                        <a href="{{ route('loans.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Prestamos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('residences.index')
                    <li class="nav-item">
                        <a href="{{ route('residences.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Croquis Domicilio
                            </p>
                        </a>
                    </li>
                @endcan

                @can('jobs.index')
                    <li class="nav-item">
                        <a href="{{ route('jobs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Croquis Negocio
                            </p>
                        </a>
                    </li>
                @endcan

                @can('assets.index')
                    <li class="nav-item">
                        <a href="{{ route('assets.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Activos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('passives.index')
                    <li class="nav-item">
                        <a href="{{ route('passives.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Pasivos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('works.index')
                    <li class="nav-item">
                        <a href="{{ route('works.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Bienes de Negocio
                            </p>
                        </a>
                    </li>
                @endcan

                @can('families.index')
                    <li class="nav-item">
                        <a href="{{ route('families.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Bienes de Familia
                            </p>
                        </a>
                    </li>
                @endcan

                @can('products.index')
                    <li class="nav-item">
                        <a href="{{ route('products.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Productos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('items.index')
                    <li class="nav-item">
                        <a href="{{ route('items.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Insumos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('inventories.index')
                    <li class="nav-item">
                        <a href="{{ route('inventories.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Inventarios
                            </p>
                        </a>
                    </li>
                @endcan

                @can('documents.index')
                    <li class="nav-item">
                        <a href="{{ route('documents.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Recepcion de Doc
                            </p>
                        </a>
                    </li>
                @endcan

                @can('children.index')
                    <li class="nav-item">
                        <a href="{{ route('children.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Hijos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('payments.index')
                    <li class="nav-item">
                        <a href="{{ route('payments.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Comportamiento de Pago
                            </p>
                        </a>
                    </li>
                @endcan

                @can('debts.index')
                    <li class="nav-item">
                        <a href="{{ route('debts.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Endedudamiento
                            </p>
                        </a>
                    </li>
                @endcan

                @can('sales.index')
                    <li class="nav-item">
                        <a href="{{ route('sales.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Comportamiento de Ventas
                            </p>
                        </a>
                    </li>
                @endcan

                @can('mubs.index')
                    <li class="nav-item">
                        <a href="{{ route('mubs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                MUB
                            </p>
                        </a>
                    </li>
                @endcan

                @can('mubs.index')
                    <li class="nav-item">
                        <a href="{{ route('cmubs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Aclaraciones MUB
                            </p>
                        </a>
                    </li>
                @endcan

                @can('gmvs.index')
                    <li class="nav-item">
                        <a href="{{ route('gmvs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Gastos y Mantenimineto de Vehiculo
                            </p>
                        </a>
                    </li>
                @endcan

                @can('ppsifs.index')
                    <li class="nav-item">
                        <a href="{{ route('ppsifs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Personal Percibe Salario Incluye Familia
                            </p>
                        </a>
                    </li>
                @endcan

                @can('gfos.index')
                    <li class="nav-item">
                        <a href="{{ route('gfos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Detalle de Gastos Fijos Operativos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('gfs.index')
                    <li class="nav-item">
                        <a href="{{ route('gfs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Detalle de Gastos Familiares
                            </p>
                        </a>
                    </li>
                @endcan

                @can('cdgs.index')
                    <li class="nav-item">
                        <a href="{{ route('cdgs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Aclaraciones de Gastos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('ois.index')
                    <li class="nav-item">
                        <a href="{{ route('ois.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Otros Ingresos
                            </p>
                        </a>
                    </li>
                @endcan

                @can('acns.index')
                    <li class="nav-item">
                        <a href="{{ route('acns.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Activo CN
                            </p>
                        </a>
                    </li>
                @endcan

                @can('afns.index')
                    <li class="nav-item">
                        <a href="{{ route('afns.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Activo FN
                            </p>
                        </a>
                    </li>
                @endcan

                @can('oans.index')
                    <li class="nav-item">
                        <a href="{{ route('oans.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Otros Activos N
                            </p>
                        </a>
                    </li>
                @endcan

                @can('afs.index')
                    <li class="nav-item">
                        <a href="{{ route('afs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Activos de la Familia
                            </p>
                        </a>
                    </li>
                @endcan

                @can('oafs.index')
                    <li class="nav-item">
                        <a href="{{ route('oafs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Otros Activos F
                            </p>
                        </a>
                    </li>
                @endcan

                @can('cbals.index')
                    <li class="nav-item">
                        <a href="{{ route('cbals.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Aclaraciones de Balance
                            </p>
                        </a>
                    </li>
                @endcan

                @can('ddgs.index')
                    <li class="nav-item">
                        <a href="{{ route('ddgs.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Detalle de garantia
                            </p>
                        </a>
                    </li>
                @endcan

                @can('members.index')
                    <li class="nav-item">
                        <a href="{{ route('members.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Participates
                            </p>
                        </a>
                    </li>
                @endcan

                @can('crnas.index')
                    <li class="nav-item">
                        <a href="{{ route('crnas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Recomendaciones
                            </p>
                        </a>
                    </li>
                @endcan

                @can('dges.index')
                    <li class="nav-item">
                        <a href="{{ route('dges.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Datos de la empresa
                            </p>
                        </a>
                    </li>
                @endcan

                @can('icos.index')
                    <li class="nav-item">
                        <a href="{{ route('icos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Ingresos Corrientes
                            </p>
                        </a>
                    </li>
                @endcan

                @can('gcos.index')
                    <li class="nav-item">
                        <a href="{{ route('gcos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Gastos Corrientes
                            </p>
                        </a>
                    </li>
                @endcan


                {{-- Users --}}

                @can('usrfolders.index')
                    <li class="nav-item">
                        <a href="{{ route('usrfolders.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Carpetas
                            </p>
                        </a>
                    </li>
                @endcan

                @hasrole('Encargado Sucursal|Asesor')
                    <li class="nav-item">
                        <a href="{{ route('folders.regist') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Carpetas Registradas
                            </p>
                        </a>
                    </li>
                @endrole
                @hasrole('Comercial|Encargado Sucursal|Encargado Nacional')
                    <li class="nav-item">
                        <a href="{{ route('folder.assign') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Carpetas Asignadas
                            </p>
                        </a>
                    </li>
                @endrole
                @hasrole('Encargado Sucursal|Asesor')
                    <li class="nav-item">
                        <a href="{{ route('folders.comercial') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Carpetas de Comercial
                            </p>
                        </a>
                    </li>
                @endrole
                @hasrole('Encargado Sucursal|Asesor')
                    <li class="nav-item">
                        <a href="{{ route('folders.nacional') }}" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Carpetas de Nacional
                            </p>
                        </a>
                    </li>
                @endrole
                @hasrole('Encargado Sucursal|Asesor')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Encargados De Agencia
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        @if ( Auth::user()->id != 6)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('folders.carla') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Carla</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if ( Auth::user()->id != 7)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('folders.alex') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alex</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if ( Auth::user()->id != 8)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('folders.roxana') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Roxana</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if ( Auth::user()->id != 9)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('folders.mariela') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mariela</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if ( Auth::user()->id != 10)
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('folders.veronica') }}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Veronica</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                    </li>
                @endrole

                @hasrole('Operaciones')
                    <li class="nav-item">
                        <a href="{{ route('folders.disbursement') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>
                                Carpetas Desembolsadas
                            </p>
                        </a>
                    </li>
                @endrole
            </ul>
        </nav>
    </div>
</aside>

