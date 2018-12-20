<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BobController extends Controller
{
    public function index() {
    	return view("test.t1");
    }

    public function indexF() {
    	return view("test.t2");
    }

    
    

}
