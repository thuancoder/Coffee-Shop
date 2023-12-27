@section('title')
    Cập nhật Bài Viết
@endsection
@section('content')
    <form role="form" action="{{route('admin.posts.update',$posts->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên bài viết</label>
            <input type="text" class="form-control" value="{{$posts->name}}" name="name" id="name" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="post_content">Mô tả</label>
            <textarea class="textarea form-control" placeholder="Place some text here" id="post_content" name="post_content"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$posts->post_content}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumbnail">Hình Ảnh</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" value="{{$posts->thumbnail}}" name="thumbnail" id="thumbnail">
                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text" id="thumbnail">Upload</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="category_id">Loại</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category )
                    @if($posts->category_id == $category->id)
                        <option value="{{$category->id}}" selected> {{$category->category_name}} </option>
                    @else
                        <option value="{{$category->id}}"> {{$category->category_name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@extends('admin.layouts.master')
