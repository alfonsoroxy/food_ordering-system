<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TermsController;

class TermsController extends Controller
{

    public function index()
    {
      return view('subviews.terms');
    }
}
