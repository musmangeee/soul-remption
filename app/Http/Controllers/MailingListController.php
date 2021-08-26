<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailingList;

class MailingListController extends Controller
{
    public function index(){
        $data = MailingList::all();
       return view('pages.admin.send-code.index', ['users' => $data]);
    }
    public function store_code(Request $request){
       
        return view('pages.admin.send-code.index');
    }


}
