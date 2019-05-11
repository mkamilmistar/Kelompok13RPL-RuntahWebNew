<nav id="nav" class="navbar nav-transparent">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="index.html">
                    <img class="logo" src="{{asset('/sites')}}/img/logo1.png" alt="logo">
                    <img class="logo-alt" src="{{asset('/sites')}}/img/logo2.png" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Collapse nav button -->
            <div class="nav-collapse">
                <span></span>
            </div>
            <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
            @if(Auth::guest())
            <li><a href="/">Home</a></li>
            <li><a href="/diy">Do It Yourself!</a></li>
            <li><a href="/information">Information</a></li>
            <li><a href="/about">About</a></li>
            @elseif(auth()->user()->role=='admin')
            <li><a href="/">Home</a></li>
            <li><a href="/diy">Do It Yourself!</a></li>
            <li><a href="/information">Information</a></li>
            <li class="has-dropdown"><a href="#">Volunteer</a>
                <ul class="dropdown">
                    <li><a href="/volunteer">Mulai!</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="/report">Lapor!</a></li>
                    <li><a href="/profile">Edit Profile</a></li>
                </ul>
            </li>
            <li><a href="/admins/dashboard">Admin</a></li>
            <li><a href="/about">About</a></li>
            @elseif(auth()->user()->role=='volunteer')
            <li><a href="/">Home</a></li>
            <li><a href="/diy">Do It Yourself!</a></li>
            <li><a href="/information">Information</a></li>
            <li class="has-dropdown"><a href="#">Volunteer</a>
                <ul class="dropdown">
                    <li><a href="/volunteer">Mulai!</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="/report">Lapor!</a></li>
                    <li><a href="/profile">Edit Profile</a></li>
                </ul>
            </li>
            <li><a href="/about">About</a></li>
            @endif
            @if(Auth::guest())
            <li><a href="#">|</a></li>
            <li><a href="/regiser">Register</a></li>
            <li><a href="/login">Login</a></li>
            @else
            <li class="has-dropdown"><a href="#">{{auth()->user()->username}}</a>
                <ul class="dropdown">
                    <li><a href="/profile">Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </li>
            <li>
                <img src="{{asset('images/'.$users->user_image)}}" style="width:150%; margin:0; padding:0; vertical-align:baseline; position:absolute; bottom:-50px; right:5%;border-radius: 6px; left:5%;">
            </li>
            @endif
        </ul>
        <!-- /Main navigation -->

    </div>
</nav>