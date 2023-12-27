@section('title')
    Bài viết
@endsection
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Bài viết</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('client.index')}}">Trang chủ</a></span> <span>Bài viết</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach($posts as $post)
                    <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{route('client.posts.post-single',$post->id)}}" class="block-20" style="background-image: url({{ asset('storage/images' . $post->thumbnail) }});">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">{{$post->created_at}}</a></div>
                                @foreach($categories as $category)
                                    @if($category->id == $post->category_id)
                                <div><a href="#" style="color: white">{{$category->category_name}}</a></div>
                                    @endif
                                @endforeach
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">{{$post->name}}</a></h3>
                            <p>Các bài viết về các chủ đề hấp dẩn và các mẹo dành cho các bạn</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{$posts->links()}}
        </div>
    </section>
@endsection
@extends('client.layouts.master')
