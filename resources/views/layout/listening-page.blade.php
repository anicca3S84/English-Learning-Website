<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skill-pages.css') }}">

    <!-- Inline CSS cho tỷ lệ cột theo Flexbox -->
    <style>
        .custom-flex-row {
            display: flex;
            flex-wrap: wrap;
            /* Đảm bảo responsive */
        }

        .left-col {
            flex: 0 0 73% !important;
            max-width: 73% !important;
        }

        .right-col {
            flex: 0 0 27% !important;
            max-width: 27% !important;
            padding-left: 20px;
        }


        @media (max-width: 768px) {

            .left-col,
            .right-col {
                max-width: 100%;
                flex: 100%;
                padding-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <!-- Include header -->
        @include('partial.header')

        <div class="container mt-5 mb-5">
            <div class="custom-flex-row">
                <div class="left-col">
                    <div class="skills-section-heading heading-lg" style="margin-top: -20px">
                        Listening
                    </div>

                    <div class="corner-image">
                        <img src="{{ asset('images/listening-page/listening-image.png') }}" class="img-fluid">
                    </div>
                    <div class="listening-description mt-3">
                        <p>
                            Here you can find activities to practise your listening skills. Listening will help you to
                            improve your understanding of the language and your pronunciation. </p>
                        <p>
                            The self-study lessons in this section are written and organised by English level based on
                            the Common European Framework of Reference for languages (CEFR). There are recordings of
                            different situations and interactive exercises that practise the listening skills you need
                            to do well in your studies, to get ahead at work and to communicate in English in your free
                            time. The speakers you will hear are of different nationalities and the recordings are
                            designed to show how English is being used in the world today. </p>
                        <p>
                            Take our <a href="/english-test">free online English test</a> to find out which level to
                            choose. Select your level, from A1 English level (elementary) to C1 English level
                            (advanced), and improve your listening skills at your own speed, whenever it's convenient
                            for you.
                        </p>

                        <div class="course-highlight position-relative text-center py-5" style="margin-top: 20px">
                            <div class="background-layer"></div>

                            <div class="course-content p-5 mx-auto shadow">

                                <p>
                                    Improve your English speaking, listening,
                                    reading <br> and writing skills with our selection of <br>
                                    online courses.
                                </p>
                                <div class="text-center mt-3">
                                    <button class="explore-btn">Take the test</button>
                                </div>
                            </div>
                        </div>





                        <div class="skills-section-heading heading-lg" style="margin-top: 80px">
                            Choose your level to practise your listening
                        </div>


                        <div class="container-course">
                            <div class="image-side">
                                <img src="{{ asset('images/listening-page/a1-listening-image.png') }}"
                                    alt="Listening" />
                            </div>
                            <div class="text-side">
                                <h2>A1 listening</h2>
                                <p>
                                    Listening practice to help you understand familiar words and basic phrases when
                                    people speak slowly and clearly. Situations include meeting people, shopping and
                                    conversations at work!
                                </p>
                            </div>
                        </div>

                        <div class="container-course">
                            <div class="image-side">
                                <img src="{{ asset('images/listening-page/a2-listening-image.png') }}"
                                    alt="Listening" />
                            </div>
                            <div class="text-side">
                                <h2>A2 listening</h2>
                                <p>
                                    Listening practice to help you understand common vocabulary and expressions in
                                    short, clear dialogues. Situations include simple explanations, introductions,
                                    messages and announcements.
                                </p>
                            </div>
                        </div>

                        <div class="container-course">
                            <div class="image-side">
                                <img src="{{ asset('images/listening-page/b1-listening-image.png') }}"
                                    alt="Listening" />
                            </div>
                            <div class="text-side">
                                <h2>B1 listening</h2>
                                <p>
                                    Listening practice to help you understand extended speech about abstract, complex or
                                    unfamiliar topics. Situations include job interviews, lectures, talks and meetings.
                                </p>
                            </div>
                        </div>

                        <div class="container-course">
                            <div class="image-side">
                                <img src="{{ asset('images/listening-page/b2-listening-image.png') }}"
                                    alt="Listening" />
                            </div>
                            <div class="text-side">
                                <h2>B2 listening</h2>
                                <p>
                                    Listening practice to help you understand extended, standard speech about familiar
                                    topics that may contain complex ideas. Situations include broadcasts, reviews,
                                    presentations and lectures.
                                </p>
                            </div>
                        </div>

                        <div class="container-course">
                            <div class="image-side">
                                <img src="{{ asset('images/listening-page/c1-listening-image.png') }}"
                                    alt="Listening" />
                            </div>
                            <div class="text-side">
                                <h2>C1 listening</h2>
                                <p>
                                    Listening practice to help you understand the main points of clear, standard speech
                                    about everyday or job-related topics. Situations include phone calls, meetings and
                                    interviews.
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="skills-section-heading heading-lg">
                        Learn to listen with confidence
                    </div>

                    <div class="listening-description" style="margin-top: -30px">
                        <p>
                            Our online English classes feature lots of useful learning materials and activities to
                            help you
                            listen and respond with confidence in a safe and inclusive learning environment.</p>

                        <p>
                            Practise listening to your classmates in live group classes, get listening support from
                            a personal
                            tutor in one-to-one lessons or practise by yourself at your own speed with a self-study
                            course.
                        </p>
                    </div>

                    <div class=" mt-3">
                        <button class="btn">Explore courses</button>
                    </div>
                </div>



                <div class="right-col">
                    @include('partial.side-bar')
                </div>



            </div>
        </div>
    </div>

    <!-- Các phần khác của trang -->
    <div class="container-fluid card-section">
        <div class="card-heading heading-lg heading-md">
            Empowering You with the Skills to Communicate Confidently in the Real World
        </div>
        <div class="container">
            <div class="row">
                <!-- Learn Section -->
                <div class="col-md-4 Services-tab item">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fa-solid fa-graduation-cap fa-5x fa-icon-image"></i>
                            <h3 class="item-title">Learn</h3>
                            <p>
                                Build a strong foundation in English with guided lessons and structured study paths.
                                Perfect for beginners and those looking to refresh their skills.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Create Section -->
                <div class="col-md-4 Services-tab item">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fa fa-lightbulb fa-5x fa-icon-image"></i>
                            <h3 class="item-title">Create</h3>
                            <p>
                                Unlock your creativity through fun, interactive activities like storytelling,
                                role-playing, and project-based learning—all in English.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Practice Section -->
                <div class="col-md-4 Services-tab item">
                    <div class="folded-corner service_tab_1">
                        <div class="text">
                            <i class="fa-solid fa-clock fa-5x fa-icon-image"></i>
                            <h3 class="item-title">Practice</h3>
                            <p>
                                Improve fluency with real-world practice: conversations, interviews, presentations,
                                and time-based exercises that build confidence fast.
                            </p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

    <!-- Footer -->
    @include('partial.footer')
    </div>

    <!-- Optional JS: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
