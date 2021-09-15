<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requestcode;
class RequestcodeController extends Controller
{
    public function index(Request $request){
   
        $request_code = new Requestcode;
        $request_code->email = $request->email;
        $request_code->reason = $request->reason;
        $request_code->save();
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
}