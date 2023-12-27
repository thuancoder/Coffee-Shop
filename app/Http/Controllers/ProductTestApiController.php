<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductTestApi;
use App\Models\ProductsTestApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductTestApiController extends Controller
{
    public function index()
    {
        $data = ProductsTestApi::paginate(5);
        $array = [
            'status' => true,
            'message' => 'Danh sách sản phẩm',
            'data'=>ProductTestApi::collection($data)
        ];
        return response()->json($array, 200);
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
        $product = new ProductsTestApi();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        $array = [
            'status' => true,
            'message' => 'Thêm sản phẩm thành công',
            'data'=>$product
        ];
        return response()->json($array, 201);
    }
    public function show(string $id)
    {
        $product = ProductsTestApi::find($id);

        if (!$product) {
            $array = [
                'status' => false,
                'message' => 'Không tìm thấy sản phẩm',
                'data'=>[]
            ];
            return response()->json($array, 404);
        }
        $array = [
            'status' => true,
            'message' => 'Tìm thấy sản phẩm',
            'data'=>$product
        ];
        return response()->json($array, 200);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $product = ProductsTestApi::find($id);

        if (!$product) {
            $array = [
                'status' => false,
                'message' => 'Không tìm thấy sản phẩm',
                'data'=>[]
            ];
            return response()->json($array, 404);
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        $array = [
            'status' => true,
            'message' => 'Cập nhật sản phẩm thành công',
            'data'=>$product
        ];
        return response()->json($array, 200);
    }

    public function destroy(string $id)
    {
        $product = ProductsTestApi::find($id);

        if (!$product) {
            $array = [
                'status' => false,
                'message' => 'Không tìm thấy sản phẩm',
                'data'=>[]
            ];
            return response()->json($array, 404);
        }

        $product->delete();


        $array = [
            'status' => true,
            'message' => 'Xóa sản phẩm thành công',
            'data'=>[]
        ];
        return response()->json($array, 200);
    }
}
