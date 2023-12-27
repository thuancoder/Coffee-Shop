@section('title')
    Danh Sách User và Admin
@endsection
@section('content')
    <div class="card-body table-responsive p-0 table-striped">
        <caption>Danh sách Admin</caption>
        <br>
        <table class="table table-hover">

            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Ngày tạo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @if($user->user_type == "ADM")
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
{{--                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-primary">Sửa</a>--}}
{{--                        <a href="{{route('admin.products.delete',$product->id)}}" class="btn btn-danger">Xóa</a>--}}
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    {{$users->links()}}
    <div class="card-body table-responsive p-0 table-striped">
        <caption>Danh sách User</caption>
        <table class="table table-hover">

            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Ngày tạo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                @if($user->user_type == "USER")
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        {{--                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-primary">Sửa</a>--}}
                        {{--                        <a href="{{route('admin.products.delete',$product->id)}}" class="btn btn-danger">Xóa</a>--}}
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
    {{$users->links()}}
@endsection

@extends('admin.layouts.master')
