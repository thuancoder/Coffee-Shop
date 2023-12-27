@section('main')
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-green-400 rounded">
                            <p class="text-green-800">{{ $message }}</p>
                        </div>
                    @endif
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                            <tr class="text-center">
                                <th>Hình ảnh</th>
                                <th>Tên</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="image-prod">
                                        <a href="#">
                                            <div class="img"
                                                 style="background-image:url({{asset('storage/images' . $item->attributes->thumbnail)}});"></div>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $item->name }}</p>

                                        </a>
                                    </td>
                                    <td class=" mt-6 md:justify-end md:flex">
                                        <div class="h-10 w-28">
                                            <div class="relative flex-row w-full h-8">
                                                <form action="{{ route('cart.update') }}" method="POST" class="d-flex">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id}}">
                                                    <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}"
                                                           class="form-control w-75"/>
                                                    <button
                                                        class="form-control w-25  text-sm rounded rounded shadow text-violet-100">
                                                        <span class="icon-check "></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <span class="text-sm font-medium lg:text-base">
                                            {{number_format($item->price, 0, '.', ',')}} VNĐ
                                        </span>
                                    </td>
                                    <td class="hidden text-right md:table-cell">{{number_format($item->price * $item->quantity , 0, '.', ',')}} VNĐ</td>
                                    <td class="hidden text-right md:table-cell product-remove">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="btn btn-primary"><span class="icon-close"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn btn-primary btn-outline-primary">Xóa tất cả
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Tổng tiền</h3>
                        <p class="d-flex">
                            <span>Sản phẩm</span>
                            <span>{{number_format(Cart::getTotal(), 0, '.', ',')}} VNĐ</span>
                        </p>
                        <p class="d-flex">
                            <span>Giao hàng</span>
                            <span>0.00 VNĐ</span>
                        </p>
                        <p class="d-flex">
                            <span>Giảm giá</span>
                            <span>0.00 VNĐ</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Tổng</span>
                            <span> {{number_format(Cart::getTotal(), 0, '.', ',')}} VNĐ</span>
                        </p>
                    </div>
                    <p class="text-center"><a href="{{route('getCheckout')}}" class="btn btn-primary py-3 px-4">Đi đến Thanh toán</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('client.layouts.master')

