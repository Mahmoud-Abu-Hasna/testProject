<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\PostFilter;
use App\Post;

class PostController extends Controller
{
    //
    public function index(PostFilter $filter)
    {
        $posts = Post::filter($filter)->paginate(10);
        return response()->json(['status' => 'success','data'=>$posts], 200);
    }
}
