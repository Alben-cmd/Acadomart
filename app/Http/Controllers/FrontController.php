<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $businesses = Business::where('status', 1)->get();
        return view('front.home', compact('businesses'));
    }

    public function show($slug)
    {
        $business = Business::where('slug', $slug)->first();
        return view('front.products', compact('business'));
    }

    public function product()
    {
        return view('front.products');
    }
}
