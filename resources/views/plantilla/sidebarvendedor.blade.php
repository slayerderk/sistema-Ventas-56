<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa fa-desktop"></i> Escritorio</a>
                    </li>
                    <li class="nav-title">
                        Mantenimiento
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Ventas</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=5" class="nav-item">
                                <a class="nav-link" href="#"> Ventas</a>
                            </li>
                            <li @click="menu=6" class="nav-item">
                                <a class="nav-link" href="#"> Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-bar-chart"></i> Reportes</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=10" class="nav-item">
                                <a class="nav-link" href="#"> Reporte Ventas</a>
                            </li>
                        </ul>
                    </li>
                    <li @click="menu=11" class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-plus-square"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
                    </li>
                    <li @click="menu=12" class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-info-circle"></i> Acerca de...</a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>