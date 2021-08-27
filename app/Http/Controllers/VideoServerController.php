<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video_Trailer;
use App\Http\Requests\verifycodeRequest;
use App\Models\MailingList;
use DB;

class VideoServerController extends Controller
{
    public function video_server(){
       $data = Video_Trailer::all();
       return view('pages.admin.video-server.index', ['users' => $data]);
    }
    public function store_video(Request $request){
        if ($file = $request->file('video')) {
            $filename = time() . $file->getClientOriginalName();
            $file->move('public', $filename);
            $video = $filename;
        }
        if ($file = $request->file('video_poster')) {
            $filename = time() . $file->getClientOriginalName();
            $file->move('public', $filename);
            $poster = $filename;
        }
        DB::update('update video__trailers set video = ? , video_poster = ? where id = ?',[$video, $poster, 1]);
        return redirect()->route('videoserver');
     }
     public function store_trailer(Request $request){
        if ($file = $request->file('trailer')) {
            $filename = time() . $file->getClientOriginalName();
            $file->move('public', $filename);
            $trailer = $filename;
        }
        if ($file = $request->file('trailer_poster')) {
            $filename = time() . $file->getClientOriginalName();
            $file->move('public', $filename);
            $poster = $filename;
        }
        DB::update('update video__trailers set trailer = ? , trailer_poster = ? where id = ?',[$trailer, $poster, 1]);
        return redirect()->route('videoserver');
     }
 
     public function verify_code(verifycodeRequest $request){
        
        $code = $request->code;
        $find = MailingList::where('code', $code)->get();
    if($find){
        if($updated_at->lessthen(Carbon::now())){

        }
        $data = MailingList::all();
     if($code_expiry_at->lessThan(Carbon::now())){
          return ['status' => true];
     }
    }
}
}
