
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="page-wrapper">
        @include('partial.header')
        <div class="relative bg-red-200 w-full h-auto">
            <div class="z-0">
            <img src=" {{ $skill->imageUrl }}" class="w-full">
            </div>

            <div class=" absolute bottom-0 left-0 bg-white z-10 ml-16 pl-24 pt-8 pr-40 rounded-tr-4xl">
                <div class=" text-5xl font-bold text-blue-900 mb-8">{{ $skill->title}}</div>
                <div>
                    <p class=" text-4xl text-black">
                        {!! $skill->introduce !!} 
                        <!-- Revise and practise your grammar to<br>
                        help you increase your confidence and<br>
                        improve your language level. -->
                    </p>
                </div>
            </div>
        </div>
        <div class=" flex w-full max-w-screen-2xl mx-auto bg-white px-24 py-8">
            <div class="  w-75 pr-8 mr-8">
                <div class=" flex flex-col text-black">
                    {!! $skill->description !!}
                        <!-- <p class=" leading-tight">
                            Practise your English grammar with clear grammar explanations and practice exercises to test your understanding.
                            The learning materials are organised into two sections, organised by English level.</p>
                        <p class=" leading-tight">
                            All learners, whatever their level, have questions and doubts about grammar as they're learning English.
                            There is also a grammar reference which helps to explain the verb tenses and grammar rules in a clear and simple way.</p>
                        <p class=" leading-tight">
                            Decide which area of grammar you need help with today and choose a grammar point to work on. When you do the
                            interactive exercises, you can see how well you've done. By revising and practising your grammar you will increase your
                            confidence in English and improve your language level.</p>
                        <p class=" leading-tight">
                            Practising little and often is the best way to improve your grammar, so come back tomorrow to choose another grammar
                            point to work on. Good luck!</p> -->

                </div>
                <div class=" text-4xl font-bold text-blue-900 pb-8">
                    Choose a section
                </div>
                @foreach ($courses as $course)
                    <div class=" relative mb-16 ">
                        <a href="{{ route('course.show', ['skillSlug' => $skill->slug, 'courseSlug' => $course->slug]) }}">
                            <img class=" w-lg h-sm rounded-bl-4xl" src=" {{ $course->imageUrl }}">
                        </a>
                        <div class=" absolute right-0 bottom-0 w-3/5 h-4/5 bg-white text-black z-10 pl-12 pt-8 rounded-tl-4xl pb-12">
                            <a href="{{ route('course.show', ['skillSlug' => $skill->slug, 'courseSlug' => $course->slug]) }}">
                                <p class=" text-3xl font-bold text-blue-900 hover:underline">
                                    {{ $course->title }}
                                </p>
                            </a>
                            <p>
                                {{ $course->introduce }}
                            <!-- Are you a learner at A1 (elementary) or A2 (pre-intermediate) 
                            English level? In this section, you can improve your grammar 
                            with our clear and simple grammar lessons. -->
                            </p>
                        </div>
                    </div>
                @endforeach

                <div class=" pt-16">
                    <p class=" text-4xl font-bold text-blue-900">
                        Learn to use grammar correctly and confidently
                    </p>
                    <p class=" text-black">
                        Our online English classes feature lots of useful learning materials and activities to help you improve your understanding of 
                        grammar in a safe and inclusive learning environment.
                    </p>
                    <p class=" text-black">
                    Practise using grammar with your classmates in live group classes, get grammatical support from a personal tutor in one-to-one 
                    lessons or practise grammar by yourself at your own pace with a self-study course.
                    </p>
                    <div class=" bg-blue-900 text-white px-8 py-2 rounded-4xl w-fit hover:bg-green-600 hover:text-black">
                        <button> Explore Courses</button>
                    </div>

                </div>
            </div>
            <div class=" w-25">
                <div class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit mb-4">
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ A1-A2 grammar</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ B1-B2 grammar</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ C1 grammar</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ English grammar reference</p>
                </div>
                <div class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit mb-4">
                    <p class=" text-2xl font-bold">Our websites</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ LearnEnglish Kids for children aged 5 to 12</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ LearnEnglish Teens for children aged 13 to 17</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ TeachingEnglish for teachers and teacher educators</p>
                </div>
                <div class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit">
                    <p class=" text-2xl font-bold">Help</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Free online English test</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Sign up for our newsletter</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Frequently asked questions</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer"> Getting started</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer"> House rules</p>
                </div>

            </div>
        </div>
        @include('partial.footer')
    </div>
</body>
</html>