<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function AboutPgDisp()
    {
        return view('about');

    }// end method

    public function ContactPgDisp()
    {
        return view('contact');

    }// 
}
