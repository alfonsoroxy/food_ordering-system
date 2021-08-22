<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CartController;

class CartController extends Controller
{

    public function index()
    {
      return view('subviews.cart');
    }
}
