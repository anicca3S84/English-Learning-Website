<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- favicons Icons -->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="assets/images/favicons/apple-touch-icon.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="assets/images/favicons/favicon-32x32.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
</head>

<body>
    <div class="page-wrapper">
        @include('partial.header')


        <!--Content here  -->

        <!-- Breadcrumb -->
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->

        <!-- Slider -->
        <div style="padding: 0" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" id="carousel-554496">
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#carousel-554496"></li>
                            <li data-slide-to="1" data-target="#carousel-554496"></li>
                            <li
                                data-slide-to="2"
                                data-target="#carousel-554496"
                                class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img
                                    class="d-block w-100"
                                    alt="Carousel Bootstrap First"
                                    src="{{ asset('images/backgrounds/main-slider-v2-1.jpg') }}" />
                                <div class="carousel-caption">
                                    <h4>Your Benefit</h4>
                                    <p>
                                        Learn English online and improve your skills through our high-quality courses and resources.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img
                                    class="d-block w-100"
                                    alt="Carousel Bootstrap Second"
                                    src="{{ asset('images/backgrounds/main-slider-v2-2.jpg') }}" />
                                <div class="carousel-caption">
                                    <h4>printing and typesetting</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img
                                    class="d-block w-100"
                                    alt="Carousel Bootstrap Third"
                                    src="{{ asset('images/backgrounds/main-slider-v1-img.png') }}" />
                                <div class="carousel-caption">
                                    <h4>printer took</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's

                                    </p>
                                </div>
                            </div>
                        </div>
                        <a
                            class="carousel-control-prev"
                            href="#carousel-554496"
                            data-slide="prev"><span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span></a>
                        <a
                            class="carousel-control-next"
                            href="#carousel-554496"
                            data-slide="next"><span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>


            <!-- Hero section  -->
            <div class="hero-section">
                <div class="section-heading heading-lg heading-md">
                    We provide you with the right tools to help you<br />
                    interact confidently in the real world.
                </div>
                <div class="container mb-5">
                    <div class="row hero-box">
                        <div class="col-md-6 pl-0 hero-image">
                            <img
                                src="{{ asset('images/backgrounds/main-slider-v1-img.png') }}" />
                        </div>
                        <div class="col-md-6 hero-content">
                            <h2 class="hero-title title-main">Skills</h2>
                            <p>
                                Practise your listening, reading, writing and speaking and
                                learn useful language to use at work or to communicate
                                effectively with friends.
                            </p>
                            <ul>
                                <li>
                                    Audio and video to practise your listening and speaking
                                    skills.
                                </li>
                                <li>Model texts for all types of writing tasks.</li>
                                <li>
                                    Work on your reading skills to read more quickly and
                                    understand more.
                                </li>
                            </ul>
                            <button class="thm-btn btn-purple mt-3">Start learning</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero section  -->

            <!-- Hero section 2  -->
            <div class="hero-section hero-section-2">
                <div class="section-heading heading-lg heading-md">
                    We provide you with the right tools to help you<br />
                    interact confidently in the real world.
                </div>
                <div class="container mb-5">
                    <div class="row hero-box">
                        <div class="col-md-6 hero-content">
                            <h2 class="hero-title title-main">Skills</h2>
                            <p>
                                Practise your listening, reading, writing and speaking and
                                learn useful language to use at work or to communicate
                                effectively with friends.
                            </p>
                            <ul>
                                <li>
                                    Audio and video to practise your listening and speaking
                                    skills.
                                </li>
                                <li>Model texts for all types of writing tasks.</li>
                                <li>
                                    Work on your reading skills to read more quickly and
                                    understand more.
                                </li>
                            </ul>
                            <button class="thm-btn btn-purple mt-3">Start learning</button>
                        </div>
                        <div class="col-md-6 pr-0 hero-image">
                            <img
                                src="{{ asset('images/backgrounds/main-slider-v1-img.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero section 2  -->

            <!-- Hero section 3  -->
            <div class="hero-section hero-section-3">
                <div class="section-heading heading-lg heading-md">
                    We provide you with the right tools to help you<br />
                    interact confidently in the real world.
                </div>
                <div class="container mb-5">
                    <div class="row hero-box">
                        <div class="col-md-6 pl-0 hero-image">
                            <img
                                src="{{ asset('images/backgrounds/main-slider-v1-img.png') }}" />
                        </div>
                        <div class="col-md-6 hero-content">
                            <h2 class="hero-title title-main">Skills</h2>
                            <p>
                                Practise your listening, reading, writing and speaking and
                                learn useful language to use at work or to communicate
                                effectively with friends.
                            </p>
                            <ul>
                                <li>
                                    Audio and video to practise your listening and speaking
                                    skills.
                                </li>
                                <li>Model texts for all types of writing tasks.</li>
                                <li>
                                    Work on your reading skills to read more quickly and
                                    understand more.
                                </li>
                            </ul>
                            <button class="thm-btn btn-purple mt-3">Start learning</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero section 3  -->
        </div>
        <!-- End Slider -->

        <!-- card items -->
        <div class="container-fluid card-section">
            <div class="card-heading heading-lg heading-md">
            Empowering You with the Skills to Communicate Confidently in the Real World
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 Services-tab item">
                        <div class="folded-corner service_tab_1">
                            <div class="text">
                                <!-- <i class="fa fa-image fa-5x fa-icon-image"></i> -->
                                <i class="fa-solid fa-graduation-cap fa-5x fa-icon-image"></i>
                                <p class="item-title">
                                <h3> Learn</h3>
                                </p><!-- /.item-title -->
                                <p>
                                    Build a strong foundation in English with guided lessons and structured study paths. Perfect for beginners and those looking to refresh their skills.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 Services-tab item">
                        <div class="folded-corner service_tab_1">
                            <div class="text">
                                <i class="fa fa-lightbulb fa-5x fa-icon-image"></i>
                                <p class="item-title">
                                <h3>Create</h3>
                                </p>
                                <p>
                                    Unlock your creativity through fun, interactive activities like storytelling, role-playing, and project-based learning—all in English.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 Services-tab item">
                        <div class="folded-corner service_tab_1">
                            <div class="text">
                                <i class="fa-solid fa-clock fa-5x fa-icon-image"></i>
                                <p class="item-title">
                                <h3> Practice</h3>
                                </p>
                                <p>
                                    Improve fluency with real-world practice: conversations, interviews, presentations, and time-based exercises that build confidence fast.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.Content here  -->

        @include('partial.footer')
    </div>
    <!-- /.page-wrapper -->








    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('images/resources/demo.png') }}" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@index.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul>
            <!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <!-- /.mobile-nav__social -->
            </div>
            <!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jarallax@2.0.1/dist/jarallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/1.1.1/jquery.appear.min.js"></script>

    <!-- template js -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>