<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Database\Console\Migrations\RefreshCommand;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment_store(Request $a)
    {
        $data = new Comment;

        $data->name=$a->name;
        $data->email=$a->email;
        $data->blog_id=$a->blog_id;
        $data->comments=$a->comments;
        $data->reply=$a->reply;

        $data->save();
    }



}
