<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

class ContactController extends Controller
{
  
    public function index()
    {
      return view('subviews.contact');
    }
}
