@extends('layouts.admin')
@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.update')}}" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        value="{{ $post['title'] }}">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text"
                        class="form-control"
                        id="body"
                        name="body"
                        value="{{ $post['body'] }}">
                </div>
                 <input type="hidden" name="id" value="{{$postId}}">"
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection