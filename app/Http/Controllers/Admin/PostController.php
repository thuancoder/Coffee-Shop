<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index (){
        $posts = Posts::orderBy('view','desc')->paginate(3);
        $categories = Categories::all();
        return view('admin.moduls.posts.index',['posts'=>$posts,'categories'=>$categories]);
    }
    public function addPost (){
        $categories = Categories::all();
        return view('admin.moduls.posts.add',['categories'=>$categories]);
    }
    public function storePost (Request $request){
        if($request->hasFile('thumbnail')) {
            $image =  $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $img_path = '/posts/' . date('YmdHis') . '.' . $extension;
            $path = 'public/images/' . $img_path;
            $request->file('thumbnail')->storeAs($path);
        }
        $slug = Str::slug($request->input('name'),'-');
        Posts::create(
            [   'name' => $request->name,
                'slug' => $slug,
                'post_content' => $request->post_content,
                'thumbnail' => $img_path ?? '',
                'category_id'=>$request->category_id,]
        );
        return redirect()->route('admin.posts.index');

    }
    public function editPost($id)
    {
        $categories = Categories::all();
        $posts = Posts::firstWhere('id',$id);
        return view('admin.moduls.posts.edit',['posts'=>$posts,'categories'=>$categories]);
    }
    public function updatePost( Request $request, $id){
        $query = Posts::firstWhere('id',$id);
        if($request->hasFile('thumbnail')) {
            $image =  $request->file('thumbnail');
            $extension = $image->getClientOriginalExtension();
            $img_path = '/posts/' . date('YmdHis') . '.' . $extension;
            $path = 'public/images/' . $img_path;
            $request->file('thumbnail')->storeAs($path);
            Storage::delete('public/images/' . $query->thumbnail);
        }
        $slug = Str::slug($request->input('name'),'-');

        Posts::find($id)->update(
            ['name' => $request->name,
                'slug' => $slug,
                'post_content' => $request->post_content,
                'thumbnail' => $img_path ?? $query->thumbnail,
                'category_id'=>$request->category_id,]
        );
        return redirect()->route('admin.posts.index');
    }
    public function deletePost($id)
    {
        Posts::find($id)->delete();
        return redirect()->route('admin.posts.index');
    }
}
