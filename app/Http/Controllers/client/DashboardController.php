<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('backend.client.dashboard');
    }
}
