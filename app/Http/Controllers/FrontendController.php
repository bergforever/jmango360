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

    public function cosmetic()
    {
        return view('frontend.cosmetic-native-app.index');
    }

    public function update(Request $request, string $id)
    {
        //
    }
    public function destroy(string $id)
    {
        //
    }
}
