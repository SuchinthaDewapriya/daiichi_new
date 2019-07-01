<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\apartment;

use App\sale;

use DB;

use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function RentalInformation()
    {
        $rental = apartment::orderby('id','desc')->get();
        return view('admin.rentalInformation')->with('rental', $rental);
    }

    //Rental Functions
    public function NewRental(Request $request)
    {

        $apartment = New apartment;
        $apartment->property_name = Input::get('property_name');
        $apartment->property_type = Input::get('property_type');
        $apartment->room_no = Input::get('room_no');
        $apartment->twon = Input::get('twon');
        $apartment->location = Input::get('location');
        $apartment->url = Input::get('url');
        $apartment->lat = Input::get('lat');
        $apartment->lng = Input::get('lng');
        $apartment->nearst_station = Input::get('nearst_station');
        $apartment->transpotation = Input::get('transpotation');
        $apartment->floor_type = Input::get('floor_type');
        $apartment->floor_plan = Input::get('floor_plan');
        $apartment->rent = Input::get('rent');
        $apartment->price = Input::get('price');
        $apartment->admin_expences = Input::get('admin_expences');
        $apartment->mat_rei = Input::get('mat_rei');
        $apartment->occupied_area = Input::get('occupied_area');
        $apartment->built_years = Input::get('property_name');
        $apartment->building_structure = Input::get('building_structure');
        $apartment->wherebouts_floor = Input::get('wherebouts_floor');
        $apartment->balcony_area = Input::get('balcony_area');
        $apartment->lighting_surface = Input::get('lighting_surface');
        $apartment->home_insurance = Input::get('home_insurance');
        $apartment->contract_period = Input::get('contract_period');
        $apartment->renewalfee = Input::get('renewalfee');
        $apartment->write_offs = Input::get('write_offs');
        $apartment->delivery = Input::get('delivery');
        $apartment->current_state = Input::get('current_state');
        $apartment->parking_lot = Input::get('parking_lot');
        $apartment->loadsearch = Input::get('search_new_places');
        $apartment->rent_out = Input::get('rent_out');

        $condition = $request->facility1 .' '.$request->facility2 .' '.$request->facility3 .' '.$request->facility4 .' '.$request->facility5 .' '.$request->facility6 .' '.$request->facility7 .' '.$request->facility8 .' '.$request->facility9 .' '.$request->facility10 .' '.$request->facility11 .' '.$request->facility12 .' '.$request->facility13 .' '.$request->facility14 .' '.$request->facility15 .' '.$request->facility16 .' '.$request->facility17 .' '.$request->facility18 .' '.$request->facility19 .' '.$request->facility20 .' '.$request->facility21 .' '.$request->facility22 .' '.$request->facility30 .' '.$request->facility31 .' '.$request->facility32 .' '.$request->facility33 .' '.$request->facility34;
        $apartment->facilities_conditions = $condition;

        $apartment->construction = Input::get('facility23');
        $apartment->pronear_station = Input::get('facility24');
        $apartment->pets_live = Input::get('facility25');
        $apartment->deposit = Input::get('facility26');
        $apartment->business_prk = Input::get('facility27');
        $apartment->remarks = Input::get('remarks');
        $apartment->point = Input::get('point');
        $apartment->search_ur_category = Input::get('search_ur_category');
        $apartment->flag_display = Input::get('flag_display');
        $apartment->page_display = Input::get('page_display');
        $apartment->information_reg = Input::get('information_reg');
        $apartment->editpsword = Input::get('editpsword');

        $apartment->comment1 = Input::get('comment1');
        if ($request->img1 != "") {
            $filename = \Request::file('img1')->getClientOriginalName();
            $ext = \Request::file('img1')->getClientOriginalExtension();
            $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
            $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

            if (Input::hasFile('img1')) {
                $apartmentimg=Input::file('img1');
                $apartmentimg->move(public_path(). '/images/photos', $filename);
                
                $apartment->img1 = $filename;
            }
        }

        $apartment->comment2 = Input::get('comment2');
        if ($request->img2 != "") {
        $filename = \Request::file('img2')->getClientOriginalName();
        $ext = \Request::file('img2')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img2')) {
            $apartmentimg=Input::file('img2');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img2 = $filename;
        }
        }

        $apartment->comment3 = Input::get('comment3');
        if ($request->img3 != "") {
        $filename = \Request::file('img3')->getClientOriginalName();
        $ext = \Request::file('img3')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img3')) {
            $apartmentimg=Input::file('img3');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img3 = $filename;
        }
        }

        $apartment->comment4 = Input::get('comment4');
        if ($request->img4 != "") {
        $filename = \Request::file('img4')->getClientOriginalName();
        $ext = \Request::file('img4')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img4')) {
            $apartmentimg=Input::file('img4');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img4 = $filename;
        }}

        $apartment->comment5 = Input::get('comment5');
        if ($request->img5 != "") {
        $filename = \Request::file('img5')->getClientOriginalName();
        $ext = \Request::file('img5')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img5')) {
            $apartmentimg=Input::file('img5');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img5 = $filename;
        }}

        $apartment->comment6 = Input::get('comment6');
        if ($request->img6 != "") {
        $filename = \Request::file('img6')->getClientOriginalName();
        $ext = \Request::file('img6')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img6')) {
            $apartmentimg=Input::file('img6');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img6 = $filename;
        }}

        $apartment->comment7 = Input::get('comment7');
        if ($request->img7 != "") {
        $filename = \Request::file('img7')->getClientOriginalName();
        $ext = \Request::file('img7')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img7')) {
            $apartmentimg=Input::file('img7');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img7 = $filename;
        }}

        $apartment->comment8 = Input::get('comment8');
        if ($request->img8 != "") {
        $filename = \Request::file('img8')->getClientOriginalName();
        $ext = \Request::file('img8')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img8')) {
            $apartmentimg=Input::file('img8');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img8 = $filename;
        }}

        $apartment->comment9 = Input::get('comment9');
        if ($request->img9 != "") {
        $filename = \Request::file('img9')->getClientOriginalName();
        $ext = \Request::file('img9')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img9')) {
            $apartmentimg=Input::file('img9');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img9 = $filename;
        }}

        $apartment->comment10 = Input::get('comment10');
        if ($request->img10 != "") {
        $filename = \Request::file('img10')->getClientOriginalName();
        $ext = \Request::file('img10')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img10')) {
            $apartmentimg=Input::file('img10');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img10 = $filename;
        }}

        $apartment->comment11 = Input::get('comment11');
        if ($request->img11 != "") {
        $filename = \Request::file('img11')->getClientOriginalName();
        $ext = \Request::file('img11')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img11')) {
            $apartmentimg=Input::file('img11');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img11 = $filename;
        }}

        $apartment->comment12 = Input::get('comment12');
        if ($request->img12 != "") {
        $filename = \Request::file('img12')->getClientOriginalName();
        $ext = \Request::file('img12')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img12')) {
            $apartmentimg=Input::file('img12');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img12 = $filename;
        }}

        $apartment->comment13 = Input::get('comment13');
        if ($request->img13 != "") {
        $filename = \Request::file('img13')->getClientOriginalName();
        $ext = \Request::file('img13')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img13')) {
            $apartmentimg=Input::file('img13');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img13 = $filename;
        }}

        $apartment->comment14 = Input::get('comment14');
        if ($request->img14 != "") {
        $filename = \Request::file('img14')->getClientOriginalName();
        $ext = \Request::file('img14')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img14')) {
            $apartmentimg=Input::file('img14');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img14 = $filename;
        }}

        $apartment->comment15 = Input::get('comment15');
        if ($request->img15 != "") {
        $filename = \Request::file('img15')->getClientOriginalName();
        $ext = \Request::file('img15')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img15')) {
            $apartmentimg=Input::file('img15');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img15 = $filename;
        }}

        $apartment->comment16 = Input::get('comment16');
        if ($request->img16 != "") {
        $filename = \Request::file('img16')->getClientOriginalName();
        $ext = \Request::file('img16')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img16')) {
            $apartmentimg=Input::file('img16');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img16 = $filename;
        }}

        $apartment->save();
        return response()->json();
        // return redirect()->back()->with('success','Successfully added rental!');
    }
    public function EditRental($idd)
    {
        return view('admin.EditRental')->with('idd',$idd);
    }
    public function UpdateRental(Request $request)
    {
        $id = $request->id;
        $apartment = apartment::find($id);
        $apartment->property_name = Input::get('property_name');
        $apartment->property_type = Input::get('property_type');
        $apartment->room_no = Input::get('room_no');
        $apartment->twon = Input::get('twon');
        $apartment->location = Input::get('location');
        $apartment->url = Input::get('url');
        $apartment->lat = Input::get('lat');
        $apartment->lng = Input::get('lng');
        $apartment->nearst_station = Input::get('nearst_station');
        $apartment->transpotation = Input::get('transpotation');
        $apartment->floor_type = Input::get('floor_type');
        $apartment->floor_plan = Input::get('floor_plan');
        $apartment->rent = Input::get('rent');
        $apartment->price = Input::get('price');
        $apartment->admin_expences = Input::get('admin_expences');
        $apartment->mat_rei = Input::get('mat_rei');
        $apartment->occupied_area = Input::get('occupied_area');
        $apartment->built_years = Input::get('property_name');
        $apartment->building_structure = Input::get('building_structure');
        $apartment->wherebouts_floor = Input::get('wherebouts_floor');
        $apartment->balcony_area = Input::get('balcony_area');
        $apartment->lighting_surface = Input::get('lighting_surface');
        $apartment->home_insurance = Input::get('home_insurance');
        $apartment->contract_period = Input::get('contract_period');
        $apartment->renewalfee = Input::get('renewalfee');
        $apartment->write_offs = Input::get('write_offs');
        $apartment->delivery = Input::get('delivery');
        $apartment->current_state = Input::get('current_state');
        $apartment->parking_lot = Input::get('parking_lot');
        $apartment->loadsearch = Input::get('search_new_places');
        $apartment->rent_out = Input::get('rent_out');

        $condition = $request->facility1 .' '.$request->facility2 .' '.$request->facility3 .' '.$request->facility4 .' '.$request->facility5 .' '.$request->facility6 .' '.$request->facility7 .' '.$request->facility8 .' '.$request->facility9 .' '.$request->facility10 .' '.$request->facility11 .' '.$request->facility12 .' '.$request->facility13 .' '.$request->facility14 .' '.$request->facility15 .' '.$request->facility16 .' '.$request->facility17 .' '.$request->facility18 .' '.$request->facility19 .' '.$request->facility20 .' '.$request->facility21 .' '.$request->facility22 .' '.$request->facility30 .' '.$request->facility31 .' '.$request->facility32 .' '.$request->facility33 .' '.$request->facility34;
        $apartment->facilities_conditions = $condition;

        $apartment->construction = Input::get('facility23');
        $apartment->pronear_station = Input::get('facility24');
        $apartment->pets_live = Input::get('facility25');
        $apartment->deposit = Input::get('facility26');
        $apartment->business_prk = Input::get('facility27');
        $apartment->remarks = Input::get('remarks');
        $apartment->point = Input::get('point');
        $apartment->search_ur_category = Input::get('search_ur_category');
        $apartment->flag_display = Input::get('flag_display');
        $apartment->page_display = Input::get('page_display');
        $apartment->information_reg = Input::get('information_reg');
        $apartment->editpsword = Input::get('editpsword');

        $apartment->comment1 = Input::get('comment1');
        if ($request->img1 != "") {
            $filename = \Request::file('img1')->getClientOriginalName();
            $ext = \Request::file('img1')->getClientOriginalExtension();
            $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
            $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

            if (Input::hasFile('img1')) {
                $apartmentimg=Input::file('img1');
                $apartmentimg->move(public_path(). '/images/photos', $filename);
                
                $apartment->img1 = $filename;
            }
        }

        $apartment->comment2 = Input::get('comment2');
        if ($request->img2 != "") {
        $filename = \Request::file('img2')->getClientOriginalName();
        $ext = \Request::file('img2')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img2')) {
            $apartmentimg=Input::file('img2');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img2 = $filename;
        }
        }

        $apartment->comment3 = Input::get('comment3');
        if ($request->img3 != "") {
        $filename = \Request::file('img3')->getClientOriginalName();
        $ext = \Request::file('img3')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img3')) {
            $apartmentimg=Input::file('img3');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img3 = $filename;
        }
        }

        $apartment->comment4 = Input::get('comment4');
        if ($request->img4 != "") {
        $filename = \Request::file('img4')->getClientOriginalName();
        $ext = \Request::file('img4')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img4')) {
            $apartmentimg=Input::file('img4');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img4 = $filename;
        }}

        $apartment->comment5 = Input::get('comment5');
        if ($request->img5 != "") {
        $filename = \Request::file('img5')->getClientOriginalName();
        $ext = \Request::file('img5')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img5')) {
            $apartmentimg=Input::file('img5');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img5 = $filename;
        }}

        $apartment->comment6 = Input::get('comment6');
        if ($request->img6 != "") {
        $filename = \Request::file('img6')->getClientOriginalName();
        $ext = \Request::file('img6')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img6')) {
            $apartmentimg=Input::file('img6');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img6 = $filename;
        }}

        $apartment->comment7 = Input::get('comment7');
        if ($request->img7 != "") {
        $filename = \Request::file('img7')->getClientOriginalName();
        $ext = \Request::file('img7')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img7')) {
            $apartmentimg=Input::file('img7');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img7 = $filename;
        }}

        $apartment->comment8 = Input::get('comment8');
        if ($request->img8 != "") {
        $filename = \Request::file('img8')->getClientOriginalName();
        $ext = \Request::file('img8')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img8')) {
            $apartmentimg=Input::file('img8');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img8 = $filename;
        }}

        $apartment->comment9 = Input::get('comment9');
        if ($request->img9 != "") {
        $filename = \Request::file('img9')->getClientOriginalName();
        $ext = \Request::file('img9')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img9')) {
            $apartmentimg=Input::file('img9');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img9 = $filename;
        }}

        $apartment->comment10 = Input::get('comment10');
        if ($request->img10 != "") {
        $filename = \Request::file('img10')->getClientOriginalName();
        $ext = \Request::file('img10')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img10')) {
            $apartmentimg=Input::file('img10');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img10 = $filename;
        }}

        $apartment->comment11 = Input::get('comment11');
        if ($request->img11 != "") {
        $filename = \Request::file('img11')->getClientOriginalName();
        $ext = \Request::file('img11')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img11')) {
            $apartmentimg=Input::file('img11');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img11 = $filename;
        }}

        $apartment->comment12 = Input::get('comment12');
        if ($request->img12 != "") {
        $filename = \Request::file('img12')->getClientOriginalName();
        $ext = \Request::file('img12')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img12')) {
            $apartmentimg=Input::file('img12');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img12 = $filename;
        }}

        $apartment->comment13 = Input::get('comment13');
        if ($request->img13 != "") {
        $filename = \Request::file('img13')->getClientOriginalName();
        $ext = \Request::file('img13')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img13')) {
            $apartmentimg=Input::file('img13');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img13 = $filename;
        }}

        $apartment->comment14 = Input::get('comment14');
        if ($request->img14 != "") {
        $filename = \Request::file('img14')->getClientOriginalName();
        $ext = \Request::file('img14')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img14')) {
            $apartmentimg=Input::file('img14');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img14 = $filename;
        }}

        $apartment->comment15 = Input::get('comment15');
        if ($request->img15 != "") {
        $filename = \Request::file('img15')->getClientOriginalName();
        $ext = \Request::file('img15')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img15')) {
            $apartmentimg=Input::file('img15');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img15 = $filename;
        }}

        $apartment->comment16 = Input::get('comment16');
        if ($request->img16 != "") {
        $filename = \Request::file('img16')->getClientOriginalName();
        $ext = \Request::file('img16')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img16')) {
            $apartmentimg=Input::file('img16');
            $apartmentimg->move(public_path(). '/images/photos', $filename);
            
            $apartment->img16 = $filename;
        }}

        $apartment->save();

        return redirect()->back()->with('success','Successfully updated apartment!');
    }
    public function Deleterental($id)
    {
        apartment::find($id)->delete();
        return redirect('rental-information');
    }
    //Sales Functions
    public function SaleInformation()
    {
        $sale = sale::orderby('id','desc')->get();
        return view('admin.SaleInformation')->with('sale',$sale);
    }
    public function NewSale(Request $request)
    {
        $apartment = New sale;
        $apartment->property_type = Input::get('property_type');
        $apartment->city = Input::get('city');
        $apartment->location = Input::get('location');
        $apartment->lat = Input::get('lat');
        $apartment->lng = Input::get('lng');
        $apartment->nearst_station = Input::get('nearst_station');
        $apartment->transpotation = Input::get('transpotation');
        $apartment->floor_type = Input::get('floor_type');
        $apartment->floor_plan = Input::get('floor_plan');
        $apartment->price = Input::get('price');
        $apartment->building_area = Input::get('building_area');
        $apartment->building_structure = Input::get('building_structure');
        $apartment->parking_lot = Input::get('parking_lot');
        $apartment->built_years = Input::get('built_years');
        $apartment->building_structure = Input::get('building_structure');
        $apartment->whereabouts_floor = Input::get('whereabouts_floor');
        $apartment->road_situation = Input::get('road_situation');
        $apartment->land_rights = Input::get('land_rights');
        $apartment->repair_reserve = Input::get('repair_reserve');
        $apartment->setback = Input::get('setback');
        $apartment->driveway_area = Input::get('driveway_area');
        $apartment->urban_planning = Input::get('urban_planning');
        $apartment->land_category  = Input::get('land_category');
        $apartment->use_district = Input::get('use_district');
        $apartment->terrain = Input::get('terrain');
        $apartment->building_coverage = Input::get('building_coverage');
        $apartment->site_area = Input::get('site_area');
        $apartment->floor_space = Input::get('floor_space');
        $apartment->land_law_notification = Input::get('land_law_notification');
        $apartment->delivery = Input::get('delivery');
        $apartment->current_state = Input::get('current_state');
        $apartment->facilities_conditions = Input::get('facilities_conditions');
        $apartment->remarks = Input::get('remarks');
        $apartment->point = Input::get('point');
        $apartment->flag_display = Input::get('flag_display');
        $apartment->page_display = Input::get('page_display');
        $apartment->information_reg = Input::get('information_reg');
        $apartment->editpsword = Input::get('editpsword');
        $apartment->sold_out = Input::get('sold_out');
        $apartment->loadsearch = Input::get('search_new_places');

        $condition = $request->facility1 .' '.$request->facility2 .' '.$request->facility3 .' '.$request->facility4 .' '.$request->facility5 .' '.$request->facility6 .' '.$request->facility7 .' '.$request->facility8 .' '.$request->facility9 .' '.$request->facility10 .' '.$request->facility11 .' '.$request->facility12 .' '.$request->facility13 .' '.$request->facility14 .' '.$request->facility15 .' '.$request->facility16 .' '.$request->facility17 .' '.$request->facility18 .' '.$request->facility19 .' '.$request->facility20 .' '.$request->facility21 .' '.$request->facility22 .' '.$request->facility23.' '.$request->facility24 .' '.$request->facility25.' '.$request->facility26.' '.$request->facility27;
        $apartment->facilities_conditions = $condition;

        $apartment->remarks = Input::get('remarks');
        $apartment->point = Input::get('point');
        $apartment->flag_display = Input::get('flag_display');
        $apartment->page_display = Input::get('page_display');
        $apartment->information_reg = Input::get('information_reg');
        $apartment->editpsword = Input::get('editpsword');

        $apartment->comment1 = Input::get('comment1');
        if ($request->img1 != "") {
            $filename = \Request::file('img1')->getClientOriginalName();
            $ext = \Request::file('img1')->getClientOriginalExtension();
            $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
            $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

            if (Input::hasFile('img1')) {
                $apartmentimg=Input::file('img1');
                $apartmentimg->move(public_path(). '/images/salephotos', $filename);
                
                $apartment->img1 = $filename;
            }
        }

        $apartment->comment2 = Input::get('comment2');
        if ($request->img2 != "") {
        $filename = \Request::file('img2')->getClientOriginalName();
        $ext = \Request::file('img2')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img2')) {
            $apartmentimg=Input::file('img2');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img2 = $filename;
        }
        }

        $apartment->comment3 = Input::get('comment3');
        if ($request->img3 != "") {
        $filename = \Request::file('img3')->getClientOriginalName();
        $ext = \Request::file('img3')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img3')) {
            $apartmentimg=Input::file('img3');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img3 = $filename;
        }
        }

        $apartment->comment4 = Input::get('comment4');
        if ($request->img4 != "") {
        $filename = \Request::file('img4')->getClientOriginalName();
        $ext = \Request::file('img4')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img4')) {
            $apartmentimg=Input::file('img4');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img4 = $filename;
        }}

        $apartment->comment5 = Input::get('comment5');
        if ($request->img5 != "") {
        $filename = \Request::file('img5')->getClientOriginalName();
        $ext = \Request::file('img5')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img5')) {
            $apartmentimg=Input::file('img5');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img5 = $filename;
        }}

        $apartment->comment6 = Input::get('comment6');
        if ($request->img6 != "") {
        $filename = \Request::file('img6')->getClientOriginalName();
        $ext = \Request::file('img6')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img6')) {
            $apartmentimg=Input::file('img6');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img6 = $filename;
        }}

        $apartment->comment7 = Input::get('comment7');
        if ($request->img7 != "") {
        $filename = \Request::file('img7')->getClientOriginalName();
        $ext = \Request::file('img7')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img7')) {
            $apartmentimg=Input::file('img7');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img7 = $filename;
        }}

        $apartment->comment8 = Input::get('comment8');
        if ($request->img8 != "") {
        $filename = \Request::file('img8')->getClientOriginalName();
        $ext = \Request::file('img8')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img8')) {
            $apartmentimg=Input::file('img8');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img8 = $filename;
        }}

        $apartment->comment9 = Input::get('comment9');
        if ($request->img9 != "") {
        $filename = \Request::file('img9')->getClientOriginalName();
        $ext = \Request::file('img9')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img9')) {
            $apartmentimg=Input::file('img9');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img9 = $filename;
        }}

        $apartment->comment10 = Input::get('comment10');
        if ($request->img10 != "") {
        $filename = \Request::file('img10')->getClientOriginalName();
        $ext = \Request::file('img10')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img10')) {
            $apartmentimg=Input::file('img10');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img10 = $filename;
        }}

        $apartment->comment11 = Input::get('comment11');
        if ($request->img11 != "") {
        $filename = \Request::file('img11')->getClientOriginalName();
        $ext = \Request::file('img11')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img11')) {
            $apartmentimg=Input::file('img11');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img11 = $filename;
        }}

        $apartment->comment12 = Input::get('comment12');
        if ($request->img12 != "") {
        $filename = \Request::file('img12')->getClientOriginalName();
        $ext = \Request::file('img12')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img12')) {
            $apartmentimg=Input::file('img12');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img12 = $filename;
        }}

        $apartment->comment13 = Input::get('comment13');
        if ($request->img13 != "") {
        $filename = \Request::file('img13')->getClientOriginalName();
        $ext = \Request::file('img13')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img13')) {
            $apartmentimg=Input::file('img13');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img13 = $filename;
        }}

        $apartment->comment14 = Input::get('comment14');
        if ($request->img14 != "") {
        $filename = \Request::file('img14')->getClientOriginalName();
        $ext = \Request::file('img14')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img14')) {
            $apartmentimg=Input::file('img14');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img14 = $filename;
        }}

        $apartment->comment15 = Input::get('comment15');
        if ($request->img15 != "") {
        $filename = \Request::file('img15')->getClientOriginalName();
        $ext = \Request::file('img15')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img15')) {
            $apartmentimg=Input::file('img15');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img15 = $filename;
        }}

        $apartment->comment16 = Input::get('comment16');
        if ($request->img16 != "") {
        $filename = \Request::file('img16')->getClientOriginalName();
        $ext = \Request::file('img16')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img16')) {
            $apartmentimg=Input::file('img16');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img16 = $filename;
        }}

        $apartment->save();

        return response()->json();
    }
    public function EditSale($idd)
    {
        return view('admin.EditSale')->with('idd',$idd);
    }
    public function UpdateSale(Request $request)
    {
        $id = $request->id;
        $apartment = sale::find($id);
        $apartment->property_type = Input::get('property_type');
        $apartment->city = Input::get('city');
        $apartment->location = Input::get('location');
        $apartment->lat = Input::get('lat');
        $apartment->lng = Input::get('lng');
        $apartment->nearst_station = Input::get('nearst_station');
        $apartment->transpotation = Input::get('transpotation');
        $apartment->floor_type = Input::get('floor_type');
        $apartment->floor_plan = Input::get('floor_plan');
        $apartment->price = Input::get('price');
        $apartment->building_area = Input::get('building_area');
        $apartment->building_structure = Input::get('building_structure');
        $apartment->parking_lot = Input::get('parking_lot');
        $apartment->built_years = Input::get('built_years');
        $apartment->building_structure = Input::get('building_structure');
        $apartment->whereabouts_floor = Input::get('whereabouts_floor');
        $apartment->road_situation = Input::get('road_situation');
        $apartment->land_rights = Input::get('land_rights');
        $apartment->repair_reserve = Input::get('repair_reserve');
        $apartment->setback = Input::get('setback');
        $apartment->driveway_area = Input::get('driveway_area');
        $apartment->urban_planning = Input::get('urban_planning');
        $apartment->land_category  = Input::get('land_category');
        $apartment->use_district = Input::get('use_district');
        $apartment->terrain = Input::get('terrain');
        $apartment->building_coverage = Input::get('building_coverage');
        $apartment->site_area = Input::get('site_area');
        $apartment->floor_space = Input::get('floor_space');
        $apartment->land_law_notification = Input::get('land_law_notification');
        $apartment->delivery = Input::get('delivery');
        $apartment->current_state = Input::get('current_state');
        $apartment->facilities_conditions = Input::get('facilities_conditions');
        $apartment->remarks = Input::get('remarks');
        $apartment->point = Input::get('point');
        $apartment->flag_display = Input::get('flag_display');
        $apartment->page_display = Input::get('page_display');
        $apartment->information_reg = Input::get('information_reg');
        $apartment->editpsword = Input::get('editpsword');
        $apartment->sold_out = Input::get('sold_out');
        $apartment->loadsearch = Input::get('search_new_places');


        $condition = $request->facility1 .' '.$request->facility2 .' '.$request->facility3 .' '.$request->facility4 .' '.$request->facility5 .' '.$request->facility6 .' '.$request->facility7 .' '.$request->facility8 .' '.$request->facility9 .' '.$request->facility10 .' '.$request->facility11 .' '.$request->facility12 .' '.$request->facility13 .' '.$request->facility14 .' '.$request->facility15 .' '.$request->facility16 .' '.$request->facility17 .' '.$request->facility18 .' '.$request->facility19 .' '.$request->facility20 .' '.$request->facility21 .' '.$request->facility22 .' '.$request->facility23.' '.$request->facility24 .' '.$request->facility25.' '.$request->facility26.' '.$request->facility27;
        $apartment->facilities_conditions = $condition;

        $apartment->remarks = Input::get('remarks');
        $apartment->point = Input::get('point');
        $apartment->flag_display = Input::get('flag_display');
        $apartment->page_display = Input::get('page_display');
        $apartment->information_reg = Input::get('information_reg');
        $apartment->editpsword = Input::get('editpsword');

        $apartment->comment1 = Input::get('comment1');
        if ($request->img1 != "") {
            $filename = \Request::file('img1')->getClientOriginalName();
            $ext = \Request::file('img1')->getClientOriginalExtension();
            $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
            $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

            if (Input::hasFile('img1')) {
                $apartmentimg=Input::file('img1');
                $apartmentimg->move(public_path(). '/images/salephotos', $filename);
                
                $apartment->img1 = $filename;
            }
        }

        $apartment->comment2 = Input::get('comment2');
        if ($request->img2 != "") {
        $filename = \Request::file('img2')->getClientOriginalName();
        $ext = \Request::file('img2')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img2')) {
            $apartmentimg=Input::file('img2');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img2 = $filename;
        }
        }

        $apartment->comment3 = Input::get('comment3');
        if ($request->img3 != "") {
        $filename = \Request::file('img3')->getClientOriginalName();
        $ext = \Request::file('img3')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img3')) {
            $apartmentimg=Input::file('img3');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img3 = $filename;
        }
        }

        $apartment->comment4 = Input::get('comment4');
        if ($request->img4 != "") {
        $filename = \Request::file('img4')->getClientOriginalName();
        $ext = \Request::file('img4')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img4')) {
            $apartmentimg=Input::file('img4');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img4 = $filename;
        }}

        $apartment->comment5 = Input::get('comment5');
        if ($request->img5 != "") {
        $filename = \Request::file('img5')->getClientOriginalName();
        $ext = \Request::file('img5')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img5')) {
            $apartmentimg=Input::file('img5');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img5 = $filename;
        }}

        $apartment->comment6 = Input::get('comment6');
        if ($request->img6 != "") {
        $filename = \Request::file('img6')->getClientOriginalName();
        $ext = \Request::file('img6')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img6')) {
            $apartmentimg=Input::file('img6');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img6 = $filename;
        }}

        $apartment->comment7 = Input::get('comment7');
        if ($request->img7 != "") {
        $filename = \Request::file('img7')->getClientOriginalName();
        $ext = \Request::file('img7')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img7')) {
            $apartmentimg=Input::file('img7');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img7 = $filename;
        }}

        $apartment->comment8 = Input::get('comment8');
        if ($request->img8 != "") {
        $filename = \Request::file('img8')->getClientOriginalName();
        $ext = \Request::file('img8')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img8')) {
            $apartmentimg=Input::file('img8');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img8 = $filename;
        }}

        $apartment->comment9 = Input::get('comment9');
        if ($request->img9 != "") {
        $filename = \Request::file('img9')->getClientOriginalName();
        $ext = \Request::file('img9')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img9')) {
            $apartmentimg=Input::file('img9');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img9 = $filename;
        }}

        $apartment->comment10 = Input::get('comment10');
        if ($request->img10 != "") {
        $filename = \Request::file('img10')->getClientOriginalName();
        $ext = \Request::file('img10')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img10')) {
            $apartmentimg=Input::file('img10');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img10 = $filename;
        }}

        $apartment->comment11 = Input::get('comment11');
        if ($request->img11 != "") {
        $filename = \Request::file('img11')->getClientOriginalName();
        $ext = \Request::file('img11')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img11')) {
            $apartmentimg=Input::file('img11');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img11 = $filename;
        }}

        $apartment->comment12 = Input::get('comment12');
        if ($request->img12 != "") {
        $filename = \Request::file('img12')->getClientOriginalName();
        $ext = \Request::file('img12')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img12')) {
            $apartmentimg=Input::file('img12');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img12 = $filename;
        }}

        $apartment->comment13 = Input::get('comment13');
        if ($request->img13 != "") {
        $filename = \Request::file('img13')->getClientOriginalName();
        $ext = \Request::file('img13')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img13')) {
            $apartmentimg=Input::file('img13');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img13 = $filename;
        }}

        $apartment->comment14 = Input::get('comment14');
        if ($request->img14 != "") {
        $filename = \Request::file('img14')->getClientOriginalName();
        $ext = \Request::file('img14')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img14')) {
            $apartmentimg=Input::file('img14');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img14 = $filename;
        }}

        $apartment->comment15 = Input::get('comment15');
        if ($request->img15 != "") {
        $filename = \Request::file('img15')->getClientOriginalName();
        $ext = \Request::file('img15')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img15')) {
            $apartmentimg=Input::file('img15');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img15 = $filename;
        }}

        $apartment->comment16 = Input::get('comment16');
        if ($request->img16 != "") {
        $filename = \Request::file('img16')->getClientOriginalName();
        $ext = \Request::file('img16')->getClientOriginalExtension();
        $without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
        $filename = str_slug(strtolower($without_ext)).'-'.time().'.'.$ext;

        if (Input::hasFile('img16')) {
            $apartmentimg=Input::file('img16');
            $apartmentimg->move(public_path(). '/images/salephotos', $filename);
            
            $apartment->img16 = $filename; 
        }}

        $apartment->save();

        return redirect()->back()->with('success','Successfully updated sales!');
    }
    public function Deletesale($id)
    {
        sale::find($id)->delete();
        return redirect('sale-information');
    }
    public function newNews(Request $req)
    {
        DB::table('news')->insert([
            'news' => $req->news,
        ]);
        return response()->json(['msg','Success']);
    }
    public function News()
    {
        $allnews = DB::table('news')->get();
        return view('admin.news')->with('allnews',$allnews);
    }
    public function addnewNews()
    {
        return view('admin.newNews');
    }
    public function submitNewNews(Request $req)
    {
        DB::table('news')->insert([
            'news' => $req->news,
            'link' => $req->link
        ]);
        return response()->json(['msg','Success']);
    }
    public function deleteNews($id)
    {
        DB::table('news')->where('id',$id)->delete();
        $allnews = DB::table('news')->get();
        return $allnews;
    } 
    public function NewsEdit($id)
    {
        $NewsEdit = DB::table('news')->where('id',$id)->first();
        return view('admin.NewsEdit')->with('NewsEdit',$NewsEdit);
    }
    public function updateNews(Request $req,$id)
    {
        DB::table('news')->where('id',$id)->update([
            'news' => $req->news,
            'link' => $req->link
        ]);
        return response()->json();
    }
}
