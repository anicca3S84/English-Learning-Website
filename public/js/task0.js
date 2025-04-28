

document.addEventListener("DOMContentLoaded", function () {
    const dragOptionsContainer = document.querySelector(".drag-options");
    const dropBoxes = document.querySelectorAll(".drop-box");

    // Gán drag cho mọi .drag-option
    function makeDraggable(el) {
        el.setAttribute("draggable", "true");

        el.addEventListener("dragstart", (e) => {
            e.dataTransfer.setData("text/plain", e.target.textContent);
            e.dataTransfer.setData("source-id", e.target.dataset.id || "");
            e.dataTransfer.effectAllowed = "move";
            e.target.classList.add("dragging");
        });

        el.addEventListener("dragend", (e) => {
            e.target.classList.remove("dragging");
        });
    }

    // Gán draggable cho ban đầu
    const initialOptions = document.querySelectorAll(".drag-option");
    initialOptions.forEach((opt, idx) => {
        opt.dataset.id = "opt-" + idx; // Gán ID duy nhất để theo dõi
        makeDraggable(opt);
    });

    // Drop vào .drop-box
    dropBoxes.forEach((box) => {
        box.addEventListener("dragover", (e) => {
            e.preventDefault();
            box.style.backgroundColor = "#eef7e5";
        });

        box.addEventListener("dragleave", () => {
            box.style.backgroundColor = "#f9f9f9";
        });

        box.addEventListener("drop", (e) => {
            e.preventDefault();
            box.style.backgroundColor = "#f9f9f9";

            const draggedText = e.dataTransfer.getData("text/plain");
            const draggedId = e.dataTransfer.getData("source-id");

            // Kiểm tra xem phần tử đang được kéo có trong drop-box khác không
            const draggedEl = document.querySelector(
                `.drag-option[data-id="${draggedId}"]`
            );
            if (!draggedEl) return;

            // Nếu drop-box này đã có chữ rồi thì trả chữ cũ về vùng drag-options
            const existing = box.querySelector(".drag-option");
            if (existing && existing !== draggedEl) {
                dragOptionsContainer.appendChild(existing);
            }

            // Nếu đang kéo từ drag-options, xóa khỏi vùng đó
            if (dragOptionsContainer.contains(draggedEl)) {
                dragOptionsContainer.removeChild(draggedEl);
            } else {
                // Nếu đang kéo từ drop-box khác, tìm và xóa
                dropBoxes.forEach((b) => {
                    if (b !== box && b.contains(draggedEl)) {
                        b.innerHTML = "";
                    }
                });
            }

            box.innerHTML = ""; // Xóa nội dung cũ
            box.appendChild(draggedEl); // Thêm phần tử vào drop-box
        });
    });

    // Cho phép kéo lại từ drop-box về drag-options
    dragOptionsContainer.addEventListener("drop", (e) => {
        e.preventDefault();
        const draggedId = e.dataTransfer.getData("source-id");
        const draggedEl = document.querySelector(
            `.drag-option[data-id="${draggedId}"]`
        );

        if (!draggedEl) return;

        // Xóa khỏi box hiện tại
        dropBoxes.forEach((box) => {
            if (box.contains(draggedEl)) {
                box.innerHTML = "";
            }
        });

        // Tránh thêm lại nếu đã có trong drag-options
        if (!dragOptionsContainer.contains(draggedEl)) {
            dragOptionsContainer.appendChild(draggedEl);
        }
    });

    dragOptionsContainer.addEventListener("dragover", (e) => {
        e.preventDefault();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const audioButtons = document.querySelectorAll(".play-audio-btn");

    audioButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const audioSrc = button.getAttribute("data-audio");
            const audio = new Audio(audioSrc);
            audio.play();
        });
    });
});


function lockDragAndDrop() {
  const letters = document.querySelectorAll(".drag-option");
  const boxes = document.querySelectorAll(".drop-box");

  letters.forEach(letter => {
      letter.setAttribute("draggable", "false");
      letter.style.cursor = "default";
      letter.classList.add("no-arrow");
  });

  boxes.forEach(box => {
      box.style.pointerEvents = "none"; // disable interactions instead of replacing
  });

  isDragDropLocked = true;
}

function unlockDragAndDrop() {
    const letters = document.querySelectorAll(".drag-option");
    const boxes = document.querySelectorAll(".drop-box");
  
    letters.forEach(letter => {
        letter.setAttribute("draggable", "true");
        letter.style.cursor = "grab"; // hoặc "pointer" tùy bạn
        letter.classList.remove("no-arrow");
    });
  
    boxes.forEach(box => {
        box.style.pointerEvents = "auto"; // khôi phục tương tác
    });
  
    isDragDropLocked = false;
  }
  


document.getElementById("finish-btn").addEventListener("click", function () {
    const dropBoxes = document.querySelectorAll(".drop-box");
    let total = dropBoxes.length;
    let correct = 0;

    dropBoxes.forEach((dropBox) => {
        const dragged = dropBox.querySelector(".drag-option");
        const expected = dropBox.parentElement.getAttribute("data-correct");
        let boxCorrect = false;

        if (dragged && dragged.textContent.trim() === expected.trim()) {
            correct++;
            boxCorrect = true;
        }

        if (dragged) {
          dragged.classList.remove("correct", "incorrect");
          if (boxCorrect) {
              dragged.classList.add("correct");
          } else {
              dragged.classList.add("incorrect");
          }
      }

        lockDragAndDrop();
    });

    const messageBox = document.querySelector(".drag-task-message");
    messageBox.style.display = "block";

    if (correct === total) {
        messageBox.textContent = "🎉 Hoàn thành xuất sắc! Tất cả đều đúng.";
        messageBox.style.borderColor = "#4CAF50";
    } else {
        messageBox.textContent = `❌ Có ${total - correct} câu sai. Hãy thử lại nhé!`;
        messageBox.style.borderColor = "#f44336";
    }

  
});

document.getElementById("try-again-btn").addEventListener("click", function () {
    const messageBox = document.querySelector(".drag-task-message");
    messageBox.style.display="none";
    const dragOptionsContainer = document.querySelector(".drag-options");
    const dropBoxes = document.querySelectorAll(".drop-box");

    dropBoxes.forEach((dropBox) => {
        const draggedItem = dropBox.querySelector(".drag-option");
        if (draggedItem) {
          draggedItem.classList.remove("correct", "incorrect");
            dragOptionsContainer.appendChild(draggedItem);
        }
    });
    unlockDragAndDrop();

    // Optional: Clear any messages or highlights
    document.querySelector(".drag-task-message").textContent = "";
});
