        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo" style="width: 1000px;">
                            <a href="{{ route('dashboard.index') }}"><img src="{{asset('logo.png')}}" alt="Logo" srcset="" style="width: 100%; height: 100%"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item active " style="background-color: #f5fcf0">
                            <a href="{{ route('dashboard.index') }}" class='sidebar-link' style="background-color: #7F9B6E">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('pelanggan.index') }}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Data Pelanggan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('kategori.index') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Data Katogori Produk</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('produk.index') }}" class='sidebar-link'>
                                <i class="bi bi-archive-fill"></i>
                                <span>Data Produk</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admintransaksi.index') }}" class='sidebar-link'>
                                <i class="bi bi-cash-stack"></i>
                                <span>Transaksi Pelanggan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('omzet.index') }}" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Omzet Penjualan</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{url('logout')}}" class='sidebar-link'>
                                <i class="bi bi-box-arrow-in-left"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>