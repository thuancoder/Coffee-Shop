@section('title')
    Sửa Danh Mục Sản Phẩm
@endsection
@section('content')
    <form role="form" action="{{route('admin.category.products.update',$categories->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="category_name">Tên danh mục</label>
            <input type="text" class="form-control" value="{{$categories->category_name}}" name="category_name" id="name" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="category_content">Mô tả</label>
            <input type="text" class="form-control" value="{{$categories->category_content}}" name="category_content" id="category_content" placeholder="Mô tả">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@extends('admin.layouts.master')
