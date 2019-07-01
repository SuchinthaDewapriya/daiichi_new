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

    // sales
    public function saleData (Request $request) {
        $this->validate($request, [
            'pro_name' => 'required',
            'pro_location' => 'required',
            'content' => 'required',
            'contact_method' => 'required',
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'fax' => 'required'
        ]);
        $data = array (
            'pro_name' => $request->pro_name,
            'pro_location' => $request->pro_location,
            'content' => $request->content,
            'contact_method' => $request->contact_method,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax
        );

        Mail::send('emails.salesEmail', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('sunwebjapan.tinith@gmail.com');
            $message->replyTo($data['email']);
            $message->subject($data['name']);
        });

        Session::flash('success', 'Your Email was Sent!');
        return back();
    }

    // apartment data
    public function apartmentData (Request $request) {
        // return $request;

        $this->validate($request, [
            'pro_name' => 'required',
            'pro_location' => 'required',
            'content' => 'required',
            'contact_method' => 'required',
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'required',
            'fax' => 'required'
        ]);
        $data = array (
            'pro_name' => $request->pro_name,
            'pro_location' => $request->pro_location,
            'content' => $request->content,
            'contact_method' => $request->contact_method,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax
        );

        Mail::send('emails.apartmentEmail', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('sunwebjapan.tinith@gmail.com');
            $message->replyTo($data['email']);
            $message->subject($data['name']);
        });

        Session::flash('success', 'Your Email was Sent!');
        return back();
    }
}
