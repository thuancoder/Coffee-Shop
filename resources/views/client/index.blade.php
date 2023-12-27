@section('title')
    Coffee Garden
@endsection
@section('main')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_1.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Xin chào</span>
                        <h1 class="mb-4">Trải nghiệm cà phê tốt nhất</h1>
                        <p class="mb-4 mb-md-5">Một nơi hoàn hảo để các bạn ghé thăm. Phục vụ đầy đủ từ các mon ăn sang trọng đến thức uống cũng như các loại bánh đa dạng</p>
                        <p><a href="{{route('client.products')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt món ngay</a> <a href="{{route('client.products')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_2.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Xin chào</span>
                        <h1 class="mb-4">Hương vị tuyệt vời cùng không gian tuyệt đẹp</h1>
                        <p class="mb-4 mb-md-5">Một nơi hoàn hảo để các bạn ghé thăm. Phục vụ đầy đủ từ các mon ăn sang trọng đến thức uống cũng như các loại bánh đa dạng</p>
                        <p><a href="{{route('client.products')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt món ngay</a> <a href="{{route('client.products')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Xin chào</span>
                        <h1 class="mb-4">Các món ăn luôn sẵn sàng để phục vụ</h1>
                        <p class="mb-4 mb-md-5">Một nơi hoàn hảo để các bạn ghé thăm. Phục vụ đầy đủ từ các mon ăn sang trọng đến thức uống cũng như các loại bánh đa dạng</p>
                        <p><a href="{{route('client.products')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt món ngay</a> <a href="{{route('client.products')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
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

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{asset('assets/images/about.jpg')}});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Khám phá</span>
                    <h2 class="mb-4">Về chúng tôi</h2>
                </div>
                <div>
                    <p>Chuyên gia cà phê Max Morgenthaler có nhiệm vụ pha một tách cà phê thơm ngon chỉ đơn giản bằng cách rót thêm nước. Max và nhóm của anh ấy đã làm việc cật lực với mong muốn tìm ra một cách thức mới để pha cà phê uống liền mà vẫn giữ nguyên hương vị tự nhiên của các loại cà phê. Năm 1938, họ đã tìm thấy câu trả lời và NESCAFÉ được sinh ra từ đó. Tên gọi này xuất phát từ ba chữ cái đầu tiên của Nestlé và nối tiếp bằng chữ ‘café’, NESCAFÉ trở thành thương hiệu cà phê mới.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-choices"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Đặt món dễ dàng</h3>
                            <p>Với giao diện thân thiện và mượt mà với chỉ vài thao tác bạn đã có thể đặt món nhanh chóng trong vài phút</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-delivery-truck"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Giao hàng nhanh chóng</h3>
                            <p>Món sẽ được laàm ngay sau khi bạn đặt và giao nhanh chóng trong vòng 10 - 20 phút tùy theo món</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-coffee-bean"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Chất lượng hàng đầu</h3>
                            <p>Với phương châm đặt chất lượng lên hàng đâu, các bạn có thể yên tâm đặt món tại cửa hàng chúng tôi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Khám phá</span>
                        <h2 class="mb-4">Menu</h2>
                        <p class="mb-4">Với đầy đủ các loại cà phê sang trọng cũng như các món ăn đặt tiền, kèm theo đó là những loại bánh đa dạng mẫu mả</p>
                        <p><a href="{{route('client.products')}}" class="btn btn-primary btn-outline-primary px-4 py-3">Xem Menu</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-1.jpg')}});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-2.jpg')}});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-3.jpg')}});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-4.jpg')}});"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{asset('assets/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Chi nhánh</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="85">0</strong>
                                    <span>Giải thưởng</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="10567">0</strong>
                                    <span>Đánh giá</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Nhân viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Khám phá</span>
                    <h2 class="mb-4">Sản phẩm lượt xem nhiều nhất</h2>
                    <p>Với đầy đủ các loại cà phê sang trọng cũng như các món ăn đặt tiền, kèm theo đó là những loại bánh đa dạng mẫu mả</p>
                </div>
            </div>
            <div class="row">
                @foreach($productViews as $productView)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url({{asset('storage/images' . $productView->thumbnail)}});"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="#">{{$productView->name}}</a></h3>
                                <p>{{$productView->product_content}}</p>
                                <p class="price"><span>{{number_format($productView->price,0,'.',',')}} VNĐ</span></p>
                                <p><a href="#" class="btn btn-primary btn-outline-primary">Thêm vào giỏ hàng</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-1.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-2.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-3.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-4.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section img" id="ftco-testimony" style="background-image: url({{asset('assets/images/bg_1.jpg')}});"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Khám phá</span>
                    <h2 class="mb-4">Phản hồi khách hàng</h2>
                    <p>Chất lượng đồ ăn không thể bàn cãi. Nhân viên phục vụ nhiệt tình chu đáo. Không gian sang trọng và thoáng mát</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Chất lượng đồ ăn không thể bàn cãi. Nhân viên phục vụ nhiệt tình chu đáo. Không gian sang trọng và thoáng mát."</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{asset('assets/images/person_4.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Hoàng Thuận <span class="position">Khách hàng</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Chất lượng đồ ăn không thể bàn cãi. Nhân viên phục vụ nhiệt tình chu đáo. Không gian sang trọng và thoáng mát. Đồ ăn lên tương đối nhanh, giá cả hợp lý. Đây đúng là một nơi lý tưởng để mọi người ghé thăm"</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{asset('assets/images/person_2.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Thúy Quyên<span class="position">Khách hàng</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Tôi cục kỳ yêu thích nơi này, cuối tuần tôi hay cùng bạn bè đến đây để cùng nhau gặp mặt. Đồ ăn ngon tuyệt cả đồ uống cũng vậy.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{asset('assets/images/person_3.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Hoàng Kết<span class="position">Khách hàng</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end">
                    <div class="testimony overlay">
                        <blockquote>
                            <p>&ldquo;Chất lượng đồ ăn không thể bàn cãi. Nhân viên phục vụ nhiệt tình chu đáo. Không gian sang trọng và thoáng mát.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{asset('assets/images/person_4.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Tính ngu<span class="position">Khách hàng</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg align-self-sm-end ftco-animate">
                    <div class="testimony">
                        <blockquote>
                            <p>&ldquo;Tôi cục kỳ yêu thích nơi này, cuối tuần tôi hay cùng bạn bè đến đây để cùng nhau gặp mặt. Đồ ăn ngon tuyệt cả đồ uống cũng vậy."</p>
                        </blockquote>
                        <div class="author d-flex mt-4">
                            <div class="image mr-3 align-self-center">
                                <img src="{{asset('assets/images/person_2.jpg')}}" alt="">
                            </div>
                            <div class="name align-self-center">Vinh ngu<span class="position">Khách hàng</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Bài viết mới nhất</h2>
                    <p>Các bài viết về các chủ đề hấp dẩn và các mẹo dành cho các bạn</p>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($postViews as $postView)
                    <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('storage/images' . $postView->thumbnail)}});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">{{$postView->created_at}}</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-eye"></span>{{$postView->view}}</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">{{$postView->name}}</a></h3>
                            <p>Các bài viết về các chủ đề hấp dẩn và các mẹo dành cho các bạn</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-appointment">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1XRP3XzTIILnhkzeZVYJ1UhXDNRMlKIGh&ehbc=2E312F" width="1200px" height="400px">
                    </iframe>
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Đặt bàn</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Họ">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Tên">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Ngày">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Giờ">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Lời nhắn"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="submit" value=Gửi class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('client.layouts.master')
