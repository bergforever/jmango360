<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function Index(){
        $categories = Category::all();
        return view('backend.admin.categories.index',compact('categories'));
    }
    public function store(Request $request){
        $error=$request->validate([
            'name'=>'required',
        ]);
        try {
            $catgory = Category::create($request->all());

        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        Session::flash('success', 'Category created successfully!');
        return back()->withInput();
    }
    public function update(Request $request, $id){
        $error=$request->validate([
            'name'=>'required',
        ]);
        $category = Category::findOrFail($id);
        try {
            $category->name = $request->name;
            $category->update();

        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        Session::flash('success', 'Category created successfully!');
        return back()->withInput();
    }
    public function destory($id){
        $category = Category::findOrFail($id);
        try {
            $category->delete();

        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        Session::flash('success', 'Category delete successfully!');
        return back()->withInput();
    }
}
