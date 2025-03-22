 <!-- header -->
 <div class="header">
            
           
            <div class="header-left">
                <a href="{{ route('admin.dashboard') }}" class="logo">
               <h3 class="text-primary">uBuddy</h3>
                <!-- <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{ asset('assets/img/logo.webp') }}" alt="Logo"> -->
                
                </a>
                <a href="{{ route('admin.dashboard') }}" class="logo logo-small">
                    <img src="{{ asset('assets/img/logo-small.webp') }}" alt="Logo" width="30" height="30">
                </a>

            </div>

            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">
                <!-- <li class="nav-item dropdown noti-dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/icons/header-icon-01.svg') }}" alt>
                    </a>
                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-lr me-2"></i>English</a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-bl me-2"></i>Francais</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                            </div>
                        </div>
                    </div>
                </li> -->

                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/icons/header-icon-05.svg')}}" alt>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software
                                                        Inc</span> has sent you a invoice in the amount of <span
                                                        class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent
                                                    a cancellation request <span class="noti-title">Apple iPhone
                                                        XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software
                                                        Inc</span> added a new product <span class="noti-title">Apple
                                                        MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="{{ asset('assets/img/icons/header-icon-04.svg')}}" alt>
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                        <img class="rounded-circle" src="{{ asset('assets/img/profiles/profile_pic.png') }}" width="31" alt="{{ Auth::user()->name }}">
                        <div class="user-text">
                            @if(Auth::check())
                                <div class="user-text">
                                    <h6>{{ Auth::user()->name }}</h6>
                                    <p class="text-muted text-capitalize mb-0">{{ Auth::user()->type }}</p>
                                </div>
                            @endif
                                
                               
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                   
                    <x-responsive-nav-link :href="route('profile.edit')" class="dropdown-item">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>

        </div>

<!-- sidebar -->
 
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}"><i class="feather-grid"></i> <span> Dashboard</span></a>
                        </li>

                        <li class="{{ Route::currentRouteName() == 'school_student.index' ? 'active' : '' }}">
                            <a href="{{ route('school_student.index') }}"><i class="fas fa-graduation-cap"></i> <span> Student</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Staff</span></a>
                           
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Attendance</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="departments.html"><i class="far fa-calendar-alt"></i>Staff Attendance</a></li>
                                <li><a href="departments.html"><i class="far fa-calendar"></i>Student Attendance</a></li>
                                <li><a href="departments.html"><i class="far fa-calendar"></i>Holiday Declaration</a></li>
                               
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Daily Schedule</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-money-bill-alt"></i> <span> Fee</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="far fa-file-alt"></i> <span> Admit Card</span></a>
                        </li>
                        <li>
                            <a href="holiday.html"><i class="fa fa-camera"></i> <span>Gallery</span></a>
                        </li>
                        <li>
                            <a href="fees.html"><i class="fas fa-bell"></i> <span>Notifications</span></a>
                        </li>
                        <li>
                            <a href="exam.html"><i class="fa fa-book"></i> <span>Syllabus</span></a>
                        </li>
                       
                        <li>
                            <a href="time-table.html"><i class="far fa-calendar-alt"></i> <span>Time Table</span></a>
                        </li>
                        <li>
                            <a href="library.html"><i class="far fa-file-alt"></i> <span>Result</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="far fa-bell"></i> <span> Reminder</span></a>
                        </li>
                        <li>
                            <a href="settings.html"><i class="far fa-comments"></i> <span>Chat</span></a>
                        </li>
                       
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-shield"></i> <span>Teacher Authorization </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.html"><i class="fas fa-money-bill-wave"></i> Fees</a></li>
                                <li><a href="register.html"><i class="fas fa-users"></i> Student List</a></li>
                                <li><a href="forgot-password.html"><i class="fas fa-book"></i> Subject</a></li>
                                <li><a href="error-404.html"><i class="fas fa-poll"></i> Result</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.html"><i class="fas fa-user-shield"></i> <span>Sub-Admin Panel</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Others</span>
                        </li>
                        <li>
                            <a href="sports.html"><i class="fa fa-clipboard"></i> <span>Home Work</span></a>
                        </li>
                        <li>
                            <a href="hostel.html"><i class="fas fa-question-circle"></i> <span>Enquiry</span></a>
                        </li>
                        <li>
                            <a href="transport.html"><i class="far fa-file-alt"></i> <span>Transfer Certificate</span></a>
                        </li>
                       
                        <li class="submenu">
                            <a href="#"><i class="fa fa-clipboard"></i> <span>Fees 1</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Promote Student</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-shield"></i> <span>User Authentication</span></a>
                        </li>
                       
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span>Students Registration  </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome.html">Registration Fee</a></li>
                                <li><a href="icon-feather.html">Admission Fee</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
