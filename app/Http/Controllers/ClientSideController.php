<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sale;
use App\apartment;
use db;

class ClientSideController extends Controller
{
    // get sale data
    public function index() {
        $dataset = sale::take(8)->get();
        // $apartment_data = apartment::all()->take(4);
        $apartment_data = apartment::take(8)->get();
        // dd($apartment_data);
        return view('index',compact('dataset', 'apartment_data'));

       
    }

    //sales view data one by one
    public function SalesViewData($id) {
    $saledata = sale::find($id);
    return view('salesdetails', compact('saledata'))->with('id', $id);
    }

    // apartment view data 
    public function ApartmentViewData($id) {
        $apartmentdata = apartment::find($id);
        return view('apartment-details', compact('apartmentdata'))->with('id', $id);
    }

    // get all sales data
    public function allsaleapartment() {
        $dataset = sale::all();
        return view('all_saleapartment', compact('dataset'));
    }

    //get all apartment data
    public function allrentapartment() {
        // $apartment_data = apartment::all();  
        // $apartment_data = apartment::take(5)->get();
        $apartment_data = apartment::where('page_display', '表示する')->where('rent_out', 1)->orderby('id','desc')->paginate(4);

        return view('all_rentapartment', compact('apartment_data')); 
    }
}
