@extends('layouts.admin.app')
@section('admin_content')
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Upload Image</button>
        </div>
    </div>
    @csrf
</form>


    @foreach ($categories as $category)
        <img src="/images/{{$category->icon_image}}" alt="">
    @endforeach
@endsection
