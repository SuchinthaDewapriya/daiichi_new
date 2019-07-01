<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\sale;

class saleController extends Controller
{
    public function saleMansion($name,$name1)
    {
        $sale = sale::where('property_type',$name)->orwhere('property_type',$name1)->where('sold_out',1)->get();
        return view('sale.mansion')->with('name',$name)->with('name1',$name1)->with('sale',$sale);
    }
    public function saleMansions($name)
    {
        $sale = sale::where('property_type',$name)->where('sold_out',1)->get();
        $name1 = '';
        return view('sale.mansion')->with('name',$name)->with('name1',$name1)->with('sale',$sale);
    }
    public function filterDataMansion()
    {
        return view('sale.filterdataMansion'); 
    }
    public function LocationFilterSale($id)
    {
        $location = sale::where('city',$id)->where('sold_out',1)->orderby('id','desc')->get();
        return view('sale.locationFilter.location')->with('id',$id)->with('location',$location);
    }
    public function Filterdatalocation(Request $request)
    {
        if ($request->input('users') == 0) {
            $sort = sale::where('city',$request->input('filterid'))->where('sold_out', 1)->get();
            return $sort;
        }
        if ($request->input('users') == 1) {
            $sort = sale::where('city',$request->input('filterid'))->where('sold_out', 1)->orderby('price','asc')->get();
            return $sort;
        }
        if ($request->input('users') == 2) {
            $sort = sale::where('city',$request->input('filterid'))->where('sold_out', 1)->orderby('price','desc')->get();
            return $sort;
        }
        if ($request->input('users') == 3) {
            $sort = sale::where('city',$request->input('filterid'))->where('sold_out', 1)->orderby('built_years','desc')->get();
            return $sort;
        }
        if ($request->input('users') == 4) {
            $sort = sale::where('city',$request->input('filterid'))->where('sold_out', 1)->orderby('built_years','asc')->get();
            return $sort;
        }
    }
}
  