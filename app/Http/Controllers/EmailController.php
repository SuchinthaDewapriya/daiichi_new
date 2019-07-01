<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 
use Session;

class EmailController extends Controller
{
    public function inquireData(Request $request) {
        // return $request;
         // dd($request);
        //  $content = $request->content1.' / '.$request->content2.' / '.$request->content3.' / '.$request->content4.' / '.$request->content5.' / '.$request->content6.' / '.$request->content7;
        
         $this->validate($request, [
            'name' => 'required',
            'phonetic' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'emailConfirm' => 'required|email',
            'post_code' => 'required|min:3',
            'address' => 'required|min:5',
            'content' => 'required',
            'inquire' => 'required',
            'confirm' => 'required'
        ]);
        $data = array (
            'name' => $request->name,
            'phonetic' => $request->phonetic,
            'phone' => $request->phone,
            'email' => $request->email,
            'emailConfirm' => $request->emailConfirm,
            'post_code' => $request->post_code,
            'address' => $request->address,
            'content' => $request->content,
            'inquire' => $request->inquire,
            'confirm' => $request->confirm,
        );

        Mail::send('emails.inquireEmail', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('sunwebjapan.tinith@gmail.com');
            $message->replyTo($data['email']);
            $message->subject($data['name']);
        });

        Session::flash('success', 'Your Email was Sent!');
        return view('inquire');
    }
}
