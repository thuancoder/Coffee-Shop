@section('title')
    Danh Sách Loại Sản Phẩm
@endsection
@section('content')
    <div class="card-body table-responsive p-0 table-striped">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>Hành động</th>
            </tr>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_content}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td>
                        <a href="{{route('admin.category.products.edit',$category->id)}}" class="btn btn-primary">Sửa</a>
                        <a href="{{route('admin.category.products.delete',$category->id)}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>@endsection

@extends('admin.layouts.master')
