@section('title')
    Thêm Danh Mục Bài Viết
@endsection
@section('content')
    <form role="form" action="{{route('admin.category.posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="category_name">Tên danh mục</label>
            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Tên danh mục">
        </div>
        <div class="form-group">
            <label for="category_content">Mô tả</label>
            <input type="text" class="form-control" name="category_content" id="category_content" placeholder="Mô tả">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@extends('admin.layouts.master')
