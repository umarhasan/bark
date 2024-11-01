<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\VeriantSize;
use App\Models\LeadGenrate;
use App\Models\PageCategory;
use App\Models\PageSections;
use App\Models\VeriantColor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    public function index()
    {
        $countries = json_decode(File::get(base_path('countries.json')));
        $cities = json_decode(File::get(base_path('cities.json')));
        $states = json_decode(File::get(base_path('states.json')));

        return view('home', compact('countries', 'cities', 'states'));
    }

    public function lead_genrate(Request $request){
        LeadGenrate::create($request->all());
        return redirect()->back();
    }

    public function login(){
        // $this->middleware('auth')->except('logout');
        return view('auth.login');
    }

    public function product_detail($id)
    {
        $data['product'] = Product::find($id);
        $data['size'] = VeriantSize::where('product_id',$id)->first();
        // return json_decode($size->name);
        $data['color'] = VeriantColor::where('product_id',$id)->first();
        return view('admin.product_detail',$data);
    }
}
