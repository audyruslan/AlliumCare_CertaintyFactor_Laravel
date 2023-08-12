<?php

namespace App\Http\Controllers;

use App\Models\Hama;
use App\Models\Penyakit;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
         return view('post',[
            'title' => 'Post Keterangan',
            'hamas' => Hama::all(),
            'penyakits' => Penyakit::all(),
        ]);
    }
}
