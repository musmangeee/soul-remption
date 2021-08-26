<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function media()
    {
        return view('pages.media');
    }

    public function movie()
    {
        return view('pages.movie');
    }

    public function watch()
    {
        return view('pages.watch');
    }
}
