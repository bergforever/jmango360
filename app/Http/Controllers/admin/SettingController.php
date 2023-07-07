<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function Index()
    {
        $setting = Setting::first();

        return view('backend.admin.settings.index', compact('setting'));
    }

    //store
    public function Store(Request $request)
    {
        try {
            $setting = new Setting();
            $setting->app_name = $request->input('app_name');
            $setting->facebook_link = $request->input('facebook_link');
            $setting->linkedin_link = $request->input('linkedin_link');
            $setting->instagram_link = $request->input('instagram_link');
            $setting->twitter_link = $request->input('twitter_link');
            $setting->save();

            return redirect()->back()->with('success', 'update setting ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    //upadte
    public function Update(Request $request)
    {
        try {
            //first
            $setting = Setting::first();
            $setting->app_name = $request->input('app_name');
            $setting->facebook_link = $request->input('facebook_link');
            $setting->linkedin_link = $request->input('linkedin_link');
            $setting->instagram_link = $request->input('instagram_link');
            $setting->twitter_link = $request->input('twitter_link');
            $setting->save();
//            toastr()->info('We do have the Kapua suite available.', 'Turtle Bay Resort', ['timeOut' => 5000]);
           return redirect()->back()->with('success', 'update setting ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
