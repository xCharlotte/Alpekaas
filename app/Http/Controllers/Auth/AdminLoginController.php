<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:admin');
  }

  public function showLoginForm()
  {
    return view('auth.admin-login');
  }

  public function login(Request $request)
  {
    // Validate form Data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:4'
    ]);

    // Attempt to log user in
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
      // If succesfull redirect to intended location
      return redirect()->intended(route('admin.dashboard'));
    }
    // Unsuccessfull redirect back to login with form for Data
    return redirect()->back()->withInput($request->only('email', 'remember'));
  }
}
