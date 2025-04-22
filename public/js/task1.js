const letters = document.querySelectorAll('.spelling-task-letter');
const boxes = document.querySelectorAll('.spelling-task-box');
const letterContainer = document.querySelector('.spelling-task-letters');

// Khi bắt đầu kéo
letters.forEach(letter => {
    letter.addEventListener('dragstart', e => {
        e.dataTransfer.setData('text/plain', letter.id);
    });
});

// Cho phép thả và xử lý khi thả
boxes.forEach(box => {
    box.addEventListener('dragover', e => {
        e.preventDefault(); // Cho phép thả
    });

    box.addEventListener('drop', e => {
        e.preventDefault();
        const letterId = e.dataTransfer.getData('text/plain');
        const letterEl = document.getElementById(letterId);

        if (!box.hasChildNodes()) {
            box.appendChild(letterEl);

            // ❌ Tắt kéo
            letterEl.setAttribute('draggable', 'false');
            letterEl.style.cursor = 'default';

            // ❌ Ẩn mũi tên 👇 bằng cách thêm class
            letterEl.classList.add('no-arrow');

            // ✅ Khi click thì trả về hàng ban đầu
            letterEl.addEventListener('click', () => {
                letterContainer.appendChild(letterEl);

                // Bật lại kéo
                letterEl.setAttribute('draggable', 'true');
                letterEl.style.cursor = 'grab';
                letterEl.classList.remove('no-arrow');
            }, { once: true }); // chỉ cho click một lần
        }
    });
});
