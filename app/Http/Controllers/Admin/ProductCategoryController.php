<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategories;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index (){
        $categories = ProductCategories::all();
        return view('admin.moduls.category.products.index',['categories'=>$categories]);
    }
    public function addCategory (){
        return view('admin.moduls.category.products.add');
    }
    public function storeCategory (Request $request){
        ProductCategories::create([
            'category_name' => $request->category_name,
            'category_content' => $request->category_content,
        ]);
        return redirect()->route('admin.category.products.index');
    }
    public function editCategory($id)
    {
        $categories = ProductCategories::firstWhere('id',$id);
        return view('admin.moduls.category.products.edit',['categories'=>$categories]);
    }
    public function updateCategory( Request $request, $id){
        ProductCategories::find($id)->update([
                'category_name' => $request->category_name,
                'category_content' => $request->category_content,
            ]);
        return redirect()->route('admin.category.products.index');
    }
    public function deleteCategory($id)
    {
        ProductCategories::find($id)->delete();
        return redirect()->route('admin.category.products.index');
    }
}

