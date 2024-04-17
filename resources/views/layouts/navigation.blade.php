    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->
                <a href="{{ url ('/dashboard') }}" class="navbar-brand">
                    <div><img alt="NUMENOR" src="{{ asset('assets/images/main-navbar-logo.png') }}"></div>
                    NUMENOR
                </a>

                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url ('/dashboard') }}">Home</a>
                        </li>
                        <li>
                            <img alt="NUMENOR" src="{{ asset('assets/images/logo.png') }}" width="110" height="38">
                        </li>

                    </ul> <!-- / .navbar-nav -->

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="{{ asset('assets/images/user.png') }}" alt="">
                                    <span>Carlos</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('logout') }}"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
    <!-- /2. $END_MAIN_NAVIGATION -->