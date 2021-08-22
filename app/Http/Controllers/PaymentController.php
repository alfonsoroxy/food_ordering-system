<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PaymentController;

class PaymentController extends Controller
{

    public function index()
    {
      return view('subviews.payment');
    }
}
