@extends('layouts.forum')
@section('content')
    <!-- 내용 -->
    <div class="container">

        {{-- 새로운포스팅  --}}
        {{-- bootstrap right button --}}
        <div class="row mt-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ url('/create') }}">
                        <button class="btn btn-success"type="button">새로운포스팅</button>
                    </a>
                </div>
            </div>
        </div>
       
        @if (count($posts) > 0)
            <div class="row mt-5">
                <div class="col-12">
                    <h4>{{ $category_title }}</h4>
                    <ul class="list-group">
                        @foreach ($posts as $post)
                            <li class="list-group-item">
                                <a href="{{ url('/') }}/{{ $post->id }}/view">{{ $post->title }}</a>
                                <span class="badge text-bg-info"> <i class="fas fa-comment-dots"></i>3</span>
                                <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                                <br>
                                <small>{{ $post->create_at }}| by 홍길동</small>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr>
        @endif
    </div>
@endsection
