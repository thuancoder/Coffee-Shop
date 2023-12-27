@section('title')
    Chi tiết sản phẩm
@endsection
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Chi tiêt sản phẩm</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Chi tiết sản phẩm</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/menu-2.jpg" class="image-popup"><img src="{{asset('storage/images' . $productSingle->thumbnail)}}" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{$productSingle->name}}</h3>
                    <p class="price"><span>{{number_format($productSingle->price,0,'.',',')}} VNĐ</span></p>
                    <p>{{$productSingle->product_content}}</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Nhỏ</option>
                                        <option value="">Vừa</option>
                                        <option value="">Lớn</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="icon-minus"></i>
	                	</button>
	            		</span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="icon-plus"></i>
	                 </button>
	             	</span>
                        </div>
                    </div>
                    <p><a href="cart.html" class="btn btn-primary py-3 px-5">Thêm vào giỏ hàng</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Khám phá</span>
                    <h2 class="mb-4">Sản phẩm cùng loại</h2>
                    <p>Với đầy đủ các loại cà phê sang trọng cũng như các món ăn đặt tiền, kèm theo đó là những loại bánh đa dạng mẫu mả</p>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                    @if($product->id_categories == $productSingle->id_categories)
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="{{route('client.products.product-single',$product->id)}}" class="img" style="background-image: url({{asset('storage/images' . $product->thumbnail)}});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">{{$product->name}}</a></h3>
                            <p>{{$product->product_content}}</p>
                            <p class="price"><span>{{$product->price}}</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ hàng</a></p>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
@extends('client.layouts.master')
