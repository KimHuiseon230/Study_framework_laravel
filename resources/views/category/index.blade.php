@extends('layouts.forum')

@section('content')
    <div class="container">
        <form action="{{ url('/category/store') }}" method="post">
            @csrf
            <div class="row mt-5">
                <div class="col-12">
                    <label>Category Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
            </div>

            <div class="d-flex gap-2 justify-content-lg-end mt-2">
                <button class="btn btn-primary" type="submit">생성</button>
            </div>
        </form>
        <ul class="list-group">
            @foreach ($categories as $category)
              <li class="list-group-item">
                <a href="{{url('/')}}/category/{{$category->id}}/view">
                {{$category->title}}
                </a>
              </li>
            @endforeach
          </ul>
  
    </div>
@endsection
