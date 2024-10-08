<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('email-form');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phonenumber' => 'required',
            'subject' => 'required',

        ]);
$email=$request->email;
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phonenumber' => $request->phonenumber,
            'subject' => $request->subject,

        ];
        $receiver ='jitamaniafrica@gmail.com';

        Mail::to($receiver)->send(new ContactMail($details));

        return redirect()->back()->with('status', 'Email sent successfully!');
    }
}
