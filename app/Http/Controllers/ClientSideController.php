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
        $dataset = sale::all();
        // $apartment_data = apartment::all()->take(4);
        $apartment_data = apartment::get();
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
        return view('apartment-details', compact('apartmentdata'));
    }
}
