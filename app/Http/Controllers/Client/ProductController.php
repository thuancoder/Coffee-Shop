<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProductCategories;
use App\Models\Products;


class ProductController extends Controller
{
    public function index()
    {
        $categories = ProductCategories::all();

        $products = Products::all();
        return view('client.pages.products',['categories'=>$categories,'products'=>$products]);
    }
    public function productSingle($id){

        $products = Products::all();
        $productSingle = Products::firstWhere('id',$id);
        Products::find($id)->update(
            [
                'view'=>$productSingle->view + 1
            ]);
        return view('client.pages.product-single',['productSingle'=>$productSingle,'products'=>$products]);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if(empty($keyword)){
            return redirect()->route('client.products')->with('error', 'Vui lòng nhập từ khóa bạn muốn tìm kiếm!');
        }
        $products = Products::where('name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('product_content', 'LIKE', '%'.$keyword.'%')
            ->get();
        $categories = ProductCategories::all();

        if ($products->isNotEmpty()){
            return view('client.pages.products',['categories'=>$categories,'products'=>$products]);
        } else{
            return redirect()->route('client.products')->with('error', 'Không tìm thấy kết quả phù hợp!');
        }

    }
    public function filter(Request $request){
        $selectedPriceRanges = $request->input('price_range');

        $conditions = [];

        foreach ($selectedPriceRanges as $priceRange) {
            $range = explode('-', $priceRange);
            $minPrice = $range[0];
            $maxPrice = $range[1];

            $conditions[] = ['price', '>=', $minPrice];
            $conditions[] = ['price', '<=', $maxPrice];
        }

        $products = Products::where($conditions)->get();

        if ($products->isEmpty()) {

            return redirect()->route('client.products')->with('error', 'Không tìm thấy kết quả phù hợp!');
        }

        $categories = ProductCategories::all();

        return view('client.pages.products', ['categories' => $categories, 'products' => $products]);
    }
}
