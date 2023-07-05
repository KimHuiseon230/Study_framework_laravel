@extends('layouts.forum')
{{-- 메인 --}}
@section('inside_head_tag')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <label>Title</label>
                <input type="text"class="form-control"id="title">
            </div>
        </div>
        <div id="editor">
          <p>This is some sample content.</p>
      </div>
        {{-- category bootstrap:select option default 선택 --}}
        <div class="row my-3">
            <div class="col-12">
                <label>Category</label>
                <select class="form-select"id="category_id">
                    <option value="movie">movie</option>
                    <option value="movie">music</option>
                </select>
            </div>
        </div>
        {{-- ckedioer --}}
        <div class="row mt-5">
            <div class="col-12">
                <div id="editor">
                </div>
            </div>
        </div>
        {{-- 전송 bootstrap: right button --}}
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button class="btn btn-success" type="button">submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- ckedioer script --}}
@section('before_body_end_tag')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
