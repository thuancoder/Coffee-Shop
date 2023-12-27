@section('title')
    Danh Sách Đơn Hàng
@endsection
@section('content')
    <div class="card-body table-responsive p-0 table-striped">
        <table class="table table-hover">

            <thead>
            <tr>
                <th>ID</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Ghi chú</th>
                <th>Địa chỉ</th>
                <th>Tổng tiền</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->customer_phone}}</td>
                        <td>{{$order->customer_email}}</td>
                        <td>{{$order->note}}</td>
                        <td>{{$order->shipping_address}}</td>
                        <td>{{$order->total}}</td>
                        <td>
                            {{--                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-primary">Sửa</a>--}}
                            {{--                        <a href="{{route('admin.products.delete',$product->id)}}" class="btn btn-danger">Xóa</a>--}}
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$orders->links()}}
@endsection

@extends('admin.layouts.master')
