 <!-- header -->
 <div class="header">


     <div class="header-left">
         <!-- <a href="{{ route('admin.dashboard') }}" class="logo">
                    <img src="{{ asset('assets/img/logo.webp') }}" alt="Logo">
                </a> -->
         <a href="{{ route('admin.dashboard') }}" class="logo">
             <h3 class="text-primary">uBuddy</h3>
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
         <li class="nav-item dropdown noti-dropdown language-drop me-2">
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
         </li>

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
                     <img class="rounded-circle" src="{{ asset('assets/img/profiles/profile_pic.png') }}" width="31" alt="">
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
                 <form method="POST" action="{{ route('admin.logout') }}">
                     @csrf

                     <a class="dropdown-item" href="route('admin.logout')"
                         onclick="event.preventDefault();
                                this.closest('form').submit();">
                         {{ __('Log Out') }}
                     </a>

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
                <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="feather-grid"></i> <span>Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-building"></i> <span>School</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <!-- <li class="{{ Route::currentRouteName() == 'subadmin.index' ? 'active' : '' }}">
                            <a href="{{ route('subadmin.index') }}">SubAdmin Details</a>
                        </li> -->
                        <li class="{{ Route::currentRouteName() == 'schooladmin.index' ? 'active' : '' }}">
                            <a href="{{ route('schooladmin.index') }}"><i class="fas fa-school"></i> School List</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'school-admin.create' ? 'active' : '' }}">
                            <a href="{{ route('school-admin.create') }}"><i class="fas fa-plus-circle"></i> Add New School</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{ route('schooladmin.index') }}"><i class="fas fa-cogs"></i> Configuration Panel</a>
                </li>
                <li class="">
                    <a href="{{ route('schooladmin.index') }}"><i class="fas fa-plug"></i> Module Configuration</a>
                </li>
                <li class="">
                    <a href="{{ route('schooladmin.index') }}"><i class="fas fa-language"></i> School Medium</a>
                </li>
                <li class="">
                    <a href="{{ route('schooladmin.index') }}"><i class="fas fa-clipboard-list"></i> School Board</a>
                </li>
            </ul>
        </div>
    </div>
</div>
