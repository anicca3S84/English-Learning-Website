<header class="main-header main-header--one clearfix">
    <div class="main-header--one__top clearfix">
        <div class="container">
            <div class="main-header--one__top-inner clearfix">
                <div class="main-header--one__top-left">
                    <div class="main-header--one__top-logo">
                        <a href="index.html"><img src="{{ asset('images/resources/demo.png') }}" alt="" /></a>
                    </div>
                </div>

                <div class="main-header--one__top-right clearfix">
                    <ul
                        class="main-header--one__top-social-link list-unstyled clearfix">
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>

                    <div class="main-header--one__top-contact-info clearfix">
                        <ul
                            class="main-header--one__top-contact-info-list list-unstyled">
                            <li class="main-header--one__top-contact-info-list-item">
                                <div class="icon">
                                    <span class="icon-phone-call-1"></span>
                                </div>
                                <div class="text">
                                    <h6>Call Agent</h6>
                                    <p><a href="tel:123456789">92 888 666 0000</a></p>
                                </div>
                            </li>
                            <li class="main-header--one__top-contact-info-list-item">
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <h6>Call Agent</h6>
                                    <p>
                                        <a href="mailto:info@templatepath.com">needhelp@company.com</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-one__bottom clearfix">
        <div class="container">
            <div class="main-header-one__bottom-inner clearfix">
                <nav class="main-menu main-menu--1">
                    <div class="main-menu__inner">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                        <div class="left">
                            <ul class="main-menu__list">
                                <li class="{{ Request::is('/') ? 'current' : '' }}">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Skills</a>
                                    <ul>
                                        <li><a href="#">Listening</a></li>
                                        <li><a href="#">Reading</a></li>
                                        <li><a href="#">Speaking</a></li>
                                        <li><a href="#">Writing</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Grammar</a>
                                    <ul>
                                        <li><a href="#">A</a></li>
                                        <li><a href="#">B</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('vocabulary') ? 'current' : '' }}">
                                    <a href="{{ url('vocabulary') }}">Vocabulary</a>
                                </li>
                            </ul>

                        </div>

                        <div class="right">
                            <div class="main-menu__right">
                                @auth
                                <div class="main-menu__right-login-register d-flex align-items-center">
                                    <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="rounded-circle mr-2" width="40" height="40">
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="log-out-btn">Logout</button>
                                    </form>
                                </div>
                                @endauth

                                @guest
                                <div class="main-menu__right-login-register">
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('login') }}">Register</a></li>
                                    </ul>
                                </div>
                                @endguest

                                <div class="main-menu__right-cart-search">
                                    <div class="main-menu__right-search-box">
                                        <a href="#" class="thm-btn search-toggler">Search</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->