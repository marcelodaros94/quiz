<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function store(Request $request){
        dd($request->get('email'));
    }
}
