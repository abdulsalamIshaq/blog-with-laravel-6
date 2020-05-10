<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class searchController extends Controller
{
    //
    public function mySearch(Request $request){
        if($request->has('search')){
            $posts = Post::with('category')->where('title', 'LIKE', '%'.$request->get('search').'%')->paginate(9);
        }else{
            $posts = Post::paginate(9);
        }
        return view('search', ['posts' => $posts]);
    }
}
