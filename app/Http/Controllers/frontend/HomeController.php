<?php

namespace App\Http\Controllers\frontend;
use App\home_page_client;
use App\backend\HomePageServices;
use App\backend\PackageAndPrice;
use App\backend\software;
use App\backend\About;
use App\backend\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	 $clients = home_page_client::all();
    	 $services = HomePageServices::all();
         $software = software::first();
         $sliders = slider::all();
        
         
    // dd ($abouts);
    	return view('frontend.home',compact('clients','services','software','sliders'));
    }
    
    public function contacts(){
        $software = software::first();
    	return view('frontend.contacts',compact('software'));
    }
    public function aboutUs(){
    	$clients = home_page_client::all();
        $software = software::first();
         $about = About::first();
    	return view('frontend.about-us',compact('clients','software','about'));
    }
    // ========================Price start======================================
    public function price (){
        $pakages = PackageAndPrice::all();
        $software = software::first();
        return view('frontend.price-pakage',compact('pakages','software'));
    }
    // ========================Price End======================================
    
}
