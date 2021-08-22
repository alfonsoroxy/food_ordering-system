<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConfirmationController;

class ConfirmationController extends Controller
{

    public function index()
    {
      return view('subviews.confirmation');
    }
}
