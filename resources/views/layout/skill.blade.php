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


</head>

<body>
    <div class="page-wrapper">
        @include('partial.header')
        <div class="container mt-5 mb-5">
            <div id="skill" class="skills-section-heading heading-lg" style="margin-top: -20px">
                {{ $skill->title }}
            </div>
            <div class="custom-flex-row">
                <div class="left-col">
                    <div id="skill" class="corner-image">
                        <img src="{{ $skill->imageUrl }}" alt="Skill Image" />
                    </div>
                    <div class="listening-description mt-3">
                        {!! $skill->introduce !!}
                    </div>

                    <div class="course-highlight position-relative text-center py-5" style="margin-top: 40px">
                        <div class="background-layer"></div>

                        <div class="course-content p-5 mx-auto shadow">
                            <p>
                                Improve your English speaking, listening,
                                reading <br> and writing skills with our selection of <br>
                                online courses.
                            </p>
                            <div class="text-center mt-3">
                                <button class="explore-btn">Discovery your level</button>
                            </div>
                        </div>
                    </div>

                    <div class="skills-section-heading heading-lg" style="margin-top: 40px">
                        Choose your level to practise 
                    </div>

                    <div id="skill">
                        @foreach ($courses as $course)
                        <a href="{{ route('course.show', ['skillSlug' => $skill->slug, 'courseSlug' => $course->slug]) }}" class="container-course text-decoration-none text-dark">
                                <div class="image-side">
                                    <img src="{{ $course->imageUrl }}" alt="{{ $course->title }}" />
                                </div>
                                <div class="text-side">
                                    <h2>{{ $course->title }}</h2>
                                    <p>{{ $course->description }}</p>
                                </div>
                            </a>
                        @endforeach
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

                    <div class="mt-3">
                        <button class="btn">Explore courses</button>
                    </div>
                </div>

                <div class="right-col">
                    @include('partial.side-bar')
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partial.footer')

    <!-- Optional JS: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
