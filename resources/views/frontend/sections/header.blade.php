<header id="header">
    <div class="container">
        <div class="row mx-0">
            <div class="col-lg-2 col-sm-3 px-0">
                <div class="news-title">
                    <p>Latest News</p>
                </div>
            </div>
            <div class="col-lg-10 col-sm-9 px-0">
                <div class="news-details">
                    <p class="marquee">Creative IT Institute, one of the leading IT training institutes in Bangladesh
                        offers the best training opportunities. It has been playing a vital role to eradicate the
                        unemployment problem since 2008. Enriched with quality training this institute has never failed
                        to help the individuals to reveal their talents making harmony between creativity and IT. No
                        matter what is your background, we are offering 30 courses for you conducted by experienced
                        trainers to advance your skills.</p>
                </div>
            </div>
        </div>
    </div>
</header>


<!--============== Navbar Part Goes Here ================-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('frontend/images/logo_6055bcd524c62.png') }}" alt="logo">
            <span style="font-family: 'Ubuntu Condensed', sans-serif; color: #666; font-weight: 400;"> &nbsp;|
                Chattogram</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.index') }}#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.index') }}#courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.index') }}#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.index') }}#form">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link seminar-click" href="{{ route('front.index') }}#seminar">Seminar</a>
                </li>
                <li class="nav-item">
                    @auth
                    <a class="nav-link" href="{{ route('login') }}">Dashboard</a>
                    @endauth
                    @guest
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @endguest
                </li>
                <li class="nav-item">
                    @auth
                        <div class='d-none'>hi</div>
                    @endauth
                    @guest
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
