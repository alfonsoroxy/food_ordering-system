<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AboutController;


class AboutController extends Controller
{

    public function index()
    {
      return view('subviews.about');
    }

}
