<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skill-pages.css') }}">

    <style>
        .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
        .page-header, .test-page-content { padding-top: 50px; }
        .test-header { margin-bottom: 30px; }
        .test-header h1 { color: #23085A; font-size: 32px; font-weight: bold; margin-bottom: 20px; }
        .progress-bar { width: 100%; background: #eee; height: 5px; margin: 10px 0; position: relative; border-radius: 5px; overflow: hidden; }
        .progress { width: 10%; background: #337ab7; height: 100%; }
        .timer { font-weight: bold; margin-top: 10px; text-align: right; font-size: 14px; }
        .question-container { background: #f2f2f2; padding: 30px; border-radius: 10px; margin-top: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .navigation { display: flex; justify-content: space-between; margin-bottom: 20px; }
        .navigation button { color: #5b4b8a; background: none; border: none; font-weight: bold; font-size: 16px; cursor: pointer; }
        .question-number { font-size: 16px; margin-bottom: 10px; }
        .question { margin-bottom: 10px; font-size: 16px; }
        .question-content { background: white; padding: 15px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px; }
        .options { flex-direction: column; gap: 10px; }
        .option { background: white; border: 1px solid #ccc; padding: 12px; border-radius: 5px; display: flex; align-items: center; font-size: 16px; }
        .option input[type="radio"] { margin-right: 10px; }
        .correct {
    background-color: #d4edda !important;
    border: 1px solid #28a745 !important;
    color: #155724 !important;
}

.wrong {
    background-color: #f8d7da !important;
    border: 1px solid #dc3545 !important;
    color: #721c24 !important;
}

.try-again-btn {
    margin-top: 20px;
    text-align: center;
}

    </style>
</head>
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>
@include('partial.header')

<div class="container">
    <div class="test-header">
        <h1>Test your English</h1>

        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <div class="timer" id="timer">Time remaining: 30:00</div>
        <div class="score mt-3 text-center text-success font-weight-bold" id="score-area" style="font-size: 20px;"></div>


        <div class="question-container">
            <div class="navigation">
                <button type="button" onclick="loadQuestion(currentIndex - 1)" id="prevButton">&lt; Previous</button>
                <button type="button" onclick="loadQuestion(currentIndex + 1)" id="nextButton">Next &gt;</button>
            </div>

            <div class="question-number" id="question-number">
                Question 1 of {{ $totalQuestions }}
            </div>

            <div class="question">Choose the best word or phrase to complete the sentence.</div>
            <div class="question-content" id="question-content">Question text here</div>

            <div class="options">
                <label class="option"><input type="radio" name="answer" value="A" id="optionA"><span id="textA"></span></label>
                <label class="option"><input type="radio" name="answer" value="B" id="optionB"><span id="textB"></span></label>
                <label class="option"><input type="radio" name="answer" value="C" id="optionC"><span id="textC"></span></label>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <button type="button" class="btn btn-success" onclick="finishTest()">Finish Test</button>
            </div>
        </div>
    </div>
</div>

@include('partial.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    var totalTime = 30 * 60;
    var timeLeft = totalTime;
    var timerInterval;
    var timerElement = document.getElementById('timer');
    var progressElement = document.querySelector('.progress');

    var questions = @json($questions);
    questions.forEach(q => {
        q.options = q.options.map(opt => ({
            ...opt,
            is_correct: opt.is_correct === 1
        }));
    });

    var totalQuestions = questions.length;
    var currentIndex = 0;
    var answers = {};
    var testFinished = false;

    function startTimer() {
        timerInterval = setInterval(() => {
            var minutes = Math.floor(timeLeft / 60);
            var seconds = timeLeft % 60;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            timerElement.innerHTML = 'Time remaining: ' + minutes + ':' + seconds;
            progressElement.style.width = ((totalTime - timeLeft) / totalTime) * 100 + '%';

            if (timeLeft > 0) {
                timeLeft--;
            } else {
                clearInterval(timerInterval);
                alert('Time is up!');
                finishTest();
            }
        }, 1000);
    }

    function saveAnswer() {
        if (testFinished) return;
        const selected = document.querySelector('input[name="answer"]:checked');
        if (selected) {
            answers[currentIndex] = { answer: selected.value };
        }
    }

    function loadQuestion(index) {
        if (index < 0 || index >= totalQuestions) return;
        saveAnswer();
        currentIndex = index;
        renderQuestion();
    }

    function renderQuestion() {
        const q = questions[currentIndex];
        document.getElementById('question-number').innerText = `Question ${currentIndex + 1} of ${totalQuestions}`;
        document.getElementById('question-content').innerText = q.question;

        document.getElementById('textA').innerText = q.options[0]?.text || '';
        document.getElementById('textB').innerText = q.options[1]?.text || '';
        document.getElementById('textC').innerText = q.options[2]?.text || '';

        const radios = document.querySelectorAll('input[name="answer"]');
        radios.forEach((radio, i) => {
            radio.checked = false;
            radio.disabled = testFinished;
            radio.parentElement.classList.remove('correct', 'wrong');
        });

        if (answers[currentIndex]?.answer) {
            document.querySelector(`input[name="answer"][value="${answers[currentIndex].answer}"]`).checked = true;
        }

        if (testFinished) {
            const correctIndex = q.options.findIndex(opt => opt.is_correct);
            const correctLetter = ['A', 'B', 'C'][correctIndex];
            radios.forEach((radio, i) => {
                const letter = ['A', 'B', 'C'][i];
                if (letter === correctLetter) {
                    radio.parentElement.classList.add('correct');
                } else if (letter === answers[currentIndex]?.answer) {
                    radio.parentElement.classList.add('wrong');
                }
            });
        }

        document.getElementById('prevButton').style.visibility = currentIndex === 0 ? 'hidden' : 'visible';
        document.getElementById('nextButton').style.visibility = currentIndex === totalQuestions - 1 ? 'hidden' : 'visible';
    }

    function finishTest() {
    saveAnswer();
    if (!confirm('Are you sure you want to submit your answers?')) return;

    clearInterval(timerInterval);
    testFinished = true;

    let correct = 0;
    for (let i = 0; i < totalQuestions; i++) {
        const userAnswer = answers[i]?.answer;
        const correctIndex = questions[i].options.findIndex(opt => opt.is_correct);
        const correctLetter = ['A', 'B', 'C'][correctIndex];
        if (userAnswer === correctLetter) correct++;
    }

    const percent = ((correct / totalQuestions) * 100).toFixed(2);
    const levelText = correct <= 7
    ? "Based on your results we recommend learning materials at A1 level."
    : "Based on your results we recommend learning materials at A2 level.";

   Swal.fire({
    title: 'Your score',
    html: `Task: ${correct} out of ${totalQuestions} (${percent}%)<br><br><strong>${levelText}</strong>`,
    icon: 'info',
    confirmButtonText: 'OK'
    }).then(() => {
        // Ẩn nút Finish Test sau khi hiện kết quả
        const finishBtn = document.querySelector('button.btn-success');
        if (finishBtn) finishBtn.style.display = 'none';

        renderQuestion(); // hiển thị đáp án đúng/sai
        showTryAgainButton();
    });
}


    function showTryAgainButton() {
        if (document.getElementById('tryAgainBtn')) return;

        const container = document.querySelector('.question-container');
        const tryAgainDiv = document.createElement('div');
        tryAgainDiv.className = 'try-again-btn';

        const btn = document.createElement('button');
        btn.className = 'btn btn-warning';
        btn.id = 'tryAgainBtn';
        btn.textContent = 'Try Again';
        btn.onclick = resetTest;

        tryAgainDiv.appendChild(btn);
        container.appendChild(tryAgainDiv);
    }

    function resetTest() {
        answers = {};
        currentIndex = 0;
        testFinished = false;
        timeLeft = totalTime;
        document.getElementById('timer').innerText = 'Time remaining: 30:00';
        document.querySelector('.progress').style.width = '0%';

        // Clear selection and styles
        document.querySelectorAll('.option').forEach(el => {
            el.classList.remove('correct', 'wrong');
        });

        document.querySelectorAll('input[name="answer"]').forEach(el => {
            el.disabled = false;
        });

        // Remove Try Again button
        const btn = document.getElementById('tryAgainBtn');
        if (btn) btn.parentElement.remove();
// Hiện lại nút Finish Test
    const finishBtn = document.querySelector('button.btn-success');
    if (finishBtn) finishBtn.style.display = 'inline-block';
        renderQuestion();
        startTimer();
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderQuestion();
        startTimer();
    });
</script>
</body>
</html>