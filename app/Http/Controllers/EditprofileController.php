<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class EditprofileController extends Controller
{
    public function edit_profile()
    {
        $id = Auth::user()->id;
        $user_detail = User::where('id',$id)->get();
        return view('pages.admin.edit-profile.edit_profile',['details' => $user_detail] );
    }
    public function update_profile(Request $request)
    {
        $details = User::first();
        if($details){
             if($file = $request->file('avatar')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $details['avatar'] = $filename;
            }
            $details['name']= $request->name;
            $details['email']= $request->email;
            $details->update();
        return redirect()->route('edit_profile')->with('Success', 'Your Profile Updated Successfully');;
    }

    }
   
    public function update_password(Request $request)
    {
        $details = User::first();
        $details['password']= $request->password;
        $details->update();
        return redirect()->route('edit_profile')->with('Success', 'Your Profile Updated Successfully');
    }
}
