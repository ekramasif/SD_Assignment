<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LayoutController extends Controller
{
    
    public function admin(){
        return view('admin.pages.dashboard');
    }

    public function other(){
        return view('website.pages.dashboard');
    }

}
