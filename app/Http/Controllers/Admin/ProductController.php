<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategories;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index (){
        $products = Products::orderBy('view','desc')->paginate(8);
        $categories = ProductCategories::all();
        return view('admin.moduls.products.index',['products'=>$products,'categories'=>$categories]);
    }
    public function addProduct (){
        $categories = ProductCategories::all();
        return view('admin.moduls.products.add',['categories'=>$categories]);
    }
    public function storeProduct (Request $request){

        if($request->hasFile('thumbnail')) {
            $image =  $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $img_path = '/products/' . date('YmdHis') . '.' . $extension;
            $path = 'public/images/' . $img_path;
            $request->file('thumbnail')->storeAs($path);
        }
        $slug = Str::slug($request->input('name'),'-');
        Products::create([
            'name' => $request->name,
            'slug' => $slug,
            'product_content' => $request->product_content,
            'thumbnail' => $img_path ?? '',
            'id_categories'=>$request->id_categories,
            'price' => $request->price,
            'sale_price' => $request->sale_price
        ]);
        return redirect()->route('admin.products.index');

    }
    public function editProduct($id)
    {
        $categories = ProductCategories::all();
        $products = Products::firstWhere('id',$id);
        return view('admin.moduls.products.edit',['products'=>$products,'categories'=>$categories]);
    }
    public function updateProduct( Request $request, $id){
        $query = Products::firstWhere('id',$id);
        if($request->hasFile('thumbnail')) {
            $image =  $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $img_path = '/products/' . date('YmdHis') . '.' . $extension;
            $path = 'public/images/' . $img_path;
            $request->file('thumbnail')->storeAs($path);
            Storage::delete('public/images/' . $query->thumbnail);
        }
        $slug = Str::slug($request->input('name'),'-');

        Products::find($id)->update([
                'name' => $request->name,
                'slug' => $slug,
                'product_content' => $request->product_content,
                'thumbnail' => $img_path ?? $query->thumbnail,
                'id_categories'=>$request->id_categories,
                'price' => $request->price,
                'sale_price' => $request->sale_price
            ]);
        return redirect()->route('admin.products.index');
    }
    public function deleteProduct($id)
    {
       Products::find($id)->delete();
        return redirect()->route('admin.products.index');
    }
}
