@section('title')
    Thêm Sản Phẩm
@endsection
@section('content')
            <form role="form" action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="name">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="product_content">Mô tả</label>
                        <textarea class="textarea form-control" placeholder="Place some text here" id="product_content" name="product_content"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="number" class="form-control" name="price" id="price" placeholder="Giá">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Hình Ảnh</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="thumbnail" id="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="thumbnail">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Loại</label>
                        <select class="form-control" name="id_categories">
                            @foreach ($categories as $category )
                                <option value="{{$category->id}}"> {{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Giảm giá</label>
                        <input type="number" class="form-control" name="sale_price" id="sale_price" placeholder="Giảm giá">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

@endsection

@extends('admin.layouts.master')
