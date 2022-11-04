<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // Create new User
    public function register(Request $request) {
      $formFields = $request->validate([
          'name' => ['required', 'min:3'],
          'last_name' => ['required', 'min:3'],
          'email' => ['required', 'email', Rule::unique('users','email')],
          'password' => ['required','confirmed','min:6'],
          'phone' => ['required','min:10'],
          'country' => ['required','min:3'],
          'city' => ['required','min:3'],
          'role_id' => ['required'],
      ]);

      //Hash password
      $formFields['password'] = bcrypt($formFields['password']);

      //Get Role id
      $formFields['role_id'] = Role::where('name',$formFields['role_id'])->pluck('id')->toArray()[0];
      $formFields['active'] = 1;

      //Create user
      $user = User::create($formFields);

      $token = $user->createToken('myapptoken')->plainTextToken;

      $response = [
        'user' => $user,
        'token' => $token
      ];

      return response()->json($response);
  }

  // Login User
  public function login(Request $request) {
    $formFields = $request->validate([
        'email' => ['required'],
        'password' => ['required']
    ]);

    //Check email
    $user = User::where('email',$formFields['email'])->first();

    //Check password
    if(!$user || !Hash::check($formFields['password'], $user->password)){
      $response = [
        'message' => 'Bad credentials'
      ];
    }else {
      $token = $user->createToken('myapptoken')->plainTextToken;

      $response = [
        'user' => $user,
        'token' => $token
      ];
    }

    return response()->json($response);
  }

  //Logout User
  public function logout() {
    auth()->user()->tokens()->delete();

    return response()->json(['message' => 'Logged out']);
  }
}
