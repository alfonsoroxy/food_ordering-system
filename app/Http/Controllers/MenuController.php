<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;

class MenuController extends Controller
{

    public function index()
    {
      return view('subviews.menu');
    }
}
