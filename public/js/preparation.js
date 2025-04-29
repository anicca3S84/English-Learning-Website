let score = 0;
let totalQuestions = 0;
let completedQuestions = [];
let isDragDropLocked = false;
let selectedOption = null;

const finishBtn = document.querySelector('.spelling-task-finish-btn');
const retryBtn = document.querySelector('.spelling-task-retry-btn');
const overlay = document.querySelector('.spelling-task-overlay');
const modalText = document.querySelector('.modal-text');
const modalActions = document.querySelector('.modal-actions');
const optionContainer = document.querySelector('.preparation-task-options');
const itemsRemaining = document.getElementById('items-remaining');

// Hàm modal
function showModal(text, actionsHTML) {
    if (overlay && modalText && modalActions) {
        modalText.textContent = text;
        modalActions.innerHTML = actionsHTML;
        overlay.style.display = 'flex';
    }
}
function hideModal() {
    if (overlay) overlay.style.display = 'none';
}

// Hàm cập nhật số lượng item còn lại
function updateRemaining() {
    const ungroupedOptions = optionContainer.querySelectorAll('.prep-draggable').length;
    if (itemsRemaining) itemsRemaining.textContent = ungroupedOptions;
}

// Hàm khóa kéo thả
function lockDragAndDrop() {
    document.querySelectorAll('.prep-draggable').forEach(option => {
        option.setAttribute('draggable', 'false');
        option.style.cursor = 'default';
    });
    isDragDropLocked = true;
}

// Event chọn option
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.prep-draggable').forEach(option => {
        option.addEventListener('click', function(e) {
            e.stopPropagation();
            if (this.parentElement.classList.contains('prep-dropzone')) {
                optionContainer.appendChild(this);
                this.classList.remove('selected');
                selectedOption = null;
                updateRemaining();
                return;
            }
            if (!selectedOption) {
                selectedOption = this;
                this.classList.add('selected');
            }
        });
    });

    document.querySelectorAll('.prep-dropzone').forEach(zone => {
        zone.addEventListener('click', function(e) {
            e.stopPropagation();
            if (selectedOption) {
                this.appendChild(selectedOption);
                selectedOption.classList.remove('selected');
                selectedOption = null;
                updateRemaining();
            }
        });
    });

    optionContainer.addEventListener('click', function(e) {
        if (selectedOption && !e.target.classList.contains('prep-draggable')) {
            selectedOption.classList.remove('selected');
            selectedOption = null;
        }
    });

    updateRemaining();
});

// Xử lý nút Finish
finishBtn?.addEventListener('click', () => {
    showModal(
        'Do you want to finish?',
        '<button class="modal-btn confirm-yes">Yes</button><button class="modal-btn confirm-no">No</button>'
    );

    // Gán sau một chút để đảm bảo các nút đã render
    setTimeout(() => {
        document.querySelector('.confirm-yes')?.addEventListener('click', () => {
            hideModal();
            let score = 0;
            let total = 0;

            document.querySelectorAll('.prep-dropzone').forEach(dropzone => {
                const dropzoneQuestionId = dropzone.getAttribute('data-question-id');

                dropzone.querySelectorAll('.prep-draggable').forEach(option => {
                    total++;
                    const optionQuestionId = option.getAttribute('data-question-id');
                    if (dropzoneQuestionId === optionQuestionId) {
                        score++;
                        option.style.backgroundColor = '#d4edda';
                        option.style.borderColor = '#28a745';
                    } else {
                        option.style.backgroundColor = '#f8d7da';
                        option.style.borderColor = '#dc3545';
                    }
                });
            });

            const percentage = (score / total) * 100;
            showModal(
                `Your score: ${score} out of ${total} (${percentage.toFixed(2)}%)`,
                '<button class="modal-btn modal-ok">OK</button>'
            );

            setTimeout(() => {
                document.querySelector('.modal-ok')?.addEventListener('click', hideModal);
            }, 0);

            finishBtn.disabled = true;
            finishBtn.classList.add('locked');
            lockDragAndDrop();
        });

        document.querySelector('.confirm-no')?.addEventListener('click', hideModal);
    }, 0);
});


// Xử lý nút Retry
retryBtn?.addEventListener('click', () => {
    showModal(
        'Are you sure you want to try again?',
        '<button class="modal-btn modal-confirm">Yes</button><button class="modal-btn modal-cancel">No</button>'
    );

    document.querySelector('.modal-confirm')?.addEventListener('click', () => {
        hideModal();

        document.querySelectorAll('.prep-draggable').forEach(option => {
            option.style.backgroundColor = '';
            option.style.borderColor = '';
            optionContainer.appendChild(option);
        });

        finishBtn.disabled = false;
        finishBtn.classList.remove('locked');
        isDragDropLocked = false;

        updateRemaining();
    });

    document.querySelector('.modal-cancel')?.addEventListener('click', hideModal);
});
