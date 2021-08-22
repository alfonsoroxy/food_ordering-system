<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

class IndexController extends Controller
{
    public function index()
    {
      return view('subviews.index');
    }
}
