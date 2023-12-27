@section('title')
    Giới thiệu
@endsection
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Giới thiệu</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('client.index')}}">Trang chủ</a></span> <span>Giới thiệu</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{asset('assets/images/about.jpg')}});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Khám phá</span>
                    <h2 class="mb-4">Câu chuyện của chúng tôi</h2>
                </div>
                <div>
                    <p>Chuyên gia cà phê Max Morgenthaler có nhiệm vụ pha một tách cà phê thơm ngon chỉ đơn giản bằng cách rót thêm nước. Max và nhóm của anh ấy đã làm việc cật lực với mong muốn tìm ra một cách thức mới để pha cà phê uống liền mà vẫn giữ nguyên hương vị tự nhiên của các loại cà phê. Năm 1938, họ đã tìm thấy câu trả lời và NESCAFÉ được sinh ra từ đó. Tên gọi này xuất phát từ ba chữ cái đầu tiên của Nestlé và nối tiếp bằng chữ ‘café’, NESCAFÉ trở thành thương hiệu cà phê mới.</p>
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

@endsection
@extends('client.layouts.master')
