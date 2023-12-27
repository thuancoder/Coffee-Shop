@section('title')
    Chi tiết bài viết
@endsection
@section('main')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Chi tiết bài viết</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span
                                class="mr-2"><a href="blog.html">Bài viết</a></span> <span>Chi tiết bài viết</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">{{$postSingle->name}}</h2>
                    {!!$postSingle->post_content!!}
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach($categories as $category)
                                <a href="#" class="tag-cloud-link">{{$category->category_name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="comment-form-wrap">
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="comment_content">Binh luận</label>
                                <textarea name="comment_content" cols="30" class="form-control" rows="5"></textarea>
                            </div>
                            <input type="hidden" name="post_id" value="{{ $postSingle->id }}">
                            <button type="submit" class="btn btn-primary">Gửi bình luận</button>
                        </form>
                    </div>
                    <br>
                    @foreach($comments as $comment)
                        @if( $postSingle->id == $comment->post_id)
                            <div class="headings d-flex justify-content-between align-items-center mb-3">
                                <h5>Bình luận</h5>
                            </div>
                            <div class="card p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="user d-flex flex-row align-items-center">
                                        <span>
                                            <small
                                                class="font-weight-bold text-primary" style="font-size: 20px;">{{ $comment->user->name }}</small>
                                            <small class="font-weight-bold" style="font-size: 16px;">{{$comment->comment_content }}</small>
                                        </span>
                                    </div>
                                    <small> {{ ($comment->created_at)->format('H:i d/m/Y') }}</small>
                                </div>
                                <div class="action d-flex-wrap justify-content-between mt-2 align-items-center">
                                    @foreach($comment->replies as $reply)
                                        <div class="replies">
                                            <div class="reply">
                                                <p><span class="icon-long-arrow-right"></span><span>
                                            <small
                                                class="font-weight-bold text-primary">{{ $reply->user->name }}</small>
                                        </span>{{ $reply->comment_content }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                        <input type="checkbox" hidden id="toggleForm">
                                        <label for="toggleForm">Reply</label>
                                        <form action="{{ route('comments.reply', $comment->id) }}" method="POST" id="myForm" style="display: none">
                                        @csrf
                                        <div class="form-group">
                                        <textarea name="reply_content" rows="2" cols="40"
                                          placeholder="Nhập câu trả lời"></textarea>
                                        </div>
                                        <button type="submit" class=" btn btn-primary">Gửi trả lời</button>
                                    </form>
                                </div>
                            </div>
                        @endif

                    @endforeach

                    <br>
                    <div class="about-author d-flex">
                        <div class="bio align-self-md-center mr-5">
                            <img src="{{asset('dist/img/avatar_ne.jpg')}}" width="300px" alt="Image placeholder"
                                 class="img-fluid mb-4">
                        </div>
                        <div class="desc align-self-md-center">
                            <h3>Hoàng Thuận</h3>
                            <p>Là một nhà văn, tiểu thuyết gia chuyên viết về chuyện trinh thám. Anh cũng là người có
                                những phát ngôn gây sốc trên mạng</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar ftco-animate">
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
                            <h3>Danh mục bài viết</h3>
                            @foreach($categories as $category)
                                <li><a href="#">{{$category->category_name}}
                                        <span>({{$category->total_post}})</span></a></li>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Bài viết mới nhất</h3>
                        @foreach($postNews as $postNew)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                   style="background-image: url({{ asset('storage/images' . $postNew->thumbnail) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{route('client.posts.post-single',$postNew->id)}}">{{$postNew->name}}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> {{$postNew->created_at}}
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <h3>Bài viết lượt xem nhiều nhất</h3>
                        @foreach($postViews as $postView)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                   style="background-image: url({{ asset('storage/images' . $postView->thumbnail) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{route('client.posts.post-single',$postView->id)}}">{{$postView->name}}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-eye"></span> {{$postView->view}}</a></div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tìm kiếm</h3>
                        <div class="tagcloud">
                            @foreach($categories as $category)
                                <a href="#" class="tag-cloud-link">{{$category->category_name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        var toggleForm = document.getElementById('toggleForm');
        var myForm = document.getElementById('myForm');

        toggleForm.addEventListener('change', function() {
            if (toggleForm.checked) {
                myForm.style.display = 'block'; // Ẩn form khi input được chọn
            } else {
                myForm.style.display = 'none'; // Hiện form khi input không được chọn
            }
        });
    </script>
@endsection
@extends('client.layouts.master')
