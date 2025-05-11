<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Vocabulary List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    <style>
        .vocab_x87_header-banner {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .vocab_x87_search-section {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .vocab_x87_search-box {
            position: relative;
            max-width: 500px;
        }

        .vocab_x87_search-box input {
            border-radius: 25px;
            padding-right: 50px;
            height: 40px;
        }

        .vocab_x87_search-box .vocab_x87_go-btn {
            position: absolute;
            right: 0;
            top: 0;
            height: 40px;
            width: 50px;
            border-radius: 0 25px 25px 0;
            background-color: #4a76a8;
            color: white;
            border: none;
        }

        .vocab_x87_download-btn {
            background-color: #4a76a8;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
        }

        .vocab_x87_word-table {
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .vocab_x87_word-table td {
            vertical-align: middle;
            padding: 12px 15px;
        }

        .vocab_x87_word {
            color: #4a76a8;
            font-weight: 500;
        }

        .vocab_x87_part-of-speech {
            color: #555;
            font-style: italic;
        }

        .vocab_x87_level-badge {
            background-color: #6c757d;
            color: white;
            padding: 3px 6px;
            border-radius: 3px;
            font-size: 12px;
        }

        .vocab_x87_audio-icon {
            color: #4a76a8;
            cursor: pointer;
            margin-right: 10px;
        }

        .vocab_x87_audio-icon:hover {
            color: #007bff;
        }

        .vocab_x87_audio-icon.text-danger:hover {
            color: red !important;
        }

        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
        .vocab_x87_word-row:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        @include('partial.header')


        <!--Content here  -->

        <!-- Breadcrumb -->
        <!-- <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vocabulary</li>
                </ol>
            </nav>
        </div> -->
        <!-- End Breadcrumb -->
        <div style="margin-bottom: 40px;" class="container">
            <div class="vocab_x87_search-section">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="vocab_x87_search-box">
                            <input type="text" class="form-control searchInput" placeholder="Type and press Go">
                            <button class="vocab_x87_go-btn">Go</button>
                        </div>
                    </div>
                    <div class="col-md-7 text-md-right mt-3 mt-md-0">
                        <button id="downloadBtn" class="vocab_x87_download-btn">
                            <i class="fas fa-download"></i> Download
                        </button>
                    </div>
                </div>
                <!-- Thêm 1 nơi để hiện Not found -->
                <div id="notFoundMessage" style="color: red; margin-top: 10px; display: none;">Not found</div>
            </div>
            <div class="table-container" style="max-height: 400px; overflow-y: auto;">
                <div class="vocab_x87_word-table">
                    <table class="table table-hover mb-0" style="min-width: 100%">
                        <tbody>
                            @foreach($vocabularies as $vocabulary)
                            <tr class="vocab_x87_word-row" onclick="openVocabularyModal('{{ e($vocabulary->word) }}', '{{ e($vocabulary->pos) }}', '{{ e($vocabulary->phonetic) }}', '{{ e($vocabulary->phonetic_am) }}', '{{ e($vocabulary->phonetic_am_text) }}', '{{ e($vocabulary->phonetic_text) }}', {{ json_encode($vocabulary->senses) }})">

                                <td width="20%">
                                    <span class="vocab_x87_word">{{ $vocabulary->word }}</span>
                                    <span class="vocab_x87_part-of-speech">{{ $vocabulary->pos }}</span>
                                </td>
                                <td width="10%" class="text-center">
                                    <span class="vocab_x87_level-badge">A1</span>
                                </td>
                                <td width="10%" class="text-center">
                                    <i class="fas fa-volume-up vocab_x87_audio-icon" onclick="playAudio('{{ $vocabulary->phonetic }}')"></i>
                                    <i class="fas fa-volume-up vocab_x87_audio-icon text-danger" onclick="playAudio('{{ $vocabulary->phonetic_am }}')"></i>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <audio id="main-audio"></audio>

        <!-- Modal for Vocabulary Details -->
        <div id="vocabularyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vocabularyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content shadow-lg border-0 rounded-4">
                    <div class="modal-header bg-primary text-white rounded-top-4">
                        <h5 class="modal-title" id="vocabularyModalLabel">📚 Vocabulary Detail</h5>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-4 text-center">
                            <h2 id="vocabularyWord" class="fw-bold"></h2>
                            <p id="vocabularyPos" class="text-muted mb-2"></p>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p><strong>🇺🇸 US Pronunciation:</strong> <span id="vocabularyPhoneticAmText"></span></p>
                                <audio id="vocabularyAudioAm" controls class="w-100"></audio>
                            </div>
                            <div class="col-md-6">
                                <p><strong>🇬🇧 UK Pronunciation:</strong> <span id="vocabularyPhoneticText"></span></p>
                                <audio id="vocabularyAudio" controls class="w-100"></audio>
                            </div>
                        </div>
                        <div id="senseDetails" class="mt-4">
                            <!-- Sense and Example will be loaded here -->
                        </div>
                    </div>
                    <!-- <div class="modal-footer justify-content-center">
                        
                    </div> -->
                </div>
            </div>
        </div>

        <!-- /.Content here  -->

        @include('partial.footer')

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
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jarallax@2.0.1/dist/jarallax.min.js"></script>
    <!-- template js -->
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        // aduio play
        function playAudio(audioUrl) {
            const audio = document.getElementById('main-audio');
            if (audio.src !== audioUrl) {
                audio.src = audioUrl;
            }
            audio.play().catch(err => {
                console.error('Play error:', err);
            });
        }

        //handle search input
        let debounceTimer;
        const input = document.querySelector('.searchInput');
        const notFoundMessage = document.getElementById('notFoundMessage');

        input.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                const keyword = input.value.trim().toLowerCase();
                if (keyword === '') {
                    notFoundMessage.style.display = 'none';
                    return;
                }

                const rows = document.querySelectorAll('.vocab_x87_word-table tbody tr');
                let found = false;
                let matchedRow = null;

                rows.forEach(row => {
                    const word = row.querySelector('.vocab_x87_word').textContent.trim().toLowerCase();
                    if (word.indexOf(keyword) !== -1) {
                        found = true;
                        matchedRow = row; // Lưu hàng tìm được
                        // Highlight từ gần đúng
                        row.style.backgroundColor = '#d1ecf1';
                        setTimeout(() => {
                            row.style.backgroundColor = ''; // Reset màu sau 1s
                        }, 5000);
                    }
                });

                if (matchedRow) {
                    const tableContainer = document.querySelector('.table-container');

                    const containerTop = tableContainer.getBoundingClientRect().top;
                    const rowTop = matchedRow.getBoundingClientRect().top;

                    const offset = rowTop - containerTop;

                    tableContainer.scrollTo({
                        top: tableContainer.scrollTop + offset - tableContainer.clientHeight / 2 + matchedRow.clientHeight / 2,
                        behavior: 'smooth'
                    });
                }

                if (!found) {
                    notFoundMessage.style.display = 'block';
                } else {
                    notFoundMessage.style.display = 'none';
                }
            }, 100); // 100ms debounce
        });




        //handle download button
        document.getElementById('downloadBtn').addEventListener('click', function() {
            const rows = document.querySelectorAll('.vocab_x87_word-table tbody tr');
            let csvContent = "Word,Part of Speech,Level\n"; // Header dòng đầu tiên

            rows.forEach(row => {
                const word = row.querySelector('.vocab_x87_word')?.textContent.trim() || '';
                const pos = row.querySelector('.vocab_x87_part-of-speech')?.textContent.trim() || '';
                const level = row.querySelector('.vocab_x87_level-badge')?.textContent.trim() || '';

                csvContent += `"${word}","${pos}","${level}"\n`;
            });

            // Tạo 1 blob file từ chuỗi CSV
            const blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });

            // Tạo 1 đường link ảo để tự động tải
            const link = document.createElement("a");
            const url = URL.createObjectURL(blob);
            link.setAttribute("href", url);
            link.setAttribute("download", "vocabulary_list.csv");
            link.style.visibility = 'hidden';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        // handle show modal 

        function openVocabularyModal(word, pos, phonetic, phoneticAm, phoneticAmText, phoneticText, senses) {
            console.log(senses); // Đảm bảo senses được truyền đúng

            // Cập nhật modal với thông tin từ vựng và sense
            document.getElementById('vocabularyWord').textContent = word;
            document.getElementById('vocabularyPos').textContent = pos;
            document.getElementById('vocabularyPhoneticAmText').textContent = phoneticAmText;
            document.getElementById('vocabularyPhoneticText').textContent = phoneticText;

            // Hiển thị sense vào modal
            let senseList = '';
            senses.forEach(sense => {
                senseList += `<div style="margin-bottom: 10px;">`;
                senseList += `<p class="text-primary fw-bold mb-1"><strong>Sense:</strong> ${sense.definition}</p>`;
                if (sense.example && sense.example.length > 0) {
                    senseList += `<ul>`;
                    sense.example.forEach(exampleItem => {
                        senseList += `<li>${exampleItem.x}</li>`;
                    });
                    senseList += `</ul>`;
                }
                senseList += `</div>`;
            });
            document.getElementById('senseDetails').innerHTML = senseList; // Gắn sense vào modal

            // Cập nhật nguồn âm thanh
            document.getElementById('vocabularyAudio').src = phonetic;
            document.getElementById('vocabularyAudioAm').src = phoneticAm;

            // 👉 Đây, thêm dòng này để show modal
            $('#vocabularyModal').modal('show');
        }
    </script>
</body>

</html>