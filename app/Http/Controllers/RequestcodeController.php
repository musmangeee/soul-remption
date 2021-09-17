<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requestcode;
use App\Models\MailingList;
use Carbon\Carbon;
class RequestcodeController extends Controller
{
    public function index(Request $request){
   
        $request_code = new Requestcode;
        $request_code->email = $request->email;
        $request_code->reason = $request->reason;
        $request_code->save();
        $email = $request_code->email;
        $details = [
            'message' =>  "Thank you for your request for the code. We will be with you soon regarding your request!",
        ];
        \Mail::to($email)->send(new \App\Mail\RequestMail($details));
        return response()->json([   
            'status' => true,
        ]);
    }

    public function request_code(Request $request){
   
        $request_code =  Requestcode::all();
        return view('pages.admin.request-code.index',compact('request_code'));
    }
    public function delete_request($id){
   
        $request_code = Requestcode::findOrFail($id);
        $request_code->delete();
        return redirect()->route('request.code');
    }
    
    public function approved_request(Request $request,$id){
        $email = $request->email;
        $input = $request->all();
        $input['code_expiry_date'] = Carbon::now()->addDays(2);
        $input['code'] = random_int(100000, 999999);
        $request->except('_method', '_token');
        $event = Requestcode::findOrFail($id);
        $event->update($input);
         $code = $input['code'];
         $check_email = MailingList::where('email',$email)->first();
         if($check_email){
            $input = $request->all();
            $input['code_expiry_date'] = Carbon::now()->addDays(2);
            $input['code'] = random_int(100000, 999999);
            $request->except('_method', '_token');
            $event = Requestcode::findOrFail($id);
            $event->update($input);
            $input = $request->all();
            $input['code_expiry_date'] = Carbon::now()->addDays(2);
            $input['code'] = random_int(100000, 999999);
            $request->except('_method', '_token');
            $event = MailingList::where('email',$email)->first();
            $event->update($input);
         }else{
        $mailing_list =  new MailingList();
        $mailing_list->email = $email;
        $mailing_list->code = $code;
        $mailing_list->code_expiry_date = Carbon::now()->addDays(2);
        $mailing_list->save();
         }
        $details = [
            'code' =>  $code,
        ];
        \Mail::to($email)->send(new \App\Mail\MyTestMail($details));
        return redirect()->route('request.code');
    }
}