<nav class="navbar navbar-expand navbar-dark bg-primary" style="background-color: #7F948A !important">
    <a class="sidebar-toggle text-light mr-3"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="#"><i class="fa fa-code-branch"></i> Navbar</a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <i class="fa fa-user"></i> {{\Illuminate\Support\Facades\Auth::user()->name}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="d-flex">
    <nav class="sidebar bg-dark" style="background: #000 !important">
        <ul class="list-unstyled">
            @if(Auth::check() && Auth::user()->rolId === 1)
            <li>
                <a href="#submenu1" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Modulo  Empresa</a>
                <ul id="submenu1" class="list-unstyled collapse">
        <!-- Proveedores-->
                    <li>
                        <a href="#submenu11" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Proveedores</a>
                        <ul id="submenu11" class="list-unstyled collapse">
                            <li><a href={{url('proveedorcrear')}}>Registrar Proveedor {{\Illuminate\Support\Facades\Auth::user()->rolId}}</a></li>
                            <li><a href={{url('proveedor')}}>Lista de Proveedores</a></li>
                        </ul>
                    </li>

                    <li>
                <a href="#submenu12" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Usuarios</a>
                <ul id="submenu12" class="list-unstyled collapse">
                    <li><a href={{url('usuariocrear')}}>Registrar Usuario</a></li>
                    <li><a href={{url('usuario')}}>Lista de Usuarios</a></li>
                </ul>
                    </li>

                    <li>
                <a href="#submenu13" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i>Empresa</a>
                <ul id="submenu13" class="list-unstyled collapse">
                    <li><a href="#">Editar Empresa</a></li>
                    <li><a href="#">Lista de Usuarios</a></li>
                </ul>
                    </li>



                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>
            @endif

            <li>
                <a href="#submenu2" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Modulo Ventas</a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>

            <li>
                <a href="#submenu3" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Modulo Compras</a>
                <ul id="submenu3" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>

                @if(Auth::check() && Auth::user()->rolId === 1)

                <li>
                <a href="#submenu4" data-toggle="collapse"><i class="fa fa-fw fa-address-card"></i> Modulo Informe</a>
                <ul id="submenu4" class="list-unstyled collapse">
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                    <li><a href="#">Submenu Item</a></li>
                </ul>
            </li>
                @endif
        </ul>
    </nav>
