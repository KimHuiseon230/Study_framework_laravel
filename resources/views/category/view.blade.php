@extends('layouts.forum')
@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                {{-- 수정기능 --}}
                <form action="/category/{{ $category->id }}/update"method="POST">
                    @method('PUT')
                    @csrf
                    <input type="text"class="form-control"value="{{ $category->title }}"name="title">
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button class="btn btn-info me-md-2"type="submit">수정</button>
                    </form>
                    {{-- 삭제기능 --}}
                    <form action="/category/{{ $category->id }}/delete"method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger"type="submit">삭제</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
