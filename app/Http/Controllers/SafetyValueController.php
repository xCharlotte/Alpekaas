<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafetyValueController extends Controller
{
    public function index()
    {
      return view('safetycheck');
    }
}
