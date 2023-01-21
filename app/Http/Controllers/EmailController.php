<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function index(Request $request){
        // $name = $request->name;
        // dd($request->all());
        $subject = $request->subject;
        $messages = $request->message;
        // $message = htmlspecialchars($message);
        $email = $request->email;
        Mail::to('hanskho321@gmail.com')->send(new SendMail($email,$subject,$messages));

        Session::flash('message', 'Email sent successfully!');
        return redirect()->back()->with('success', 'Email Sent!');
    }
}