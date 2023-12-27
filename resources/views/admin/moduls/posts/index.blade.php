@section('title')
    Danh Sách Bài Viết
@endsection
@section('content')
    <div class="card-body table-responsive p-0 table-striped">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Slug</th>
                <th>Hình Ảnh</th>
                <th>Loại</th>
                <th>Lượt xem</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->slug}}</td>
                    <td><img style="width: 100px" src="{{ asset('storage/images' . $post->thumbnail) }}"></td>

                    <td>@foreach($categories as $category)
                        @if($category->id == $post->category_id)
                            {{$category->category_name}}
                        @endif
                        @endforeach
                    </td>

                    <td>{{$post->view}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-primary">Sửa</a>
                        <a href="{{route('admin.posts.delete',$post->id)}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$posts->links()}}
@endsection

@extends('admin.layouts.master')
