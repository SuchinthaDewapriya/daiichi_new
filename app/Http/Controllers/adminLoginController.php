<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function AdminLogin()
    {
        return view('admin.login');
    }
    public function refreshCaptcha()
    {
        $html = captcha_img('flat') . '';
        
        return response()->json(['captcha'=>$html]);
    }
}
