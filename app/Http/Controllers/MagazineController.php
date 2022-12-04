<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function single_post(Post $post)
    {
        return view('magazine.magazine',compact('post'));
    }
}
