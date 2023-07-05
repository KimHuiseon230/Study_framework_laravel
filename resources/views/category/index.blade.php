@extends('layouts.forum')

@section('content')
    <div class="container">
    <form action="{{url('/category/store')}}" method="post">
        @csrf
            <div class="row mt-5">
                <div class="col-12">
                    <label>Category Title</label>
                    <input type="text" class="form-control" id="title">
                </div>
            </div>

            <div class="d-flex gap-2 justify-content-lg-end mt-2">
                <button class="btn btn-primary" type="button">생성</button>
            </div>
        </form>
        <hr>
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('/') }}/category/1/view">Moive</a>
            <li class="list-group-item">Music</li>
            <li class="list-group-item">Food</li>

        </ul>
    </div>
@endsection
