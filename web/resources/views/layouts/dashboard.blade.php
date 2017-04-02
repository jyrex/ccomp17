<header>
    <nav class="top-nav">
        <a href="#" data-activates="slide-out" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons royal-text">menu</i></a>
        <div class="nav-wrapper"><a class="page-title">Dashboard</a></div>
    </nav>
    <ul id="slide-out" class="side-nav fixed" style="background-color: #73D6E7;">
        <li class="center">
            <div class="userView">
                <a href="#!user"><img class="" src="{{ url('img/logowhite.png') }}" style="width:50%;"></a>
                <a href="#!name"><span class="white-text name">{{ Auth::user()->tim }}</span></a>
                <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
            </div>
        </li>

        <!-- dashboard -->
        <li><a href="{{ url('/home') }}" class="waves-effect white-text active"><i class="zmdi zmdi-home zmdi-hc-2x white-text"></i>Home</a></li>
        <li><a href="{{ url('/team') }}" class="waves-effect white-text"><i class="zmdi zmdi-accounts-alt zmdi-hc-2x white-text"></i>Team</a></li>
        <li><a href="{{ url('/submission/'.Auth::user()->id.'/edit') }}" class="waves-effect white-text"><i class="zmdi zmdi-mail-send  zmdi-hc-2x white-text"></i>Submission</a></li>
        @if(Auth::user()->lomba == "Line Follower")
        <li><a href="{{ url('/payment') }}" class="waves-effect white-text"><i class="zmdi zmdi-card zmdi-hc-2x white-text"></i>Payment</a></li>
        @endif
        <!-- <li><a href="{{ url('/setting') }}" class="waves-effect white-text"><i class="zmdi zmdi-settings zmdi-hc-2x white-text"></i>Setting</a></li> -->
        <li><a href="{{ url('/logout') }}" class="waves-effect white-text"><i class="zmdi zmdi-sign-in zmdi-hc-2x white-text"></i>Logout</a></li>
        @if (Auth::user()->role == "admin")
        <li><a href="{{ url('/admin/peserta') }}" class="waves-effect white-text"><i class="zmdi zmdi-sign-in zmdi-hc-2x white-text"></i>AdminPeserta</a></li>
        <li><a href="{{ url('/admin/pengumuman') }}" class="waves-effect white-text"><i class="zmdi zmdi-sign-in zmdi-hc-2x white-text"></i>AdminPengumuman</a></li>
        @endif
    </ul>
</header>
<!-- End of Header -->