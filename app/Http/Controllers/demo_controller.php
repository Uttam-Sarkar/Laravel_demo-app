<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\demo_model;


class demo_controller extends Controller
{
    //
    public function dindex(){

        //$products = Product::all();
        return view('products.dindex' );
    }
}
