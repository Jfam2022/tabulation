<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File;
use Session;
use Hash;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Testmail;
use App\Models\Student;

use App\Helpers\Helper;
use App\Models\Announcement;
use App\Models\Income;
use App\Models\Score;
use App\Models\Tabulation;
use App\Models\Creteria;
use App\Models\Overallscore;
use App\Models\Passvote;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $data=Student::where('email','=',$request->email)->first();

        $details =[
            'title' =>'Mail from St. Rose College Educational Foundation Inc.',
            'body' =>'YOUR PASSWORD IS '.$data->password1.
            ' YOU CAN CHANGE YOUR PASSWORD TO YOUR SRC TABULATION ACCOUNT',
        ];
        Mail::to($data->email)->send(new Testmail($details));
        return back()->with('success','PASSWORD SENT CHECK YOUR EMAIL');

    }
}
