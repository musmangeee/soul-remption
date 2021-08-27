<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video_Trailer;

class FrontendController extends Controller
{
    public function index()
    {
        $data = Video_Trailer::first();
        return view('pages.index', ['users' => $data]);
    }

    public function media()
    {
        $data = Video_Trailer::first();
        return view('pages.media',['users' => $data]);
    }

    public function movie()
    {
        $data = Video_Trailer::first();
        return view('pages.movie',['users' => $data]);
    }

    public function watch()
    {
        return view('pages.watch');
    }
}
