<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class FrontController extends Controller
{
    public function index()
    {
       $data = Blog::all();
        return view('front.index',compact('data'));
    }

    public function bloglist($id)
    {
        $data = Blog::find($id);

        return view('front.blog_list',compact('data'));
    }
}
