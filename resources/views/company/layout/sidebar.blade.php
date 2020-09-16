<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo text-center">
        <a href="{{ url('/') }}">
            <h5 class="logo-text"> <b>{{ 'jobSite' }}</b></h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">
            COMPANY DASHBOARD
        </li>
        <li>
            <a href="{{ route('company.dashboard') }}" class="waves-effect">
                <i class="icon-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="icon-user"></i>
                <span>Jobs</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="{{ route('company.job.index') }}"><i class="fa fa-circle-o"></i> Posted job List</a></li>
                <li><a href="{{ route('company.job.create') }}"><i class="fa fa-circle-o"></i> Create a new jon</a></li>
            </ul>
        </li>
    </ul>

</div>
