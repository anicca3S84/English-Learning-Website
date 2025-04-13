<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <!-- Bootstrap CSS -->
    <!-- Custom CSS -->
   

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
    <link rel="stylesheet" href="{{ asset('css/skills.css') }}">
</head>
<body>
    <div class="page-wrapper">
         @include('partial.header')

            <!-- Introduction Section -->
            <div class="intro-section position-relative text-left text-dark">
                <img src="{{ asset('images/backgrounds/skills-background.jpg') }}" alt="Skills background" class="img-fluid w-100">
                <div class="intro-text-box shadow-lg p-4">
                    <h2 class="font-weight-bold text-primary">Skills</h2>
                    <p class="mb-2">
                    Practise your reading, writing, listening <br>
                    and speaking skills at your level.
                    </p>
                </div>
                
            </div>
    
    
            <div class="container ">
                <div class="row">
                    <div class="col-md-8">
                        <div class="my-5">
                            <p>
                                Here you can find practice materials and activities to improve your English speaking, listening, reading and writing skills. Improving your skills will help you use English more effectively so that you can do well in your studies, get ahead at work and confidently communicate in English in your free time.
                                </p>
                        </div>


                        <!-- How to Improve Section -->
                        <div class="mb-5">
                            <h2 class="section-title">How to improve your English proficiency</h2>
                            <p>
                                To build your vocabulary and develop your English communication skills, practice and study are essential. Working through practice activities and regularly reviewing the new language you learn can help you accelerate your knowledge and understanding of English.
                            </p>
                        </div>

                        <!--Choose the skill you want to practise  -->
                        <div class="mb-5">
                            <h2 class="section-title">Choose the skill you want to practise</h2>
                            <p>
                            The self-study lessons in these sections are written and organised by English level based on 
                            the Common European Framework of Reference for languages (CEFR). There are different types of 
                            texts, recordings and videos with interactive exercises and worksheets that practise the skills you need. <br>

                            Choose the skill you want to practise today and improve your English at your own speed, whenever it's convenient for you.
                            </p>
                        </div>


                        <div class="course-highlight position-relative text-center py-5">
                            <div class="background-layer"></div>

                            <div class="course-content p-5 mx-auto shadow">
                                <h5><strong>Discover our online English courses</strong></h5>
                                <p>
                                    Improve your English speaking, listening,
                                    reading <br> and writing skills  with our selection of <br> 
                                    online courses.
                                </p>
                                <a href="#" class="btn explore-btn mt-3">Explore courses</a>
                            </div>
                        </div>

                        <!-- Skills Sections -->
                        <div class="row align-items-center skill-box">
                            <div class="col-md-5">
                                <img src="{{ asset('images/backgrounds/skills-listenning.jpg') }}" alt="Listening" class="img-fluid">
                            </div>
                            <div class="col-md-7">
                                <p class="text-primary font-weight-bold mb-0 ">Listening</p>
                                <p>
                                
                                Listening will help you to improve your understanding of the language and your pronunciation.
                                </p>
                                <a href="#" class="btn btn-primary btn-explore mt-0">Explore Listening</a>
                            </div>
                        </div>

                        <div class="row align-items-center skill-box my-4">
                            <div class="col-md-5">
                                <img src="{{ asset('images/backgrounds/skills-reading.jpg') }}" alt="Reading" class="img-fluid rounded-left">
                            </div>
                            <div class="col-md-7">
                                <div class="p-4">
                                    <h3 class="text-primary font-weight-bold mb-0">Reading</h3>
                                    <p>
                                    Reading will help you to improve your understanding of the language and build your vocabulary.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-explore mt-0">Explore Reading</a>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center skill-box my-4">
                            <div class="col-md-5">
                                <img src="{{ asset('images/backgrounds/skills-speaking.jpg') }}" alt="Speaking" class="img-fluid rounded-left">
                            </div>
                            <div class="col-md-7">
                                <div class="p-4">
                                    <h3 class="text-primary font-weight-bold mb-0">Speaking</h3>
                                    <p>
                                    You can improve your speaking by noticing the language we use in different situations and practising useful phrases.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-explore mt-0">Explore Speaking</a>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center skill-box my-4">
                                    <div class="col-md-5">
                                        <img src="{{ asset('images/backgrounds/skills-writing.jpg') }}" alt="Writing" class="img-fluid rounded-left">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="p-4">
                                            <h3 class="text-primary font-weight-bold mb-0">Writing</h3>
                                            <p>
                                          You can improve your writing by understanding model texts and how they're structured.
                                            </p>
                                            <a href="#" class="btn btn-primary btn-explore mt-0">Explore Writing</a>
                                        </div>
                                    </div>
                                </div>
                        

                        <div class="online-courses-section my-5">
                                <div class="container">
                                    <h2 class="font-weight-bold text-purple mb-3">Discover our online English courses</h2>
                                    <p>Improve your English speaking, listening, reading and writing skills with our selection of online courses.</p>
                                    <p>Experience self-study sessions, live group classes and one-to-one courses with personal tutors in a safe and inclusive learning environment.</p>
                                    <a href="#" class="btn btn-purple mt-3 px-4 py-2">Explore courses</a>
                                </div>
                        </div>
                            
                        </div>
                    
                        
                    
                    <div class="col-md-4">
                        <div class="sidebar p-3">
                            <!-- Khối kỹ năng -->
                            <div class="box mb-4">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#listening" class="text-dark d-block"><i class="fas fa-check text-purple mr-2"></i>Listening</a></li>
                                    <li><a href="#reading" class="text-dark d-block"><i class="fas fa-check text-purple mr-2"></i>Reading</a></li>
                                    <li><a href="#writing" class="text-dark d-block"><i class="fas fa-check text-purple mr-2"></i>Writing</a></li>
                                    <li><a href="#speaking" class="text-dark d-block"><i class="fas fa-check text-purple mr-2"></i>Speaking</a></li>
                                </ul>
                            </div>

                            <!-- Hình ảnh + tiêu đề -->
                            <div class="box mb-4 text-center">
                                <a href="#courses" class="text-decoration-none d-block">
                                    <img src="{{ asset('images/backgrounds/sidebar.jpg') }}" class="img-fluid mb-2" alt="Online English course">
                                    <h6 class="text-purple font-weight-bold mb-0">Online English courses</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>



                @include('partial.footer')

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
