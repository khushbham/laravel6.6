            <div class="vertical-menu">
                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="{{ route('admin_dashboard') }}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-calendar">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin_user') }}" class="waves-effect">
                                    <i class="bx bx-user"></i>
                                    <span key="t-chat">Users</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="bx bx-dollar"></i>
                                    <span key="t-file-manager">Fin. Reporting</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-pulse"></i>
                                    <span key="t-ecommerce">Sales Comp. Report</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#" key="t-products">Sales Compensation</a></li>
                                    <li><a href="#" key="t-product-detail">Days Remaining</a></li>
                                    <li><a href="#" key="t-orders">Settings</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>