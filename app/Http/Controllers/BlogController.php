<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use \GuzzleHttp\Client;

class BlogController extends Controller
{
    public function addblog()
    {
        return view('admin.blog.addblog');
    }


    public function store(Request $a)
    {
        $file=$a->file('image');
        $filename='image'.time().'.'.$a->image->extension();
        $file->move("upload/",$filename);

        $data = new Blog;

        $data->title=$a->title;
        $data->description=$a->description;
        $data->image=$filename;

        $data->save();
        if($data)
        {
        return redirect('admin/display')->with('message','Blog inserted!');
        }
    }

    public function display()
    {
        $data = Blog::all();
        return view('admin.blog.viewblog',compact('data'));
    }

    public function edit($id)
    {
       $data = Blog::find($id);
       return view('admin.blog.editblog ',compact('data'));
    }

    public function update(Request $a)
    {
        if($a->hasFile('image'))
        {
            $file=$a->file('image');
            $filename='image'.time().'.'.$a->image->extension();
            $file->move("upload/",$filename);

            $data = new Blog();
            $data = Blog::find($a->id);

            $data->title=$a->title;
            $data->description=$a->description;
            $data->image=$filename;
            $data->save();
        }
        else
        {
            $data = Blog::find($a->id);

            $data->title=$a->title;
            $data->description=$a->description;

            $data->save();
        }
        if($data)
        {
        return redirect('admin/display')->with('message','Data Updated');
        }
    }

    public function delete($id)
    {
        $data = Blog::find($id);

        $record=$data->delete();

        if($record)
        {
            return redirect('admin/display')->with('message','Blog deleted!!');
        }

    }

}
