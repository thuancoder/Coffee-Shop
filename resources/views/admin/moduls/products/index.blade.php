
@section('title')
    Danh Sách Sản Phẩm
@endsection
@section('content')
    <a href="{{route('export.pdf')}}">Xuất PDF</a>
    <div class="card-body table-responsive p-0 table-striped">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Slug</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Lượt xem</th>
                <th>Loại</th>
                <th>Giá</th>
                <th>Khuyến mãi</th>
                <th>Ngày tạo</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->slug}}</td>
                    <td>{!!$product->product_content!!}</td>
                    <td><img style="width: 100px" src="{{ asset('storage/images' . $product->thumbnail) }}"></td>
                    <td>{{$product->view}}</td>
                    <td>@foreach($categories as $category)
                            @if($category->id == $product->id_categories)
                                {{$category->category_name}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{number_format($product->price, 0, '.', ',')}} VNĐ</td>
                    <td>{{$product->sale_price}}%</td>
                    <td>
                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-primary">Sửa</a>
                        <a href="{{route('admin.products.delete',$product->id)}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$products->links()}}
@endsection

@extends('admin.layouts.master')
