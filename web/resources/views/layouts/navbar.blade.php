<!-- navbar dekstop -->
<div class="navbar-fixed">
    <nav role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="{{ url('/') }}" class="brand-logo hide-on-med-and-down"><img src="img/logo-ccomp.png" alt=""></a>
            <a id="logo-container" href="{{ url('/') }}" class="brand-logo center hide-on-large-only"><img src="img/logo-ccomp.png" alt=""></a>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons" style="color: #3cb6d8;">menu</i></a>
            <ul class="right hide-on-med-and-down ">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/faq') }}">FAQ</a></li>
                @if (Auth::check())
                    <li><a href="{{ url('/home') }}" class="btn waves-effect waves-light secondary-btn">{{ Auth::user()->tim }}</a></li>
                @else
                    <li><a href="{{ url('/login') }}" class="btn waves-effect waves-light secondary-btn">Login</a></li>
                @endif
            </ul>
        </div>
    </nav>
</div>
<!-- end of navbar dekstop -->
<!-- navbar for mobile -->
<ul id="nav-mobile" class="side-nav">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="faq.html">FAQ</a></li>
    @if (Auth::check())
        <li><a href="{{ url('/home') }}" class="btn waves-effect waves-light secondary-btn">{{ Auth::user()->tim }}</a></li>
    @else
        <li><a href="{{ url('/login') }}" class="btn waves-effect waves-light secondary-btn">Login</a></li>
    @endif
</ul>
<!-- end of navbar for mobile -->