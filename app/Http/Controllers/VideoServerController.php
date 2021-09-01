<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\MailingList;
use Illuminate\Http\Request;
use App\Models\Video_Trailer;
use App\Http\Requests\verifycodeRequest;

class VideoServerController extends Controller
{
    public function video_server(){
       $data = Video_Trailer::all();
       return view('pages.admin.video-server.index', ['users' => $data]);
    }
    public function store_video(Request $request){

        $video = Video_Trailer::first();
        
        if($video){

        
             if ($file = $request->file('video')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['video'] = $filename;
            }
            if ($file = $request->file('video_poster')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['video_poster'] = $filename;
            }  
         
            $video->update(); 
            
            return redirect()->route('videoserver');
            
        }else{
            
             $video = new Video_Trailer();
             
          
            if ($file = $request->file('video')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['video']= $filename;
            }
            if ($file = $request->file('video_poster')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['video_poster'] = $filename;
            } 
            
            $video->save();
            
            return redirect()->route('videoserver');
        }
        
        // DB::update('update video__trailers set video = ? , video_poster = ? where id = ?',[$video, $poster, 1]);
       
     }
     public function store_trailer(Request $request){

        
        $video = Video_Trailer::first();
        
        if($video){
            
             if ($file = $request->file('trailer')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['trailer'] = $filename;
            }
            if ($file = $request->file('trailer_poster')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['trailer_poster'] = $filename;
            }  
         
            $video->update(); 
            
            return redirect()->route('videoserver');
            
        }else{
            
            $video = new Video_Trailer();
            if ($file = $request->file('trailer')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['trailer']= $filename;
            }
            if ($file = $request->file('trailer_poster')) {
                $filename = time() . $file->getClientOriginalName();
                $file->move('public', $filename);
                $video['trailer_poster'] = $filename;
            } 
            
            $video->save();
            
            return redirect()->route('videoserver');
        }
        
     }
 
     public function verify_code(verifycodeRequest $request){
        
        $code = $request->code;
         
        $find = MailingList::where('code', $code)->whereDate('code_expiry_date','>=',Carbon::now())->first();
        if($find){
            $find->views_count =  ++$find->views_count;
            $find->update();
            return response()->json([   
                'status' => true,
            ]);
        }
       
        
    
}
}
