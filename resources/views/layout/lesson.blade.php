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
        <!-- Include header -->
        @include('partial.header')

        <div class="container mt-5 mb-5">
            <div class="custom-flex-row">
                <div class="left-col">
                    <div id = "lesson" class="skills-section-heading heading-lg" style="margin-top: -20px">
                        {{ $lesson->title }}
                    </div>

                    <div id="lesson" class="corner-image">
                        @if ($skillTitle !== 'Speaking' && !empty($lesson->content['imageUrl']))
                            <img src="{{ $lesson->content['imageUrl'] }}" alt="{{ $lesson->image }}" />
                        @endif
                    </div>


                    <div class="listening-description mt-3">
                        {!! $lesson->content['introduce'] !!}
                    </div>


                    @php
                        $youtubeLink = $lesson->content['videoUrl'] ?? null;
                        $videoId = null;

                        if ($youtubeLink && preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $youtubeLink, $matches)) {
                            $videoId = $matches[1];
                        }
                    @endphp

                    @if ($videoId)
                        <div class="video-section mt-3 mb-5"
                            style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            <iframe src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen style="position: absolute; top:0; left: 0; width: 100%; height: 100%;">
                            </iframe>
                        </div>
                    @endif



                    @if (!empty($lesson->content['audioUrl']))
                        <div class="audio-section mt-3 mb-">
                            <audio controls style="width: 100%; margin-bottom: 10px;">
                                <source src="{{ $lesson->content['audioUrl'] }}" type="audio/mpeg">
                            </audio>
                        </div>
                    @endif

                    <!-- Transcription -->
                    <div class="accordion" id="accordionTranscription">
                        <div class="card">
                            <div class="card-header" id="headingTranscription">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTranscription" aria-expanded="true"
                                    aria-controls="collapseTranscription" style="color: #23085A;">
                                    Transcription
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTranscription" class="collapse show" aria-labelledby="headingTranscription"
                                data-parent="#accordionTranscription">
                                <div class="card-body">
                                    <div class="listening-description" id="lesson-transcript" style="margin-top: 24px;">
                                        {!! $lesson->content['transcriptHtml'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="lesson">
                        @if ($skillTitle == 'Writing')
                            <div class="skills-section-heading heading-md">
                                Tips
                            </div>

                            <div class="listening-description" style="margin-top: -40px;">
                                {!! $lesson->content['tips'] !!}
                            </div>
                        @endif
                    </div>


                    <!-- Task 1 -->
                    <div class="accordion" id="accordionTask1">
                        <div class="card">
                            <div class="card-header" id="headingTask1">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTask1" aria-expanded="false" aria-controls="collapseTask1"
                                    style="color: #23085A;">
                                    Task 1
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTask1" class="collapse" aria-labelledby="headingTask1"
                                data-parent="#accordionTask1">
                                <div class="card-body">
                                    <!-- Nội dung Task 1 -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Task 2 -->
                    <div class="accordion" id="accordionTask2">
                        <div class="card">
                            <div class="card-header" id="headingTask2">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTask2" aria-expanded="false" aria-controls="collapseTask2"
                                    style="color: #23085A;">
                                    Task 2
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTask2" class="collapse" aria-labelledby="headingTask2"
                                data-parent="#accordionTask2">
                                <div class="card-body">
                                    <!-- Nội dung Task 2 -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Task 3 -->
                    <div class="accordion" id="accordionTask3">
                        <div class="card">
                            <div class="card-header" id="headingTask3">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTask3" aria-expanded="false" aria-controls="collapseTask3"
                                    style="color: #23085A;">
                                    Task 3
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTask3" class="collapse" aria-labelledby="headingTask3"
                                data-parent="#accordionTask3">
                                <div class="card-body">
                                    <!-- Nội dung Task 3 -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="skills-section-heading heading-md">
                        Discussion
                    </div>

                    <div class="listening-description" style="margin-top: -40px;">
                        {{ $lesson->content['discussion'] }}
                    </div>

                    <div class="accordion-download" id="accordionDownload">
                        <div class="card">
                            <div class="card-header" id="headingDownload">
                                <div class="listening-description" style="color: #23085A; cursor: default;">
                                    Download Lesson PDF
                                </div>
                            </div>

                            <div id="collapseDownload" class="collapse show" aria-labelledby="headingDownload"
                                data-parent="#accordionDownload">
                                <div class="card-body">
                                    <div
                                        style="display: flex; align-items: center; background-color: white; border-radius: 0 80px 80px 0; overflow: hidden;">
                                        <div
                                            style="background-color: #2b0060; padding: 24px; display: flex; align-items: center; justify-content: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                fill="white" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2a5 5 0 00-5 5v4H5l7 7 7-7h-2V7a5 5 0 00-5-5zm-3 5a3 3 0 116 0v4h-6V7zm-5 13h14v2H4v-2z" />
                                            </svg>
                                        </div>
                                        <div style="padding: 0 24px;">
                                            <a href="{{ $lesson->content['documentUrl'] }}" target="_blank"
                                                style="color: #23085A; font-size: 18px; text-decoration: underline;">Worksheet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div style="margin-top: 40px;">
                        <button class="btn">Try another listening</button>
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
    </div>

    <script>
        $(document).ready(function() {
            $('.collapse').on('shown.bs.collapse', function() {
                // Debug: console.log để kiểm tra event được gọi hay không
                console.log('Collapse shown', this);
                $(this).closest('.card').find('.card-header .arrow-icon').text('▲');
            });
            $('.collapse').on('hidden.bs.collapse', function() {
                console.log('Collapse hidden', this);
                $(this).closest('.card').find('.card-header .arrow-icon').text('▼');
            });
        });
    </script>



    <!-- Optional JS: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
