<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //////// LANDING PAGE SECTION

    public function landing(){
        return view('pages.landing');
    }


    
}
