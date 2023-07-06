@extends('layouts.forum')

@section('content')
    <div class="container">
        @auth
            <div class="d-flex justify-content-lg-end mt-3">
                <a href="{{ url('/create') }}">
                    <button class="btn btn-primary" type="button">새로운 포스팅</button>
                </a>
            </div>
        @endauth
        @php
            $categories = App\Models\Category::orderby('title', 'asc')->get();
        @endphp
        @if (count($categories) > 0)
            @foreach ($categories as $category)
                @php
                    $posts = App\Models\Post::where('category_id', $category->id)
                        ->orderby('created_at', 'desc')
                        ->limit(3)
                        ->get();
                @endphp
                @if (count($posts) > 0)
                    <div class="row mt-3">
                        <div class="col-12">
                            <h4>{{ $category->title }}</h4>
                            @foreach ($posts as $post)
                                <li class="list-group-item">
                                    <a href="{{ url('/') }}/{{ $post->id }}/view">{{ $post->title }}</a>
                                    <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                                    <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                                    <br> <small>{{ $post->created_at }} | by KHS</small>
                                </li>
                            @endforeach
                            <div class="col-12 my-3">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <a href="{{ url('/') }}/{{ $category->id }}/category" class="btn btn-dark w-50">All
                                        Postings of {{ $category->title }} Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
@endsection
