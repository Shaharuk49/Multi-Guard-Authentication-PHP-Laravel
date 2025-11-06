<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //this  mathod is show dashboard 
    public function index(){
        return view('dashboard');
    }
}
