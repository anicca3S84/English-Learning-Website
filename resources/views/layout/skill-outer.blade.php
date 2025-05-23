
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
            <img src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/1280x500/public/2023-04/RS9171_GettyImages-1391836113_1440x960.jpg?itok=tOgk6wtV" class="w-full">
            </div>

            <div class=" absolute bottom-0 left-0 bg-white z-10 ml-16 pl-24 pt-8 pr-40 rounded-tr-4xl">
                <div class=" text-5xl font-bold text-blue-900 mb-8">Skills</div>
                <div>
                    <p class=" text-4xl text-black">
                    Practise your reading, writing, listening </br>
                    and speaking skills at your level.
                    </p>
                </div>
            </div>
        </div>
        <div class=" flex w-full max-w-screen-2xl mx-auto bg-white px-24 py-8">
            <div class="  w-75 pr-8 mr-8">
                <div class=" flex flex-col text-black">
                    Here you can find practice materials and activities to improve your English speaking, listening, reading and writing skills.
                    Improving your skills will help you use English more effectively so that you can do well in your studies, get ahead at work
                    and confidently communicate in English in your free time.
                </div>
                <div class=" text-4xl font-bold text-blue-900 pb-8">
                    How to improve your English proficiency
                </div>
                <div class=" flex flex-col text-black">
                    To build your vocabulary and develop your English communication skills, practice and study are essential. Working through
                    practice activities and regularly reviewing the new language you learn can help you accelerate your knowledge and
                    understanding of English.
                </div>
                <div class=" text-4xl font-bold text-blue-900 pb-8">
                    Choose the skill you want to practise
                </div>
                <div class=" flex flex-col text-black">
                    <p>
                        The self-study lessons in these sections are written and organised by English level based on the Common European
                        Framework of Reference for languages (CEFR). There are different types of texts, recordings and videos with interactive
                        exercises and worksheets that practise the skills you need.
                    </p>
                    <p>
                        Choose the skill you want to practise today and improve your English at your own speed, whenever it's convenient for you.
                    </p>
                </div>
                <div class=" relative mb-16 ">
                    <a href="{{ route('skill.index', ['slug'=> "listening"]) }}">
                        <img class=" w-lg h-sm rounded-bl-4xl" src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/430x261_4/public/RS4758_AA047774-low.jpg?itok=X9ATJLfH">
                    </a>
                    <div class=" absolute right-0 bottom-0 w-3/5 h-4/5 bg-white text-black z-10 pl-12 pt-8 rounded-tl-4xl pb-12">
                        <a href="{{ route('skill.index', ['slug'=> "listening"]) }}">
                            <p class=" text-3xl font-bold text-blue-900 hover:underline">
                                Listening
                            </p>
                        </a>
                        <p>
                            Here you can find activities to practise your listening skills. 
                            Listening will help you to improve your understanding of the 
                            language and your pronunciation.
                        </p>
                    </div>
                </div>
                <div class=" relative mb-16 ">
                    <a href="{{ route('skill.index', ['slug'=> "reading"]) }}">
                        <img class=" w-lg h-sm rounded-bl-4xl" src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/430x261_4/public/2021-10/RS5825_169280449-hig.jpg?itok=TCPKpAoq">
                    </a>
                    <div class=" absolute right-0 bottom-0 w-3/5 h-4/5 bg-white text-black z-10 pl-12 pt-8 rounded-tl-4xl pb-12">
                        <a href="{{ route('skill.index', ['slug'=> "reading"]) }}">
                            <p class=" text-3xl font-bold text-blue-900 hover:underline">
                                Reading
                            </p>
                        </a>
                        <p>
                        Here you can find activities to practise your reading skills. 
                        Reading will help you to improve your understanding of the language and build your vocabulary.
                        </p>
                    </div>
                </div>
                <div class=" relative mb-16 ">
                    <a href="{{ route('skill.index', ['slug'=> "writing"]) }}">
                        <img class=" w-lg h-sm rounded-bl-4xl" src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/430x261_4/public/RS7522_ThinkstockPhotos-622015126-hig_0.jpg?itok=FdZVh9EN">
                    </a>
                    <div class=" absolute right-0 bottom-0 w-3/5 h-4/5 bg-white text-black z-10 pl-12 pt-8 rounded-tl-4xl pb-12">
                        <a href="{{ route('skill.index', ['slug'=> "writing"]) }}">
                            <p class=" text-3xl font-bold text-blue-900 hover:underline">
                                Writing
                            </p>
                        </a>
                        <p>
                        Here you can find activities to practise your writing skills. 
                        You can improve your writing by understanding model texts and how they're structured.
                        </p>
                    </div>
                </div>
                <div class=" relative mb-16 ">
                    <a href="{{ route('skill.index', ['slug'=> "speaking"]) }}">
                        <img class=" w-lg h-sm rounded-bl-4xl" src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/430x261_4/public/RS8016_GettyImages-646457628-hig_2.jpg?itok=xW76ppP_">
                    </a>
                    <div class=" absolute right-0 bottom-0 w-3/5 h-4/5 bg-white text-black z-10 pl-12 pt-8 rounded-tl-4xl pb-12">
                        <a href="{{ route('skill.index', ['slug'=> "speaking"]) }}">
                            <p class=" text-3xl font-bold text-blue-900 hover:underline">
                                Speaking
                            </p>
                        </a>
                        <p>
                        Here you can find activities to practise your speaking skills. 
                        You can improve your speaking by noticing the language we use in different situations and practising useful phrases.
                        </p>
                    </div>
                </div>

                <div class=" pt-16">
                    <p class=" text-4xl font-bold text-blue-900">
                        Discover our online English courses
                    </p>
                    <p class=" text-black">
                        Improve your English speaking, listening, reading and writing skills with our selection of online courses.
                    </p>
                    <p class=" text-black">
                        Experience self-study sessions, live group classes and one-to-one courses with personal tutors in a safe and inclusive learning environment.
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
<script>
    console.log("SKill Page!")
</script>