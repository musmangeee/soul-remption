<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailingList;
use App\Http\Requests\EmailRequest;
use Carbon\Carbon;

class MailingListController extends Controller
{
    public function index(){
        $data = MailingList::all();
       return view('pages.admin.send-code.index', ['users' => $data]);
    }
    public function store_code(EmailRequest $request){
       
        $emails = explode(',', $request->tags);
       foreach($emails as $email){
         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $randomNumber = random_int(100000, 999999);
        
        $data = new MailingList();
        $data->email = $email;
        $data->code = $randomNumber;
        $data->time = Carbon::now();
        $data->days = 2;
        $data->save();
        $details = [
               'code' => $randomNumber,    
               
             ];
         \Mail::to($email)->send(new \App\Mail\MyTestMail($details));
        }
    }
    return redirect()->route('codepage');
 }


}
