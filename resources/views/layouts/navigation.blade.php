 <!-- header -->
 <div class="header">


     <div class="header-left " >
         <a href="{{ route('admin.dashboard') }}" class="logo">
             <h3 class="text-primary">uBuddy</h3>
             <!-- <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{ asset('assets/img/logo.webp') }}" alt="Logo"> -->

         </a>
         <!-- <a href="{{ route('admin.dashboard') }}" class="logo logo-small">
             <img src="{{ asset('assets/img/logo-small.webp') }}" alt="Logo" width="30" height="30">
         </a> -->

     </div>

     <div class="menu-toggle">
         <a href="javascript:void(0);" id="toggle_btn">
             <!-- <i class="fas fa-bars"></i> -->
            <img src="{{ asset('assets/img/icons/sidebar.png') }}" alt="" class="white-icon">
         </a>
     </div>

     <!-- <div class="top-nav-search">
         <form>
             <input type="text" class="form-control" placeholder="Search here">
             <button class="btn" type="submit"><i class="fas fa-search"></i></button>
         </form>
     </div> -->


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
<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <!-- Dashboard -->
                <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><span> Dashboard</span></a>
                </li>

                <!-- Student Enquiry -->
                <li class="{{ Route::currentRouteName() == 'school_student.enquiry' ? 'active' : '' }}">
                    <a href="{{ route('school_student.enquiry') }}"><span> Student Enquiry</span></a>
                </li>

                <!-- Student Management -->
                <li class="submenu {{ in_array(Route::currentRouteName(), ['managment.promote_detention', 'managment.termination', 'managment.assign_section', 'managment.subject_assign', 'school_student.edit','student.admit.rollno']) ? 'active' : '' }}">
                    <a href="#"><span> Student Management</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('managment.promote_detention') }}" class="{{ Route::currentRouteName() == 'managment.promote_detention' ? 'active' : '' }}"><span> Promotion / Detention</span></a></li>
                        <li><a href="{{ route('managment.termination') }}" class="{{ Route::currentRouteName() == 'managment.termination' ? 'active' : '' }}"><span> Termination / Active-Inactive</span></a></li>
                        <li><a href="{{ route('student.admit.rollno') }}" class="{{ Route::currentRouteName() == 'student.admit.rollno' ? 'active' : 'student.admit.rollno' }}"><span> Assign Roll No.</span></a></li>
                        <li><a href="{{ route('school_student.assgin_house') }}" class="{{ Route::currentRouteName() == 'school_student.assgin_house' ? 'active' : '' }}"><span> Assign House</span></a></li>
                        <li><a href="{{ route('managment.assign_section') }}" class="{{ Route::currentRouteName() == 'managment.assign_section' ? 'active' : '' }}"><span> Assign Section</span></a></li>
                        <li><a href="{{ route('school_student.editstudent') }}" class="{{ Route::currentRouteName() == 'school_student.editstudent' ? 'active' : '' }}"><span> Edit Profile</span></a></li>
                        <li><a href="{{ route('managment.subject_assign') }}" class="{{ Route::currentRouteName() == 'managment.subject_assign' ? 'active' : '' }}"><span> Assign Subjects</span></a></li>
                    </ul>
                </li>

                <!-- Student -->
                <li class="{{ Route::currentRouteName() == 'school_student.index' ? 'active' : '' }}">
                    <a href="{{ route('school_student.index') }}"><span> Student</span></a>
                </li>

                <!-- Staff Enquiry -->
                <li class="{{ Route::currentRouteName() == 'staff.enquiry' ? 'active' : '' }}">
                    <a href="#"><span> Staff Enquiry</span></a>
                </li>

                <!-- Staff Management -->
                <li class="submenu {{ in_array(Route::currentRouteName(), ['staff.add', 'staff.edit', 'staff.termination']) ? 'active' : '' }}">
                    <a href="#"><span> Staff Management</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#" class="{{ Route::currentRouteName() == 'staff.add' ? 'active' : '' }}"><span> Add New Staff</span></a></li>
                        <li><a href="#" class="{{ Route::currentRouteName() == 'staff.edit' ? 'active' : '' }}"><span> Edit Profile</span></a></li>
                        <li><a href="#" class="{{ Route::currentRouteName() == 'staff.termination' ? 'active' : '' }}"><span> Termination / Active-Inactive</span></a></li>
                    </ul>
                </li>

                <!-- Attendance -->
                <li class="submenu {{ in_array(Route::currentRouteName(), ['attendence.staff', 'attendence.student', 'attendence.holiday']) ? 'active' : '' }}">
                    <a href="#"><span> Attendance</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('attendence.staff') }}" class="{{ Route::currentRouteName() == 'attendence.staff' ? 'active' : '' }}"><span> Staff Attendance</span></a></li>
                        <li><a href="{{ route('attendence.student') }}" class="{{ Route::currentRouteName() == 'attendence.student' ? 'active' : '' }}"><span> Student Attendance</span></a></li>
                        <li><a href="{{ route('attendence.holiday') }}" class="{{ Route::currentRouteName() == 'attendence.holiday' ? 'active' : '' }}"><span> Holiday Declaration</span></a></li>
                    </ul>
                </li>

                <!-- Syllabus -->
                <li class="{{ Route::currentRouteName() == 'student.syllabus' ? 'active' : '' }}">
                    <a href="{{ route('student.syllabus') }}"><span> Syllabus</span></a>
                </li>

                <!-- Admit Card -->
                <li class="{{ Route::currentRouteName() == 'student.admit' ? 'active' : '' }}">
                    <a href="{{ route('student.admit') }}"><span> Admit Card</span></a>
                </li>

                <!-- Time Table -->
                <li class="{{ Route::currentRouteName() == 'school_student.timetable' ? 'active' : '' }}">
                    <a href="{{ route('school_student.timetable') }}"><span> Time Table</span></a>
                </li>

                <!-- Result -->
                <li class="{{ Route::currentRouteName() == 'student.result' ? 'active' : '' }}">
                    <a href="{{ route('student.result') }}"><span> Result</span></a>
                </li>

                <!-- Sub-Admin -->
                <li class="{{ Route::currentRouteName() == 'subadmin' ? 'active' : '' }}">
                    <a href="blank-page.html"><span> Sub-Admin</span></a>
                </li>

                <!-- Annual Calendar -->
                <li class="{{ Route::currentRouteName() == 'annual.calendar' ? 'active' : '' }}">
                    <a href="sports.html"><span> Annual Calendar</span></a>
                </li>

                <!-- Certificate -->
                <li class="{{ Route::currentRouteName() == 'certificate' ? 'active' : '' }}">
                    <a href="hostel.html"><span> Certificate</span></a>
                </li>

                <!-- Ticket -->
                <li class="{{ Route::currentRouteName() == 'ticket' ? 'active' : '' }}">
                    <a href="transport.html"><span> Ticket</span></a>
                </li>

                <!-- Fee -->
                <li class="submenu {{ in_array(Route::currentRouteName(), ['fee.add', 'fee.view']) ? 'active' : '' }}">
                    <a href="#"><span> Fee</span></a>
                </li>

                <!-- Transportation -->
                <li class="{{ Route::currentRouteName() == 'transportation' ? 'active' : '' }}">
                    <a href="transport.html"><span> Transportation</span></a>
                </li>

                <!-- Settings -->
                <li class="submenu {{ in_array(Route::currentRouteName(), ['settings.class_groups', 'settings.subject_groups', 'settings.set_session']) ? 'active' : '' }}">
                    <a href="#"><span> Settings</span><span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="#" class="{{ Route::currentRouteName() == 'settings.class_groups' ? 'active' : '' }}"><span> Class Groups</span></a></li>
                        <li><a href="#" class="{{ Route::currentRouteName() == 'settings.subject_groups' ? 'active' : '' }}"><span> Subject Groups</span></a></li>
                        <li><a href="#" class="{{ Route::currentRouteName() == 'settings.set_session' ? 'active' : '' }}"><span> Set Session</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


 <!-- sidebar end -->