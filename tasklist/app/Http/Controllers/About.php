<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
  public function Me() {
    	return view("HomeWork.AboutMe");
    }
}
