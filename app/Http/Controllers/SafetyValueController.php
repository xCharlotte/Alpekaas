<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafetyValueController extends Controller
{
    public function index()
    {
      $anonymous = ['1','2'];
      $showName = ['3','4','5'];
      return view('safetycheck', compact(['anonymous','showName']));
    }
}
