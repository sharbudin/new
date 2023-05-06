<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class allcontroller extends Controller
{
    public function ui_first(Request $request)
    {
       return view('first_page');
    }
    public function ui_second(Request $request)
    {
        return view('second_page');
    }
    public function ui_third(Request $request)
    {
        return view('third_page');
    }
    public function dash(Request $request)
    {
        return view('dashboard');
    }
    public function ui_loan(Request $request)
    {
         //
    }
}
