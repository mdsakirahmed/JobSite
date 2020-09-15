<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a @can('show staff dashboard') href="{{ url('/') }}" @elsecan('show client panel') href="{{ route('showClientPanel') }}" @endcan >
            <img src="{{ asset('uploads/images/logos/'.$setting->logo_dashboard_small) }}" class="logo-icon" alt="DataTech BD">
            <h5 class="logo-text"> <b>{{ $setting->name }}</b></h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">

        <li class="sidebar-header">
            @can('show staff dashboard')
                STAFF DASHBOARD
            @elsecan('show client panel')
                CLIENT PANEL
            @endcan
        </li>

        @can('show staff dashboard')
        <li>
            <a href="{{ route('showStaffDashboard') }}" class="waves-effect">
                <i class="icon-home"></i> <span>Dashboard</span>
            </a>
        </li>
        @endcan
        @can('show staff')
            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="icon-user"></i>
                    <span>Staff</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('showStaff') }}"><i class="fa fa-circle-o"></i> Staff List</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Upazila</a></li>
                </ul>
            </li>
        @endcan
        @can('setting')
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-settings"></i>
                <span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            @can('show role')
            <ul class="sidebar-submenu">
                <li><a href="{{ route('showRole') }}"><i class="fa fa-circle-o"></i> Role</a></li>
            </ul>
            @endcan
            @can('show permission')
            <ul class="sidebar-submenu">
                <li><a href="{{ route('showPermission') }}"><i class="fa fa-circle-o"></i> Permission </a></li>
            </ul>
            @endcan
            @can('show app setting')
            <ul class="sidebar-submenu">
                <li><a href="{{ route('showAppSetting') }}"><i class="fa fa-circle-o"></i> App Setting </a></li>
            </ul>
            @endcan
        </li>
        @endcan



        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-briefcase"></i>
                <span>Worker | Service</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Category</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Service</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-briefcase"></i>
                <span>Member. | Service</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Category</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Service</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-briefcase"></i>
                <span>Notices</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Admin notices</a></li>
            </ul>
            <ul class="sidebar-submenu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Controller notices</a></li>
            </ul>
        </li>


        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="javaScript:void();" class="waves-effect"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>



    </ul>

</div>
