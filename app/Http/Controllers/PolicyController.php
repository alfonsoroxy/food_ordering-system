<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PolicyController;

class PolicyController extends Controller
{

    public function index()
    {
      return view('subviews.policy');
    }
}
