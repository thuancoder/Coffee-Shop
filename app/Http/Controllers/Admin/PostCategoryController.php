<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categories;

class PostCategoryController extends Controller
{
    public function index (){
        $categories = Categories::all();
        return view('admin.moduls.category.posts.index',['categories'=>$categories]);
    }
    public function addCategory (){
        return view('admin.moduls.category.posts.add');
    }
    public function storeCategory (Request $request){
        Categories::create([
            'category_name' => $request->category_name,
            'category_content' => $request->category_content,
        ]);
        return redirect()->route('admin.category.posts.index');

    }
    public function editCategory($id)
    {
        $categories = Categories::firstWhere('id',$id);
        return view('admin.moduls.category.posts.edit',['categories'=>$categories]);
    }
    public function updateCategory( Request $request, $id){
       Categories::find($id)
            ->update([
                'category_name' => $request->category_name,
                'category_content' => $request->category_content,
            ]);
        return redirect()->route('admin.category.posts.index');
    }
    public function deleteCategory($id)
    {
       Categories::find($id)->delete();
        return redirect()->route('admin.category.posts.index');
    }
}
