<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Models\CookieModel;


class UserController extends Controller
{
  public function store(Request $request, $email = '')
  {
    $request->validate([
      'username' => 'required|string|max:255',
      'email' => 'required|string|max:255',
      'password' => 'required|string|max:255',
      'address' => 'required|string|max:255',
      'phone_number' => 'required|string|max:255'
    ]);

    $data = UsersModel::where('email', '=', $request->input('email'))->get();

    if (count($data) > 0) {
      return redirect('/reg')->with('error', 'Email is already used');
    }

    $upload = UsersModel::createData([
      'username' => $request->input('username'),
      'email' => $request->input('email'),
      'password' => $request->input('password'),
      'address' => $request->input('address'),
      'phone_number' => $request->input('phone_number')
    ]);


    if ($upload['status'] === 400) {
      return redirect('/reg')->with('error', $upload['error']);
    }
    CookieModel::setUserCookie($upload['data']['user_id'], $upload['data']['username'], $upload['data']['email'], $upload['role']);

    if (!CookieModel::CheckCookie()) {
      return redirect('/reg')->with('error', 'Please try again');
    }
    return redirect('/');
  }

  public function show(Request $request, $email)
  {

  }
}
