<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Index(){
        $contacts = Contact::all();
        return view('backend.admin.contacts.index',compact('contacts'));
    }
    public function destory($id){
        try{
        Contact::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'delete contact ');
        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
