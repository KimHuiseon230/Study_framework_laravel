@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-lg-end mt-3">
            <a href="{{url('/create')}}">
                <button class="btn btn-primary" type="button">새로운 포스팅</button>
            </a>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <h4>Movie</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ url('/') }}/1/view">범죄도시</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                </ul>
                <div class="col-12 my-3">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button"class="btn btn-dark">All Postings of Movie Category</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-12">
                <h4>Music</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                </ul>
                <div class="col-12 my-3">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button"class="btn btn-dark">All Postings of Movie Category</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-12">
                <h4>Food</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                    <li class="list-group-item"><a href="{{ url('/') }}">A second item</a>
                        <span class="badge text-bg-info"><i class="fas fa-comment-dots"></i>3</span>
                        <span class="badge rounded-pill text-bg-danger"><i class="fas fa-heart"></i>4</span>
                        <br> <small>2023-07-04 | by KHS</small>
                    </li>
                </ul>
                <div class="col-12 my-3">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button"class="btn btn-dark">All Postings of Movie Category</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
@endsection --}}
