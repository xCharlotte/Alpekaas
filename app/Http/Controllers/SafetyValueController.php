<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use App\SafetyValue;

class SafetyValueController extends Controller
{
    public function index()
    {
      $safetyValue = SafetyValue::all();
      return $safetyValue;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $safetyValue = SafetyValue::find($id);
      return $safetyValue;
    }

}
