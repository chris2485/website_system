<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    //

    public function index()
    {

        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create(Request $request)
    {


        return view('blog.create');
    }

    public function store(Request $request) {
        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->body,
        ]);
        $blog->save();

        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
        return view('blog.index');
    }

    public function read($id)
    {

        $blog = Blog::find($id);
        return view('blog.read', compact('blog'));


    }

    public function test () {
        $article = Blog::create([
            'title' => "test",
            'content' => "test",
        ]);
        $article->save();
    }

}
