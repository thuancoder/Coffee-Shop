@section('title')
    Sản phẩm
@endsection
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('client.index')}}">Trang chủ</a></span> <span>Menu</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                @include('client.components.book-table')
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <form action="{{route('client.search')}}" class="search-form w-25">
                <div class="form-group">
                    <div class="icon">
                        <span class="icon-search"></span>
                    </div>
                    <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm...">
                </div>
            </form>
            <form action="{{route('client.filter')}}" method="GET">
                <div class="form-group">
                    <h3 for="price_range" class="">Lọc theo giá</h3>
                    <div class="form-check">
                        <input type="checkbox" name="price_range[]" id="range1" value="0-100000" class="form-check-input">
                        <label for="range1" class="form-check-label">0 - 100,000 VNĐ</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="price_range[]" id="range2" value="100000-200000" class="form-check-input">
                        <label for="range2" class="form-check-label">100,000 VNĐ - 200,000 VNĐ</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="price_range[]" id="range3" value="200000-300000" class="form-check-input">
                        <label for="range3" class="form-check-label">200,000 VNĐ - 300,000 VNĐ</label>
                    </div>
                    <!-- Các khoảng giá khác -->
                </div>
                <button type="submit" class="btn btn-primary">Lọc</button>
            </form>
            <br>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 ">
                    <h3 class="mb-5 heading-pricing ftco-animate">{{$category->category_name}}</h3>
                        @foreach($products as $product)
                            @if($product->id_categories == $category->id)
                                <div class="pricing-entry d-flex ftco-animate">
                                    <div class="img" style="background-image: url({{asset('storage/images' . $product->thumbnail)}});"></div>
                                    <div class="desc pl-3">
                                        <div class="d-flex text align-items-center">
                                            <h3><span><a href="{{route('client.products.product-single',$product->id)}}">{{$product->name}}</a></span></h3>
                                            <span class="price">{{number_format($product->price, 0, '.', ',')}} VNĐ</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="">{{$product->product_content}}</p>
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="id">
                                                <input type="hidden" value="{{ $product->name }}" name="name">
                                                <input type="hidden" value="{{ $product->thumbnail }}"  name="thumbnail">
                                                <input type="hidden" value="{{ $product->price }}" name="price">
                                                <input type="hidden" value="{{ $product->sale_price }}" name="sale_price">
                                                <input type="hidden" value="1" name="quantity">
                                                <button class="btn btn-primary btn-outline-primary">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Khám phá</span>
                    <h2 class="mb-4">Đồ ăn theo loại</h2>
                    <p>Với đầy đủ các loại cà phê sang trọng cũng như các món ăn đặt tiền, kèm theo đó là những loại bánh đa dạng mẫu mả</p>
                </div>
            </div>
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach($categories as $category)
                                    <a class="nav-link" id="{{$category->id}}" data-toggle="pill" href="#{{$category->id}}a" role="tab" aria-controls="{{$category->id}}" aria-selected="true">{{$category->category_name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">
                                @foreach($categories as $category)
                                    <div class="tab-pane fade" id="{{$category->id}}a" role="tabpanel" aria-labelledby="{{$category->id}}">
                                        <div class="row">
                                            @foreach($products as $product)
                                                @if($product->id_categories == $category->id)
                                            <div class="col-md-4 text-center">
                                                <div class="menu-wrap">
                                                    <a href="{{route('client.products.product-single',$product->id)}}" class="menu-img img mb-4" style="background-image: url({{asset('storage/images' . $product->thumbnail)}});"></a>
                                                    <div class="text">
                                                        <h3><a href="#">{{$product->name}}</a></h3>
                                                        <p>{{$product->product_content}}</p>
                                                        <p class="price"><span>{{number_format($product->price, 0, '.', ',')}} VNĐ</span></p>
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                                            <input type="hidden" value="{{ $product->thumbnail }}"  name="thumbnail">
                                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <button class="btn btn-primary btn-outline-primary">Add To Cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('client.layouts.master')
