<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="{{asset('/dashboard_assets')}}/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>Oculux</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{asset('/dashboard_assets')}}/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Louis Pierce</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href=""><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="active open"><a href="{{route('home')}}"><i class="icon-speedometer"></i><span>HR Dashboard</span></a></li>
                <li><a href="{{route('user.alluser')}}"><i class="icon-user"></i><span>Users</span></a></li>
                <li><a href="{{route('department.department')}}"><i class="icon-grid"></i><span>Departments</span></a></li>
                <li><a href="{{route('attandance.attandance')}}"><i class="icon-grid"></i><span>Attendance</span></a></li>
                <li><a href="employee.html"><i class="icon-users"></i><span>Employee</span></a></li>
                <li><a href="activities.html"><i class="icon-equalizer"></i><span>Office Expense</span></a></li>
                <li><a href="activities.html"><i class="icon-equalizer"></i><span>Office Maintaince</span></a></li>
                <li><a href="activities.html"><i class="icon-equalizer"></i><span>Salary</span></a></li>
                <li><a href="activities.html"><i class="icon-equalizer"></i><span>Account Management</span></a></li>
                <li><a href="holidays.html"><i class="icon-flag"></i><span>Activities</span></a></li>
                <li><a href="events.html"><i class="icon-calendar"></i><span>Report</span></a></li>
                <li><a href="payroll.html"><i class="icon-credit-card"></i><span>Settings</span></a></li>
            </ul>
        </nav>
    </div>
</div>
