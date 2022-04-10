<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            {{-- <a href="{{url('/')}}" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a> --}}
            {{-- <a href="{{url('/')}}" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a> --}}
            <div class="my-5">
                
            </div>
        </div>
        <!-- End Logobar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                
                <li >
                    <a href="{{ route('home') }}" >
                      <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ (Route::currentRouteName() === 'home' || Route::currentRouteName() === 'users.index') ? 'active' : '' }}">
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="basic"><span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/advanced.svg" class="img-fluid" alt="advanced"><span>Department</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="apps"><span>Employees</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/form_elements.svg" class="img-fluid" alt="form_elements"><span>Activities</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/chart.svg" class="img-fluid" alt="chart"><span>Holiday</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/icons.svg" class="img-fluid" alt="icons"><span>Events</span>
                    </a>
                </li>
                
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables"><span>Payroll</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="maps"><span>Account</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/widgets.svg" class="img-fluid" alt="widgets"><span>Report</span>
                    </a>
                </li>                                                                   
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>