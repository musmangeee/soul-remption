<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subscribers_count = Subscriber::count();
        $subscribers = Subscriber::latest()->take(5)->get();
        $codes_count = MailingList::count();
        $views_count = MailingList::sum('views_count'); 
        $latest_codes =  MailingList::latest()->take(5)->get();
        $latest_subscribers =  Subscriber::latest()->take(5)->get();

        return view('pages.admin.home', compact('subscribers_count', 'codes_count', 'latest_codes','views_count','subscribers'));
    }
}
