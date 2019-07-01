<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use DB;

use App\sale;

use App\apartment;

use Illuminate\Support\Facades\Validator;

use Captcha;

class frontendController extends Controller
{
    public function Welcome()
    {
        $sale = sale::where('page_display', '表示する')->where('sold_out',1)
                ->orderby('id','desc')->limit(8)->get();

        $apartment = apartment::where('page_display','表示する')->where('rent_out',1)
                    ->orderby('id','desc')->limit(8)->get();

        $news = DB::table('news')->orderBy('id', 'desc')->get();      
        
        
        return view('welcome')->with('sale',$sale)->with('news',$news)->with('apartment',$apartment);
    }
    public function Access()
    {
        return view('access');
    }
    public function Company()
    {
        return view('company');
    }
    public function Inquire()
    {
        return view('inquire');
    }
    public function SendInquire(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'confirm' => 'required',
            'inquire' => 'required',
            'addr21' => 'required',
            'zip22' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'phonetic' => 'required',
        ]);
        $content = $request->content1." / ".$request->content2." / ".$request->content3." / ".$request->content4." / ".$request->content5." / ".$request->content6." / ".$request->content7;
        $data = [
            'name' =>$request->name,
            'phonetic' =>$request->phonetic,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'zip21' =>$request->zip21,
            'zip22' =>$request->zip22,
            'addr21' =>$request->addr21,
            'inquire' =>$request->inquire,
            'content' =>$content,
        ];
        Mail::send('mail.InquireMail', $data, function($message) use($data){
            $message->to('annai@seiki-bill.com');
            $message->subject('清貴ビルＨＰより問合せ');
        });
        return redirect()->back()->with('success','Successfully send!');
    }
    public function MansionDetail($id)
    {
        $salename = DB::table('sale')->where('id', $id)->first();
        return view('sale.mansionDetails')->with('salename',$salename)->with('id',$id);
    }
    public function PropertyInquiryMail(Request $request)
    {
        $pro_name = $request->pro_name;
        $pro_location = $request->pro_location;
        $contact_method = $request->contact_method;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $fax = $request->fax;

        if ($request->type == "sale") {
            $subject = "Sale form submission";
        } else {
            $subject = "Rent form submission";
        }
        

        $content = $request->content1." / ".$request->content2." / ".$request->content3." / ".$request->content4;
        $data = [
            'pro_name' =>$request->pro_name,
            'pro_location' =>$request->pro_location,
            'contact_method' =>$request->contact_method,
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'fax' =>$request->fax,
            'content' =>$content,
            'newsubject' =>$subject,
        ];
        Mail::send('mail.PropertyInquiryMail', $data, function($message) use($data){
            $message->to('sunweb14@gmail.com');
            $message->subject($data['newsubject']);
        });
        return redirect('thankYou');    }
    // public function PropertyInquiryMail2($pro_name,$pro_location,$contact_method,$name,$email,$phone,$fax,$content)
    // {
    //     $data = [
    //         'pro_name' =>$pro_name,
    //         'pro_location' =>$pro_location,
    //         'contact_method' =>$contact_method,
    //         'name' =>$name,
    //         'email' =>$email,
    //         'phone' =>$phone,
    //         'fax' =>$fax,
    //         'content' =>$content,
    //     ];
    //     Mail::send('mail.PropertyInquiryMail', $data, function($message) use($data){
    //         $message->to($data['email']);
    //         $message->subject('Sale Form submission');
    //     });
    //     return redirect('thankYou');
    // }
    public function Thankyou()
    {
        return view('thankYou');
    }
    public function AllSaleApartment()
    {
        $sale = DB::table('sale')
                ->where('page_display','表示する')
                ->where('sold_out',1)
                ->orderby('id','desc')
                ->paginate(10);
        return view('AllSaleApartment')->with('sale',$sale);
    }
    public function AllRentalApartment()
    {
        $rent = DB::table('apartment')
                ->where('page_display','表示する')
                ->where('rent_out',1)
                ->orderby('id','desc')
                ->paginate(10);
        return view('AllRentalApartment')->with('rent',$rent);
    }
    public function FilterdataMansion(Request $request)
    {
        if ($request->input('users') == 0) {
            if ($request->input('name1') == "") {
                $sort = sale::where('property_type',$request->input('name'))->where('sold_out', 1)->get();
                return $sort;
            } else {
                $sort = sale::where('property_type',$request->input('name'))->orwhere('property_type',$request->input('name1'))->where('sold_out', 1)->get();
                return $sort;
            }
        }
        if ($request->input('users') == 1) {
            if ($request->input('name1') == "") {
                $sort = sale::where('property_type',$request->input('name'))->where('sold_out', 1)->orderby('price','asc')->get();
                return $sort;
            } else {
                $sort = sale::where('property_type',$request->input('name'))->orwhere('property_type',$request->input('name1'))->where('sold_out', 1)->orderby('price','asc')->get();
                return $sort;
            }
        }
        if ($request->input('users') == 2) {
            if ($request->input('name1') == "") {
                $sort = sale::where('property_type',$request->input('name'))->where('sold_out', 1)->orderby('price','desc')->get();
                return $sort;
            } else {
                $sort = sale::where('property_type',$request->input('name'))->orwhere('property_type',$request->input('name1'))->where('sold_out', 1)->orderby('price','desc')->get();
                return $sort;
            }
        }
        if ($request->input('users') == 3) {
            if ($request->input('name1') == "") {
                $sort = sale::where('property_type',$request->input('name'))->where('sold_out', 1)->orderby('built_years','desc')->get();
                return $sort;
            } else {
                $sort = sale::where('property_type',$request->input('name'))->orwhere('property_type',$request->input('name1'))->where('sold_out', 1)->orderby('built_years','desc')->get();
                return $sort;
            }
        }
        if ($request->input('users') == 4) {
            if ($request->input('name1') == "") {
                $sort = sale::where('property_type',$request->input('name'))->where('sold_out', 1)->orderby('built_years','asc')->get();
                return $sort;
            } else {
                $sort = sale::where('property_type',$request->input('name'))->orwhere('property_type',$request->input('name1'))->where('sold_out', 1)->orderby('built_years','asc')->get();
                return $sort;
            }
        }
    }
    public function FilterdataRental(Request $request)
    {
        if ($request->input('users') == 0) {
            $sort = apartment::where('property_type',$request->input('name'))->where('rent_out', 1)->get();
            return $sort;
        }
        if ($request->input('users') == 1) {
            $sort = apartment::where('property_type',$request->input('name'))->where('rent_out', 1)->orderby('price','asc')->get();
            return $sort;
        }
        if ($request->input('users') == 2) {
            $sort = apartment::where('property_type',$request->input('name'))->where('rent_out', 1)->orderby('price','desc')->get();
            return $sort;
        }
        if ($request->input('users') == 3) {
            $sort = apartment::where('property_type',$request->input('name'))->where('rent_out', 1)->orderby('built_years','desc')->get();
            return $sort;
        }
        if ($request->input('users') == 4) {
            $sort = apartment::where('property_type',$request->input('name'))->where('rent_out', 1)->orderby('built_years','asc')->get();
            return $sort;
        }
    }
    public function filterLocationRental(Request $request)
    {
        if ($request->input('users') == '0') {
            $sort = apartment::where('property_type',$request->input('name'))->where('rent_out', 1)->get();
            return $sort;
        }
        else {
            $sort = apartment::where('property_type','=',$request->input('name'))->where('twon',$request->input('users'))->where('rent_out', 1)->get();
            return $sort;
        }
    }
    public function DiLink()
    {
        return view('diLink');
    }
}
