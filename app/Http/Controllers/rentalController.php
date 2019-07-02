<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\apartment;

class rentalController extends Controller
{
    public function RentalList($name, $cat)
    {
        if ($cat == 'twon') {
            $rental = apartment::where('twon',$name)->where('rent_out',1)->get();
        }
        if ($cat == 'nearst_station') {
            $rental = apartment::where('nearst_station',$name)->where('rent_out',1)->get();
        }
        if ($cat == 'construction') {
            $rental = apartment::where('construction',$name)->where('rent_out',1)->get();
        }
        if ($cat == 'pronear_station') {
            $rental = apartment::where('pronear_station',$name)->where('rent_out',1)->get();
        }
        if ($cat == 'pets_live') {
            $rental = apartment::where('nearst_station',$name)->where('rent_out',1)->get();
        }
        if ($cat == 'deposit') {
            $rental = apartment::where('deposit',$name)->where('rent_out',1)->get();
        }
        if ($cat == 'business_prk') {
            $rental = apartment::where('business_prk',$name)->where('rent_out',1)->get();
        }
        return view('rentalList')->with('rental',$rental)->with('name',$name)->with('cat',$cat);
    }

    public function FilterdataRental(Request $request)
    {
        if ($request->input('users') == 0) {
            if ($request->input('name1') == 'twon') {
                $sort = apartment::where('twon',$request->input('name'))->where('rent_out',1)->get();
            }
            if ($request->input('name1') == 'nearst_station') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->get();
            }
            if ($request->input('name1') == 'construction') {
                $sort = apartment::where('construction',$request->input('name'))->where('rent_out',1)->get();
            }
            if ($request->input('name1') == 'pronear_station') {
                $sort = apartment::where('pronear_station',$request->input('name'))->where('rent_out',1)->get();
            }
            if ($request->input('name1') == 'pets_live') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->get();
            }
            if ($request->input('name1') == 'deposit') {
                $sort = apartment::where('deposit',$request->input('name'))->where('rent_out',1)->get();
            }
            if ($request->input('name1') == 'business_prk') {
                $sort = apartment::where('business_prk',$request->input('name'))->where('rent_out',1)->get();
            }
        }
        if ($request->input('users') == 1) {
            if ($request->input('name1') == 'twon') {
                $sort = apartment::where('twon',$request->input('name'))->where('rent_out',1)->orderby('price','asc')->get();
            }
            if ($request->input('name1') == 'nearst_station') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('price','asc')->get();
            }
            if ($request->input('name1') == 'construction') {
                $sort = apartment::where('construction',$request->input('name'))->where('rent_out',1)->orderby('price','asc')->get();
            }
            if ($request->input('name1') == 'pronear_station') {
                $sort = apartment::where('pronear_station',$request->input('name'))->where('rent_out',1)->orderby('price','asc')->get();
            }
            if ($request->input('name1') == 'pets_live') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('price','asc')->get();
            }
            if ($request->input('name1') == 'deposit') {
                $sort = apartment::where('deposit',$request->input('name'))->where('rent_out',1)->orderby('price','asc')->get();
            }
            if ($request->input('name1') == 'business_prk') {
                $sort = apartment::where('business_prk',$request->input('name'))->where('rent_out',1)->orderby('price','asc')->get();
            }
        }
        if ($request->input('users') == 2) {
            if ($request->input('name1') == 'twon') {
                $sort = apartment::where('twon',$request->input('name'))->where('rent_out',1)->orderby('price','desc')->get();
            }
            if ($request->input('name1') == 'nearst_station') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('price','desc')->get();
            }
            if ($request->input('name1') == 'construction') {
                $sort = apartment::where('construction',$request->input('name'))->where('rent_out',1)->orderby('price','desc')->get();
            }
            if ($request->input('name1') == 'pronear_station') {
                $sort = apartment::where('pronear_station',$request->input('name'))->where('rent_out',1)->orderby('price','desc')->get();
            }
            if ($request->input('name1') == 'pets_live') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('price','desc')->get();
            }
            if ($request->input('name1') == 'deposit') {
                $sort = apartment::where('deposit',$request->input('name'))->where('rent_out',1)->orderby('price','desc')->get();
            }
            if ($request->input('name1') == 'business_prk') {
                $sort = apartment::where('business_prk',$request->input('name'))->where('rent_out',1)->orderby('price','desc')->get();
            }
        }
        if ($request->input('users') == 3) {
            if ($request->input('name1') == 'twon') {
                $sort = apartment::where('twon',$request->input('name'))->where('rent_out',1)->orderby('built_years','desc')->get();
            }
            if ($request->input('name1') == 'nearst_station') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('built_years','desc')->get();
            }
            if ($request->input('name1') == 'construction') {
                $sort = apartment::where('construction',$request->input('name'))->where('rent_out',1)->orderby('built_years','desc')->get();
            }
            if ($request->input('name1') == 'pronear_station') {
                $sort = apartment::where('pronear_station',$request->input('name'))->where('rent_out',1)->orderby('built_years','desc')->get();
            }
            if ($request->input('name1') == 'pets_live') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('built_years','desc')->get();
            }
            if ($request->input('name1') == 'deposit') {
                $sort = apartment::where('deposit',$request->input('name'))->where('rent_out',1)->orderby('built_years','desc')->get();
            }
            if ($request->input('name1') == 'business_prk') {
                $sort = apartment::where('business_prk',$request->input('name'))->where('rent_out',1)->orderby('built_years','desc')->get();
            }
        }
        if ($request->input('users') == 4) {
            if ($request->input('name1') == 'twon') {
                $sort = apartment::where('twon',$request->input('name'))->where('rent_out',1)->orderby('built_years','asc')->get();
            }
            if ($request->input('name1') == 'nearst_station') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('built_years','asc')->get();
            }
            if ($request->input('name1') == 'construction') {
                $sort = apartment::where('construction',$request->input('name'))->where('rent_out',1)->orderby('built_years','asc')->get();
            }
            if ($request->input('name1') == 'pronear_station') {
                $sort = apartment::where('pronear_station',$request->input('name'))->where('rent_out',1)->orderby('built_years','asc')->get();
            }
            if ($request->input('name1') == 'pets_live') {
                $sort = apartment::where('nearst_station',$request->input('name'))->where('rent_out',1)->orderby('built_years','asc')->get();
            }
            if ($request->input('name1') == 'deposit') {
                $sort = apartment::where('deposit',$request->input('name'))->where('rent_out',1)->orderby('built_years','asc')->get();
            }
            if ($request->input('name1') == 'business_prk') {
                $sort = apartment::where('business_prk',$request->input('name'))->where('rent_out',1)->orderby('built_years','asc')->get();
            }
        }
        return $sort;
    }
}
