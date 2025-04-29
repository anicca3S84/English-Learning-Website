<style>
/* CSS giữ nguyên */
.preparation-task-options {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 10px;
    background-color: #f6f8fa;
    border-radius: 8px;
    margin-bottom: 20px;
}
.prep-draggable {
    padding: 8px 12px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 6px;
    cursor: grab;
    user-select: none;
    font-size: 16px;
    text-align: center;
    min-width: 120px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: background-color 0.2s;
    margin-bottom: 8px;
}
.prep-draggable:hover {
    background-color: #eef1f5;
}
.preparation-task-groups {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
}
.prep-group {
    width: 48%;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    min-height: 250px;
}
.prep-group-title {
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 18px;
}
.prep-dropzone {
    min-height: 180px;
    background-color: #fff;
    border: 2px dashed #ccc;
    border-radius: 6px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.prep-draggable.selected {
    background-color: #d0e6ff;
    border-color: #3399ff;
}
/* Badge giống ảnh mẫu */
.items-remaining-badge {
    position: absolute;
    top: 60px;
    right: 30px;
    background-color: #e6f7fc;
    color: #333;
    width: 150px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    border-radius: 5px;
    font-size: 12px;
  }
</style>

<div class="spelling-task-wrapper">
    <div class="spelling-task-message" style="display: none; margin-bottom: 10px;"></div>

    <!-- Vị trí title + instruction + items remaining -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
        <div>
            <span style="color: #688d00; font-size: 20px;font-weight: bold; margin-bottom: 8px;">{{ $task->title }}</span><br>
            <span style="font-size: 14px;">{{ $task->instruction ?? 'Put the sentences in the correct group.' }}</span>
        </div>
        <div class="items-remaining-badge">
            <span id="items-remaining"
                  data-total="{{ $task->questions->where('type', 'preparation')->flatMap->options->count() }}">
                {{ $task->questions->where('type', 'preparation')->flatMap->options->count() }}
            </span> items remaining
        </div>
    </div>

    <div class="preparation-task-options">
        @foreach ($task->questions->where('type', 'preparation') as $question)  
            @foreach ($question->options->shuffle() as $option)
                <div class="prep-draggable" draggable="true"
                     data-question-id="{{ $question->id }}"
                     data-answer="{{ $option->text }}">
                    {{ $option->text }}
                </div>
            @endforeach
        @endforeach
    </div>

    <div class="preparation-task-groups">
        @foreach ($task->questions->where('type', 'preparation')->sortBy('question_order') as $groupQuestion)
            <div class="prep-group">
                <div class="prep-group-title">{{ $groupQuestion->question }}</div>
                <div class="prep-dropzone"
                     data-group="{{ $groupQuestion->question }}"
                     data-question-id="{{ $groupQuestion->id }}">
                </div>
            </div>
        @endforeach
    </div>

    <div class="spelling-task-bottom-controls">
        <div class="spelling-task-buttons">
            <button class="spelling-task-btn spelling-task-finish-btn">
                <i class="fa fa-flag"></i> Finish
            </button>
            <button class="spelling-task-btn spelling-task-retry-btn">
                <i class="fa fa-rotate-right"></i> Try again
            </button>
        </div>
    </div>

    <!-- Overlay xác nhận -->
    <div class="spelling-task-overlay finish-confirm" style="display: none;">
        <div class="spelling-task-modal">
            <div class="modal-text">Are you sure you want to finish this task?</div>
            <div class="modal-actions">
                <button class="modal-btn confirm-yes">Yes</button>
                <button class="modal-btn confirm-no">No</button>
            </div>
        </div>
    </div>

    <div class="spelling-task-overlay retry-confirm" style="display: none;">
        <div class="spelling-task-modal">
            <p class="modal-text">Are you sure you want to retry this task?</p>
            <div class="modal-actions">
                <button class="modal-btn modal-confirm">Yes</button>
                <button class="modal-btn modal-cancel">No</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/preparation.js') }}"></script>
