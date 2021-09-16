<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailingList;
use App\Http\Requests\EmailRequest;
use Carbon\Carbon;

class MailingListController extends Controller
{
    public function index()
    {
        $data = MailingList::all();

        return view('pages.admin.send-code.index', ['users' => $data]);
    }
    public function store_code(EmailRequest $request)
    {

        $emails = explode(',', $request->tags);

        foreach ($emails as $email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $randomNumber = random_int(100000, 999999);

                $mailing_list = new MailingList();
                $mailing_list->email = $email;
                $mailing_list->code = $randomNumber;
                $mailing_list->code_expiry_date = Carbon::now()->addDays(2);
                $mailing_list->save();
                $details = [
                    'code' => $randomNumber,

                ];

                \Mail::to($emails)->send(new \App\Mail\MyTestMail($details));
            }
        }
        return redirect()->route('codepage');
    }
    function delete_code($id)
    {

        $delete = MailingList::findOrFail($id);
        $delete->delete();
        return redirect()->route('codepage');
    }
    function regenerate_conut($id)
    {

        $mailing_list = MailingList::findOrFail($id);
        $mailing_list->regenerate_count = ++$mailing_list->regenerate_count;
        $mailing_list->code_expiry_date = Carbon::now()->addDays(2);
        
        $mailing_list->update();
        return redirect()->route('codepage');
    }
}
