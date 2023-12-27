<!DOCTYPE html>
<html>

<head>

        <title>How to use select2 for multiple select in laravel 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- selec2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

<div class="container mt-5">
    <form role="form" action="/test/add" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Tên sản phẩm">
        </div>
        <div class="form-group mb-3">
            <label for="select2Multiple">Multiple Tags</label>
            <select class="select2-multiple form-control" name="tags[]" multiple="multiple">
                @foreach ($categories as $category )
                    <option value="{{$category->id}}"> {{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });

    });

</script>
</body>


</html>
