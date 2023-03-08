<nav class="bottom-navbar">
    <div class="container">
        <ul class="nav page-navigation">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            
            {{-- <li class="nav-item mega-menu">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Aduan</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <div class="col-group-wrapper row">
                        <div class="col-group col-md-4">
                            <div class="row">
                                <div class="col-12">
                                    <p class="category-heading">Senarai Borang</p>
                                    <div class="submenu-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('gov-mov-assets-damage-rpt.create') }}">
                                                            Borang Laporan Kerosakan Infrastruktur (BLKI)
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="{{ route('infra-damage-rpt.create') }}">
                                                            Borang Laporan Kerosakan Aset Alih Kerajaan
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Senarai Aduan</p>
                            <ul class="submenu-item">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/icons/mdi.html">Senarai Aduan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li> --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Complaint Form</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('gov-mov-assets-damage-rpt.create') }}">
                                Borang Laporan Kerosakan Infrastruktur (BLKI)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{ route('infra-damage-rpt.create') }}">
                                Borang Laporan Kerosakan Aset Alih Kerajaan
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="pages/widgets/widgets.html">
                    <i class="mdi mdi-airplay menu-icon"></i>
                    <span class="menu-title">Widgets</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-account menu-icon"></i>
                    <span class="menu-title">User Panel</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="">Manage Complaints</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mega-menu">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-account-key menu-icon"></i>
                    <span class="menu-title">Admin Panel</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <div class="col-group-wrapper row">
                        <div class="col-group col-md-3">
                            <p class="category-heading">#</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="{{ route('departments.index') }}">Manage Departments</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Manage Complaints</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Settings</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Analytics and Reporting</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">General Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Help and Support</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Integration Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Notification Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">System Configuration</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">System Maintenance</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Access Control</p>
                            <ul class="submenu-item">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/maps/vector-map.html">Manage Permissions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/maps/google-maps.html">Manage Roles</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Reports</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Generate Report</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-help-circle-outline menu-icon"></i>
                  <span class="menu-title">Help/Support</span>
                  <i class="menu-arrow"></i></a>
                <div class="submenu">
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Documentation</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">FAQs</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Contact Support</a></li>
                  </ul>
                </div>
              </li>
            {{-- <li class="nav-item mega-menu">
                <a href="#" class="nav-link">
                    <i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title">Tetapan</span>
                    <i class="menu-arrow"></i></a>
                <div class="submenu">
                    <div class="col-group-wrapper row">
                        <div class="col-group col-md-3">
                            <p class="category-heading">User Pages</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login
                                        2</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/register-2.html">Register 2</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/lock-screen.html">Lockscreen</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Error Pages</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-400.html">400</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-505.html">505</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">E-commerce</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/invoice.html">Invoice</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/pricing-table.html">Pricing Table</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">General</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/search-results.html">Search Results</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/profile.html">Profile</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/timeline.html">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News
                                        grid</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="pages/samples/portfolio.html">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li> --}}
        </ul>
    </div>
</nav>
