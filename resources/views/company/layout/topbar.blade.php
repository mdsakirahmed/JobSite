<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top gradient-ibiza">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Enter keywords">
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="javaScript:void();">
                    <span class="user-profile"><img src="{{ asset('uploads/images/default.png') }}" class="img-circle" alt="user avatar"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                    <li class="dropdown-item"> <a onclick="logout()" style="cursor: pointer;"><i class="icon-power mr-2"></i> Logout</a> </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
