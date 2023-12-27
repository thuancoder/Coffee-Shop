<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Comment;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $categories = Categories::all();

        $posts = Posts::orderBy('created_at','desc')->paginate(3);
        return view('client.pages.posts',['categories'=>$categories,'posts'=>$posts]);
    }
    public function postSingle($id){

        $categories = DB::table('categories')->join('posts','categories.id','posts.category_id')
            ->select(
                'categories.id',
                        'categories.category_name',
                        'posts.category_id',
                        DB::raw('count(posts.category_id) as total_post')
            )
            ->groupBy('posts.category_id')
            ->get();
        $postSingle = Posts::firstWhere('id',$id);
        Posts::find($id)->update(
            [
            'view'=>$postSingle->view + 1
            ]);
        $postNews = Posts::orderBy('created_at','desc')->limit(3)->get();
        $postViews = Posts::orderBy('view','desc')->limit(3)->get();
        $comments = Comment::all();
        return view('client.pages.post-single',['postSingle'=>$postSingle,'categories'=>$categories,'postNews'=>$postNews,'postViews'=>$postViews,'comments'=>$comments]);
    }
    public function reply(Request $request, $id)
    {
        $parentComment = Comment::findOrFail($id);

        $reply = new Comment();
        $reply->comment_content = $request->input('reply_content');
        $reply->user_id = Auth::id();

        $parentComment->replies()->save($reply);

        return back();
    }
}
