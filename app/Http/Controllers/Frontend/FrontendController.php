<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Logo;
use App\Model\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        return view ('frontend.layouts.home',$data);

    }
    public function ibch(){
        $data['logo']=Logo::first();
        return view('frontend.pages.ibch',$data);
    }
    public function atglance(){
        $data['logo']=Logo::first();
        return view('frontend.pages.atglance',$data);
    }

    public function foundationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.foundation_committee',$data);
    }

    public function etender(){
        $data['logo']=Logo::first();
        return view('frontend.pages.etender',$data);
    }
}
