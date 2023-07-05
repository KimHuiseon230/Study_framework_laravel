@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="input-group mb-3">
            <input type="text"class="form-control"value="Movie">
        </div>
    </div>
    <div class="d-flex gap-2 justify-content-lg-end mt-2">
        <button class="btn btn-primary" type="button">수정</button>
        <button class="btn btn-danger" type="button">삭제</button>
    </div>
    </div>
@endsection
