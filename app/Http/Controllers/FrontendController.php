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
    public function salesForce()
    {
        return view('frontend.sales-force.index');
    }
    public function lightSpeed()
    {
        return view('frontend.light-speed.index');
    }
    public function shopify()
    {
        return view('frontend.shopify.index');
    }
    public function b2bBigcommerce()
    {
        return view('frontend.b2b-bigcommerce.index');
    }
    public function orderApp()
    {
        return view('frontend.b2b-ordering-app.index');
    }
    public function customers()
    {
        return view('frontend.customers.index');
    }
    public function blog()
    {
        return view('frontend.blog.index');
    }
}
