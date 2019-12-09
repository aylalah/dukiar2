		<!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        
                        <a href="index" class="logo">
                            <img src="{{url('/')}}/assets/images/logoa.png" alt="" class="logo-small">
                            <img src="{{url('/')}}/assets/images/dloga.png" alt="" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="float-right list-unstyled mb-0 ">
                            
                            <li class="dropdown notification-list d-none d-sm-block">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0"> 
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form> 
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti-bell noti-icon"></i>
                                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                    <!-- item-->
                                    <h6 class="dropdown-item-text">
                                        Notifications (258)
                                    </h6>
                                    <div class="slimscroll notification-item-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                        </a>
                                    </div>
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>
                                </div>        
                            </li>
                            <li class="dropdown notification-list">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="{{url('/')}}/assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>                             
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i>Logout
                                        
                                    </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>                                                                    
                                </div>
                            </li>
                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link" id="mobileToggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>    
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                        	@yield('breadcrumb')
                            <div class="state-information">
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Total Gold 2317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Total Balance $ 2,317</div>
                                </div>
                                {{-- <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{url('admin/')}}">
                                    <i class="ti-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fas fa-user-tie"></i>People</a>
                                <ul class="submenu">
                                    <li><a href="{{route('userLog')}}">Users Log</a></li>
                                    <li><a href="{{route('adminLog')}}">Admin Log</a></li>
                                    {{-- <li><a href="{{route('adminLog')}}">Companies</a></li>
                                    <li><a href="{{route('adminLog')}}">Op Location</a></li> --}}
                                    <li><a href="email-compose"></a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fas fa-exchange-alt"></i>Transaction</a>
                                <ul class="submenu">
                                    <li><a href="{{route('transaction')}}">All Transaction</a></li>
                                    <li><a href="{{route('box')}}">Box ID</a></li>
                                    {{-- <li><a href="email-compose">XRF Operators</a></li>
                                    <li><a href="email-compose">Invoice</a></li>
                                    <li><a href="email-compose">Payment Approval</a></li>
                                    <li><a href="email-compose">Vault Reqeust</a></li>
                                    <li><a href="email-compose">Repot</a></li> --}}
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fas fa-truck"></i>Movement</a>
                                <ul class="submenu">
                                    {{-- <li><a href="email-inbox">Transfer Log </a></li>
                                    <li><a href="email-read">Logistics In</a></li>
                                    <li><a href="email-compose">Logistsic  Log</a></li>
                                    <li><a href="email-compose">Process tranf value</a></li>
                                    <li><a href="email-compose">process Log</a></li>
                                    <li><a href="email-compose">Logistsic in</a></li>
                                    <li><a href="email-compose">History</a></li> --}}
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="fas fa-cogs"></i>Settings</a>
                                <ul class="submenu">
                                    {{-- <li><a href="email-inbox">Company Category</a></li> --}}
                                    <li><a href="{{route('role')}}">Role</a></li>
                                    <li><a href="{{route('center')}}">B Center</a></li>
                                    {{-- <li><a href="email-read">Club Settings</a></li> --}}
                                    {{-- <li><a href="email-compose">Processing</a></li> --}}
                                </ul>
                            </li>

                            {{-- <li class="has-submenu">
                                <a href="#"><i class="ti-support"></i>UI Elements</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-alerts">Alerts</a></li>
                                            <li><a href="ui-buttons">Buttons</a></li>
                                            <li><a href="ui-badge">Badge</a></li>
                                            <li><a href="ui-cards">Cards</a></li>
                                            <li><a href="ui-carousel">Carousel</a></li>
                                            <li><a href="ui-dropdowns">Dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-grid">Grid</a></li>
                                            <li><a href="ui-images">Images</a></li>
                                            <li><a href="ui-lightbox">Lightbox</a></li>
                                            <li><a href="ui-modals">Modals</a></li>
                                            <li><a href="ui-pagination">Pagination</a></li>
                                            <li><a href="ui-popover-tooltips">Popover & Tooltips</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-progressbars">Progress Bars</a></li>
                                            <li><a href="ui-sweet-alert">Sweet-Alert</a></li>
                                            <li><a href="ui-tabs-accordions">Tabs &amp; Accordions</a></li>
                                            <li><a href="ui-typography">Typography</a></li>
                                            <li><a href="ui-video">Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-receipt"></i>Forms</a>
                                <ul class="submenu">
                                    <li><a href="form-elements">Elements</a></li>
                                    <li><a href="form-validation">Validation</a></li>
                                    <li><a href="form-advanced">Advanced</a></li>
                                    <li><a href="form-editors">Editors</a></li>
                                    <li><a href="form-uploads">File Upload</a></li>
                                    <li><a href="form-xeditable">Xeditable</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-menu-alt"></i>More</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="calendar">Calendar</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-material">Material Design</a></li>
                                            <li><a href="icons-ion">Ion Icons</a></li>
                                            <li><a href="icons-fontawesome">Font Awesome</a></li>
                                            <li><a href="icons-themify">Themify Icons</a></li>
                                            <li><a href="icons-dripicons">Dripicons</a></li>
                                            <li><a href="icons-typicons">Typicons Icons</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Tables </a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic">Basic Tables</a></li>
                                            <li><a href="tables-datatable">Data Table</a></li>
                                            <li><a href="tables-responsive">Responsive Table</a></li>
                                            <li><a href="tables-editable">Editable Table</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google"> Google Map</a></li>
                                            <li><a href="maps-vector"> Vector Map</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="rangeslider">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="session-timeout">Session Timeout</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-pie-chart"></i>Charts</a>
                                <ul class="submenu">
                                    <li><a href="charts-morris">Morris Chart</a></li>
                                    <li><a href="charts-chartist">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs">Chartjs Chart</a></li>
                                    <li><a href="charts-flot">Flot Chart</a></li>
                                    <li><a href="charts-c3">C3 Chart</a></li>
                                    <li><a href="charts-other">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-files"></i>Pages</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="pages-timeline">Timeline</a></li>
                                            <li><a href="pages-invoice">Invoice</a></li>
                                            <li><a href="pages-directory">Directory</a></li>
                                            <li><a href="pages-login">Login</a></li>
                                            <li><a href="pages-register">Register</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="pages-recoverpw">Recover Password</a></li>
                                            <li><a href="pages-lock-screen">Lock Screen</a></li>
                                            <li><a href="pages-blank">Blank Page</a></li>
                                            <li><a href="pages-404">Error 404</a></li>
                                            <li><a href="pages-500">Error 500</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div> <!-- end container-fluid -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->