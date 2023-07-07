<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class PortfolioController extends Controller
{
    public function Index(){

        $portfolios = Portfolio::all();
        return view('backend.admin.portfolios.index',compact('portfolios'));
    }
    public function Create(){
        $categories = Category::all();
        return view('backend.admin.portfolios.create',compact('categories'));
    }
    public function store(Request $request){
        try{
            $portfolio = new Portfolio;
            $portfolio->project_title = $request->input('project_title');
            $portfolio->slug = Str::slug($request->project_title);
            $portfolio->category_id = $request->input('category_id');
            $portfolio->android_application_link = $request->input('android_application_link');
            $portfolio->ios_application_link = $request->input('ios_application_link');
            $portfolio->web_address_link = $request->input('web_address_link');
            $portfolio->services = $request->input('services');
            $portfolio->description = $request->input('description');
            $portfolio->extra_description = $request->input('extra_description');
            $destination = 'images/portfolio_images';
            $member_image = $request->main_image;
            if ($request->hasFile('main_image')) {
                $filename = strtolower(
                    pathinfo($member_image->getClientOriginalName(), PATHINFO_FILENAME)
                    . '-'
                    . uniqid()
                    . '.'
                    . $member_image->getClientOriginalExtension()
                );
                str_replace(" ", "-", $filename);
                $member_image->move($destination, $filename);
                $portfolio->main_image = $filename;
                $portfolio->save();
            }
            $portfolio->save();
            return redirect()->back()->with('success', 'add portfolio');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
    public function edit($id){
        $portfolio = Portfolio::findOrFail($id);
        $categories = Category::all();
        return view('backend.admin.portfolios.edit',compact('portfolio','categories'));
    }
    public function update(Request $request, $id){
        try{
            $portfolio = Portfolio::findOrFail($id);;
            $portfolio->project_title = $request->input('project_title');
            $portfolio->category_id = $request->input('category_id');
            $portfolio->android_application_link = $request->input('android_application_link');
            $portfolio->ios_application_link = $request->input('ios_application_link');
            $portfolio->web_address_link = $request->input('web_address_link');
            $portfolio->services = $request->input('services');
            $portfolio->description = $request->input('description');
            $portfolio->extra_description = $request->input('extra_description');
            $destination = 'images/portfolio_images';
            $member_image = $request->main_image;
            if ($request->hasFile('main_image')) {
                $filename = strtolower(
                    pathinfo($member_image->getClientOriginalName(), PATHINFO_FILENAME)
                    . '-'
                    . uniqid()
                    . '.'
                    . $member_image->getClientOriginalExtension()
                );
                str_replace(" ", "-", $filename);
                $member_image->move($destination, $filename);
                $image_path = public_path().'/images/portfolio_images/'.$portfolio->main_image;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
                $portfolio->main_image = $filename;
                $portfolio->save();
            }
            $portfolio->save();
            return redirect()->back()->with('success', 'update portfolio');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
    public function destory($id)
    {
        try {
            $delete_portfolio = Portfolio::findOrFail($id);
            $image_path = public_path().'/images/portfolio_images/'.$delete_portfolio->main_image;
            if($delete_portfolio->delete()){
                unlink($image_path);
            }
            return redirect()->back()->with('success', 'delete portfolio ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
