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
                 <!-- <li class="menu-title">
                     <span>Main Menu</span>
                 </li> -->

                 <!-- Dashboard -->
                 <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                     <a href="{{ route('dashboard') }}"><i class="feather-home"></i> <span> Dashboard</span></a>
                 </li>

                 <!-- Student Enquiry -->
                 <li class="{{ Route::currentRouteName() == 'school_student.enquiry' ? 'active' : '' }}">
                     <a href="{{ route('school_student.enquiry') }}"><i class="fas fa-search"></i> <span> Student Enquiry</span></a>
                 </li>

                 <!-- Student Management -->
                 <li class="submenu">
                     <a href="#"><i class="fas fa-users-cog"></i> <span> Student Management</span><span class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="{{ route('managment.promote_detention') }}"><i class="fas fa-users"></i> Promotion / Detention</a></li>
                         <li><a href="{{ route('managment.termination') }}"><i class="fas fa-user-times"></i> Termination / Active-Inactive</a></li>
                         <li><a href="{{ route('managment.assign_section') }}"><i class="fas fa-chalkboard-teacher"></i> Assign Section</a></li>
                         <li><a href="#"><i class="fas fa-sort-numeric-up"></i> Assign Roll Number</a></li>
                         <li><a href="{{ route('school_student.add') }}"><i class="fas fa-user-plus"></i> Add New Student</a></li>
                         <li><a href="{{ route('school_student.edit') }}"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
                         <li><a href="#"><i class="fas fa-cogs"></i> Assign House</a></li>
                         <li><a href="{{ route('managment.subject_assign') }}"><i class="fas fa-book-open"></i> Assign Subjects</a></li>
                     </ul>
                 </li>

                 <!-- Student -->
                 <li class="{{ Route::currentRouteName() == 'school_student.index' ? 'active' : '' }}">
                     <a href="{{ route('school_student.index') }}"><i class="fas fa-user-graduate"></i> <span> Student</span></a>
                 </li>

                 <!-- Staff Enquiry -->
                 <li class="">
                     <a href=""><i class="fas fa-search"></i> <span> Staff Enquiry</span></a>
                 </li>

                 <!-- Staff Management -->
                 <li class="submenu">
                     <a href="#"><i class="fas fa-users-cog"></i> <span> Staff Management</span><span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="#"><i class="fas fa-user-plus"></i> Add New Staff</a></li>
                         <li><a href="#"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
                         <li><a href="#"><i class="fas fa-user-times"></i> Termination / Active-Inactive</a></li>
                     </ul>
                 </li>

                 <!-- Staff -->
                 <li class="submenu">
                     <a href="#"><i class="fas fa-users"></i> <span> Staff</span></a>
                 </li>

                 <!-- Attendance -->
                 <!-- <li class="submenu">
                     <a href="#"><i class="fas fa-calendar-check"></i> <span> Attendance</span></a>
                 </li> -->
                 <li class="submenu">
                     <a href="#"><i class="fas fa-calendar-check"></i> <span> Attendance</span><span
                             class="menu-arrow"></span></a>
                             <ul>
                                <li><a href="{{ route('attendence.staff') }}"><i class="fas fa-users"></i> Staff Attendance</a></li>
                                <li><a href="{{ route('attendence.student') }}"><i class="fas fa-chalkboard-teacher"></i> Student Attendance</a></li>
                                <li><a href="{{ route('attendence.holiday') }}"><i class="fas fa-calendar-times"></i> Holiday Declaration</a></li>
                            </ul>

                 </li>

                 <!-- Syllabus -->
                 <li>
                     <a href="exam.html"><i class="fa fa-book-open"></i> <span> Syllabus</span></a>
                 </li>

                 <!-- Admit Card -->
                 <li>
                     <a href="{{ route('student.admit') }}"><i class="far fa-id-card"></i> <span> Admit Card</span></a>
                 </li>

                 <!-- Time Table -->
                 <li>
                     <a href="{{ route('school_student.timetable')}}"><i class="far fa-calendar-alt"></i> <span> Time Table</span></a>
                 </li>

                 <!-- Result -->
                 <li>
                     <a href="{{ route('student.result') }}"><i class="fas fa-chart-line"></i> <span> Result</span></a>
                 </li>

                 <!-- Sub-Admin -->
                 <li>
                     <a href="blank-page.html"><i class="fas fa-user-shield"></i> <span> Sub-Admin</span></a>
                 </li>

                 <!-- Annual Calendar -->
                 <li>
                     <a href="sports.html"><i class="fa fa-calendar-check"></i> <span> Annual Calendar</span></a>
                 </li>

                 <!-- Certificate -->
                 <li>
                     <a href="hostel.html"><i class="fas fa-certificate"></i> <span> Certificate</span></a>
                 </li>

                 <!-- Ticket -->
                 <li>
                     <a href="transport.html"><i class="fas fa-ticket-alt"></i> <span> Ticket</span></a>
                 </li>

                 <!-- Fee -->
                 <li class="submenu">
                     <a href="#"><i class="fas fa-wallet"></i> <span> Fee</span></a>
                 </li>

                 <!-- Transportation -->
                 <li>
                     <a href="transport.html"><i class="fas fa-bus"></i> <span> Transportation</span></a>
                 </li>

                 <!-- Settings -->
                 <li class="submenu">
                     <a href="#"><i class="fas fa-cogs"></i> <span> Settings</span><span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a href="#"><i class="fas fa-cogs"></i> Class Groups</a></li>
                         <li><a href="#"><i class="fas fa-cogs"></i> Subject Groups</a></li>
                         <li><a href="#"><i class="fas fa-cogs"></i> Set Session</a></li>
                     </ul>
                 </li>

             </ul>
         </div>
     </div>
 </div>


 <!-- sidebar end -->