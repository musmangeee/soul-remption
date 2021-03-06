<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Http\Requests\SubscriberRequest;
use DB;
class SubscriberController extends Controller
{
    public function subscribe(SubscriberRequest $request)
    {
       return Subscriber::create($request->all());
    }
    public function view_sunscriber()
    {

       $data = Subscriber::all();
      
       return view('pages.admin.subscribers.index', ['users' => $data]);
    }
    public function delete_sunscriber($id)
    {
        DB::delete('delete from subscribers where id = ?',[$id]);
        return redirect()->route('findsubscribers');
    }
    
}
