<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function viewzone(){
        return view('admin.zone');
    }

    public function viewregion(){
        return view('admin.region');
    }

    public function viewterritory(){
        return view('admin.territory');
    }

    public function viewuser(){
        return view('admin.user');
    }

    public function viewproduct(){
        return view('admin.product');
    }
    
    public function viewproductdetails(){
        return view('admin.productview');
    }

}
