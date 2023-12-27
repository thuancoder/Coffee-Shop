@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Cảm ơn bạn đã đặt hàng và thanh toán thành công!</h1>
                        <p>Xin vui lòng kiểm tra email của bạn để biết thêm thông tin chi tiết về đơn hàng của bạn.</p>
                        <p class="breadcrumbs"><span class="mr-2"><a class="btn btn-primary" href="{{route('client.products')}}">Tiếp tục mua hàng</a></span>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <h2></h2>

@endsection
@extends('client.layouts.master')
