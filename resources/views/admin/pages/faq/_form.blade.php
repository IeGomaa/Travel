<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Question</span>
    </div>
    <textarea class="form-control" aria-label="Question" name="question">{{ old('question', $faq->question ?? '') }}</textarea>
</div>

@error('question')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Answer</span>
    </div>
    <textarea class="form-control" aria-label="Answer" name="answer">{{ old('answer', $faq->answer ?? '') }}</textarea>
</div>

@error('answer')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
