<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ProductCategories;
use App\Models\ProductsTestApi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Products;
use App\Models\Posts;
class HomeController extends Controller
{
    public function index()
    {
        $productViews = Products::orderBy('view','desc')->limit(4)->get();
        $postViews = Posts::orderBy('view','desc')->limit(3)->get();
        return view('client.index',['productViews'=>$productViews,'postViews'=>$postViews]);
    }
    public function test()
    {
        $categories = ProductCategories::all();
        return view('testform',['categories'=>$categories]);
    }
    public function testadd(Request $request)
    {
        $data = $request->validate([
            'name'          =>  'required',
            'price'           =>  'required',
        ]);
        $data['tags'] = json_encode($request->tags);
        $post = ProductsTestApi::create($data);

        return redirect()->route('client.index')->with('success', 'Post created successfully.');
    }
    public function about()
    {
        return view('client.pages.about');
    }
    public function contact()
    {
        return view('client.pages.contact');
    }
    public function thanks()
    {
        return view('client.pages.checkout.thank');
    }
}
