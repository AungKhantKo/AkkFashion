<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function show($id)
    {
        // echo $id;
        return view('frontend.shop_item');
    }
}
