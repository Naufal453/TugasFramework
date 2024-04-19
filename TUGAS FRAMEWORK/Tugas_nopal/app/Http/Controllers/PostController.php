<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
    $posts = Post::latest()->paginate(5);
    return view('posts.index', compact('posts'));
   }


    public function create()

    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
        'title' => 'required|min:5',
        'content' => 'required|min:10'
    ]);

    Post::create([
        'title' => $request->title,
        'content' => $request->content
    ]);
    return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

}


