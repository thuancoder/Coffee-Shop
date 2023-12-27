@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Thanh toán</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Thanh toán</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 ftco-animate">
                    <form action="{{route('payment.create')}}" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf
                        <h3 class="mb-4 billing-heading">Thông tin đơn hàng</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name">Họ và tên</label>
                                    <input type="text" name="customer_name" class="form-control" placeholder="">
                                    @if ($errors->has('customer_name'))
                                        <small class="text-danger">
                                            {{ $errors->first('customer_name') }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_phone">Số điện thoại</label>
                                    <input type="text" name="customer_phone" class="form-control" placeholder="">
                                    @if ($errors->has('customer_phone'))
                                        <small class="text-danger">
                                            {{ $errors->first('customer_phone') }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_email">Email</label>
                                    <input type="email" name="customer_email" class="form-control" placeholder="">
                                    @if ($errors->has('customer_email'))
                                        <small class="text-danger">
                                            {{ $errors->first('customer_email') }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shipping_address">Địa chỉ</label>
                                    <input type="text" name="shipping_address" required class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="note">Ghi chú</label>
                                    <textarea name="note" id="note" cols="30" rows="10" class="form-control">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Tổng đơn hàng</h3>
                                <p class="d-flex">
                                    <span>Sản phẩm</span>
                                    <span> {{ number_format(Cart::getTotal(),0,'.',',') }} VNĐ</span>
                                </p>
                                <p class="d-flex">
                                    <span>Vận chuyển</span>
                                    <span>0</span>
                                </p>
                                <p class="d-flex">
                                    <span>Giảm giá</span>
                                    <span>0</span>
                                </p>
                                <hr>
                                <p class="d-flex">
                                    <span>Tổng</span>
                                    <spam> {{ number_format(Cart::getTotal(),0,'.',',') }} VNĐ</spam>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart-detail ftco-bg-dark p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Phuươn thức thanh toán</h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value="" class="mr-2">Tôi đã đọc và chấp nhận các điều khoản và điều kiện</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary py-3 px-4" type="submit" name="redirect">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                    </form><!-- END -->
                </div> <!-- .col-md-8 -->




                <div class="col-xl-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <div class="icon">
                                    <span class="icon-search"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Danh mục</h3>
                            <li><a href="#">Đồ ăn<span>(12)</span></a></li>
                            <li><a href="#">Đồ uống<span>(22)</span></a></li>
                            <li><a href="#">Bánh ngọt<span>(37)</span></a></li>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{asset('assets/images/image_1.jpg')}});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Sở thích uống cà phê tiết lộ bí mật động trời về tính cách của bạn</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 14/08/2023</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{asset('assets/images/image_2.jpg')}})"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Bật mí 4 cách trang trí quán cafe đơn giản mà hút khách</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 14/08/2023</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{asset('assets/images/image_3.jpg')}})"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Cà phê hạt pha máy - Cách lựa chọn cà phê nguyên chất ngon</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> 14/08/2023</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->
@endsection
@extends('client.layouts.master')
