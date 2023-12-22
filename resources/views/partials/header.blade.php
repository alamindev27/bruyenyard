<header class="header-area"  style="z-index: 9999">
    <div class="header-nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <a class="navbar-brand" href="{{ route('frontend.index') }}">
                                <img src="{{ asset(setting()->site_logo) }}" alt="{{ setting()->site_name }}">
                            </a>
                            <!-- logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button> <!-- navbar toggler -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.index') ? 'active' : '' }}" href="{{ route('frontend.index') }}">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">Mining</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.blockchain') ? 'active' : '' }}" href="{{ route('frontend.blockchain') }}">Blockchain</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.echosystem') ? 'active' : '' }}" href="{{ route('frontend.echosystem') }}">Ecosystem</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.presel') ? 'active' : '' }}" href="{{ route('frontend.presel') }}">Presale</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.roadmap') ? 'active' : '' }}" href="{{ route('frontend.roadmap') }}">Roadmap</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.partner') ? 'active' : '' }}" href="{{ route('frontend.partner') }}">Partners</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.faq') ? 'active' : '' }}" href="{{ route('frontend.faq') }}">FAQ</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::url() == route('frontend.about') ? 'active' : '' }}" href="{{ route('frontend.about') }}">About Us</a>
                                    </li>

                                    @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.account') }}">Account</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                                    </li>
                                @endauth

                                <li class="text-center">
                                    <button class="main-btn-2 mt-2 main-btn"  data-toggle="modal" data-target="#exampleModalCenter">Connect Wallet</button>
                                </li>

                                </ul>
                            </div> <!-- navbar collapse -->
                            {{-- <div class="navbar-btn d-none d-sm-flex">
                                <ul>
                                    @auth
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('user.account') }}">Account</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Sign In dsf</a>
                                        </li>
                                    @endauth
                                </ul>
                            </div> --}}
                            {{-- <li><button class="main-btn-2 main-btn"  data-toggle="modal" data-target="#exampleModalCenter">Connect Wallet</button></li> --}}


                        </nav>
                    </div> <!-- navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
