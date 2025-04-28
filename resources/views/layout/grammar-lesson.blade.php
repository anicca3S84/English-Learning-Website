
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
        <div class=" flex w-full flex-col max-w-screen-2xl mx-auto bg-white px-24 py-8">
            <div>
                <p class=" text-4xl font-bold text-blue-900">
                    {{ $lesson->title }}
                    <!-- Adjectives and prepositions -->
                </p>
            </div>
            <div class=" flex flex-row">
                <div class="  w-75 pr-8">
                    <div>
                        <img class=" w-full h-[510px] rounded-br-4xl" src=" {{ $lesson->content['imageUrl'] }}">
                    </div>
                    <div class=" text-black">
                        {!! $lesson->content['introduce'] !!}
                        <!-- <p>
                            Do you know how to use adjectives with prepositions like <i>interested in</i> or <i>similar to</i>? Test what you know with interactive exercises and read the explanation to help you.
                        </p>
                        <p>
                            Look at these examples to see how adjectives are used with prepositions.
                        </p>
                        <div class=" border-l-4 border-gray-300  pl-4">
                            <p><i>
                                I'm <strong>interested in</strong> the idea.<br>
                                My jacket is <strong>similar to</strong> yours.<br>
                                She's <strong>brilliant at</strong> maths.<br>
                                My neighbour is <strong>angry about</strong> the party.
                            </i></p>
                        </div> -->
                        <p>
                            Try this exercise to test your grammar.
                        </p>
                        <div class=" flex flex-row w-full bg-gray-300 px-3 py-4">
                            <div class="flex items-center h-32px font-bold">
                                    Grammar test 1
                            </div>
                            <div class=" flex items-center justify-center ml-auto">
                                    ▼
                            </div>
                        </div>
                        <p class=" mt-4">
                            Read the explanation to learn more.
                        </p>
                        <p class=" text-4xl font-bold text-blue-900">
                            Grammar explanation
                        </p>
                        {!! $lesson->content['main_content'] !!}

                        <p>
                            Do this exercise to test your grammar again.
                        </p>
                        <div class=" flex flex-row w-full bg-gray-300 px-3 py-4">
                                <div class="flex items-center h-32px font-bold">
                                        Grammar test 2
                                </div>
                                <div class=" flex items-center justify-center ml-auto">
                                        ▼
                                </div>
                        </div>
                        <div class=" bg-blue-950 text-white text-md hover:bg-green-700 w-fit px-3 py-2 my-18 rounded-4xl">
                            <button class=" hover:underline">Try another grammar lesson</button>
                        </div>
                        <p class=" text-3xl text-blue-950 font-bold">
                            Language level
                        </p>
                        <div class="flex flex-row">
                            <div class=" bg-green-600 text-white w-fit mr-1 px-2 py-1">
                                <button>
                                    {{ $lesson->content['language_level_1']}}
                                </button>
                            </div>
                            <div class=" bg-green-600 text-white w-fit mr-1 px-2 py-1">
                                <button>
                                {{ $lesson->content['language_level_2']}}
                                </button>
                            </div>
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

        </div>
        @include('partial.footer')
    </div>
</body>
</html>