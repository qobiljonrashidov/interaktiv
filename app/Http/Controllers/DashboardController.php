<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index(){
        $alldata=Departments::get();
        return view('dashboard',compact('alldata'));


    }
}
