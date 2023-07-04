<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.home.index');
    }


    public function nativeApp()
    {
        return view('frontend.ecommerce-native-app.index');
    }


    public function feature()
    {
        return view('frontend.features.index');
    }


    public function fashion()
    {
        return view('frontend.fashion-native-app.index');
    }

    public function pricing()
    {
        return view('frontend.pricing.index');
    }

    public function cosmetic()
    {
        return view('frontend.cosmetic-native-app.index');
    }

    public function supplement()
    {
        return view('frontend.supplements-native-app.index');
    }
    public function other()
    {
        return view('frontend.others-native-app.index');

    }
    public function magento()
    {
        return view('frontend.magento.index');
    }
    public function commerce()
    {
        return view('frontend.big-commerce.index');
    }
}
