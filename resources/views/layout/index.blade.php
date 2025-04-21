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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

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
                            <div class="text-card">
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
                            <div class="text-card">
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
                            <div class="text-card">
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

        <!-- Carousel content -->
        <div class="container-fluid carousel-section">
            <div class="carousel-heading heading-lg heading-md">
                Empowering You with the Skills to Communicate Confidently in the Real World
            </div>
            <div class="container">
                <div class="row items">
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-lg shadow-sm card-custom">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg" class="card-img-top rounded-top" alt="Car Image 1">
                            <div class="card-body text-center">
                                <h2 class="card-title text-purple">Car 1</h2>
                                <p class="card-text">This is a description of the first car image. This is a long text to test how it is truncated gracefully with the ellipsis if it overflows.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card rounded-lg shadow-sm card-custom">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg" class="card-img-top rounded-top" alt="Car Image 2">
                            <div class="card-body text-center">
                                <h2 class="card-title text-purple">Car 2</h2>
                                <p class="card-text">This is a description of the second car image.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-lg shadow-sm card-custom">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg" class="card-img-top rounded-top" alt="Car Image 2">
                            <div class="card-body text-center">
                                <h2 class="card-title text-purple">Car 2</h2>
                                <p class="card-text">This is a description of the second car image.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-lg shadow-sm card-custom">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg" class="card-img-top rounded-top" alt="Car Image 2">
                            <div class="card-body text-center">
                                <h2 class="card-title text-purple">Car 2</h2>
                                <p class="card-text">This is a description of the second car image.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-lg shadow-sm card-custom">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg" class="card-img-top rounded-top" alt="Car Image 2">
                            <div class="card-body text-center">
                                <h2 class="card-title text-purple">Car 2</h2>
                                <p class="card-text">This is a description of the second car image.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-lg shadow-sm card-custom">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg" class="card-img-top rounded-top" alt="Car Image 2">
                            <div class="card-body text-center">
                                <h2 class="card-title text-purple">Car 2</h2>
                                <p class="card-text">This is a description of the second car image.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card rounded-lg shadow-sm card-custom">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg" class="card-img-top rounded-top" alt="Car Image 2">
                            <div class="card-body text-center">
                                <h2 class="card-title text-purple">Car 2</h2>
                                <p class="card-text">This is a description of the second car image.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="carousel-heading heading-lg heading-md">
                Explore our free resources:
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Listening</a></li>
                    <li><a href="#">Reading</a></li>
                    <li><a href="#">Writing</a></li>
                    <li><a href="#">Speaking</a></li>
                    <li><a href="#">Vocabulary</a></li>
                    <li><a href="#">Grammar</a></li>
                    <li><a href="#">Business English</a></li>
                    <li><a href="#">General English</a></li>
                </ul>
            </div>
        </div>
        <!-- /.Carousel content -->

        <!-- Card 2 section -->
        <div class="container-fluid card-section">
            <div class="card-heading-2 heading-lg heading-md">
                Empowering You with the Skills to Communicate Confidently in the Real World
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-custom-2 d-flex align-items-start">
                            <div class="card-icon-2">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="card-title-2">Skills</h5>
                                <p class="card-text-2">Learn new words to understand and express yourself clearly</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-custom-2 d-flex align-items-start">
                            <div class="card-icon-2">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="card-title-2">Grammar</h5>
                                <p class="card-text-2">Practice verb tenses and grammar rules, word parts and verb</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-custom-2 d-flex align-items-start">
                            <div class="card-icon-2">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ml-3">
                                <h5 class="card-title-2">Vocabulary</h5>
                                <p class="card-text-2">Learn new words to understand and express yourself clearly</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-bottom: 80px;" class="row d-flex justify-content-center ">
                    <button class="thm-btn btn-purple mt-3">Get started</button>
                </div>
            </div>
        </div>
        <!-- /. Card 2 section -->


        <!-- Card 3 section -->
        <div style="background-color: #f0ffe7;" class="container-fluid card-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 card-custom-3">
                        <div class="folded-corner">
                            <div class="text-card">
                                <i class="fa-solid fa-brain fa-5x fa-icon-image"></i>
                                <p style="margin-top: 12px;" class="item-title heading-lg heading-md">
                                    <a href="#"> Learn</a>
                                </p>
                                <p>
                                    Build a strong foundation in English with guided lessons and structured study paths. Perfect for beginners and those looking to refresh their skills.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card-custom-3">
                        <div class="folded-corner">
                            <div class="text-card">
                                <i class="fa-solid fa-book fa-5x fa-icon-image"></i>
                                <p style="margin-top: 12px;" class="item-title heading-lg heading-md">
                                    <a href="#"> Practice</a>
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
        <!-- /. Card 3 section -->


        <!-- Card 4 section -->
        <section class="course-section">
            <h2 style="color: #fff;" class="mb-5">Online courses</h2>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 course-box">
                        <div class="course-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="course-title">
                            <a href="">Live classes</a>
                        </div>
                        <div class="course-description">
                            Group and one-to-one classes with expert teachers.
                        </div>
                    </div>
                    <div class="col-md-3 course-box">
                        <div class="course-icon">
                            <i class="fas fa-user-clock"></i>
                        </div>
                        <div class="course-title">
                        <a href="">Self Study</a>
                        </div>
                        <div class="course-description">
                            Learn English in your own time, at your own pace.
                        </div>
                    </div>
                    <div class="col-md-3 course-box">
                        <div class="course-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <div class="course-title">
                            <a href="">Personal tutoring</a>
                        </div>
                        <div class="course-description">
                            One-to-one sessions focused on a personal plan.
                        </div>
                    </div>
                    <div class="col-md-3 course-box">
                        <div class="course-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="course-title">
                            <a href="">IELTS preparation</a>
                        </div>
                        <div class="course-description">
                            Get the score you need with private and group classes.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.Card 4 section -->


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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- template js -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>