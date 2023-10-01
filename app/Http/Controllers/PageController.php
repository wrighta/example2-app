<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // we will have a /home route in the web.php which will direct to this function
    public function home()
    {
        //note, you refer to the view without .blade.php
        // ensure you name the view home.blade.php
        return view('home');
    } 

   

}
