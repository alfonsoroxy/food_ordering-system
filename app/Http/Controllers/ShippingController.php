<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ShippingController;

class ShippingController extends Controller
{

    public function index()
    {
      return view('subviews.shipping');
    }
}
