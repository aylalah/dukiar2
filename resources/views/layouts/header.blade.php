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
                                        <img src="{{url('/')}}/assets/images/users/{{ Auth::user()->image_path}}" alt="user" class="rounded-circle">  {{ Auth::user()->name }} <span class="caret"></span>                                     
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

                            @if (Auth::user()->role_id == '1')
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
                                        <a href="#"><i class="fas fa-exchange-alt"></i>Payment</a>
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
                            @endif

                            @if (Auth::user()->role_id == '2')
                            <li class="has-submenu">
                                    
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
                                                             
                            @endif

                            @if (Auth::user()->role_id == '3')
                           
                                <li class="has-submenu">
                                    <a href="#"><i class="fas fa-exchange-alt"></i>Payment</a>
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
                                    <a href="#"><i class="fas fa-cogs"></i>Settings</a>
                                    <ul class="submenu">
                                        {{-- <li><a href="email-inbox">Company Category</a></li> --}}
                                        <li><a href="{{route('role')}}">Role</a></li>
                                        <li><a href="{{route('center')}}">B Center</a></li>
                                        {{-- <li><a href="email-read">Club Settings</a></li> --}}
                                        {{-- <li><a href="email-compose">Processing</a></li> --}}
                                    </ul>
                                </li>
                                
                            @endif

                            @if (Auth::user()->role_id == '4')
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
                            @endif

                            @if (Auth::user()->role_id == '5')
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
                            @endif

                            @if (Auth::user()->role_id == '6')
                                
                            @endif

                            @if (Auth::user()->role_id == '7')
                                
                            @endif

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div> <!-- end container-fluid -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->