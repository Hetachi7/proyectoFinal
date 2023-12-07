<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /** 
     * 
     *  @param Request $request
     *  @return void
     */
   

   
  /**
  * Login by user
  *
  * @param Request $request
  * @return void
  */
 public function login(Request $request): JsonResponse
 {
   /*if (!Auth::attempt($request->only('email', 'password'))) {
     return response()
       ->json(['message' => 'Invalid email or password'], 401);
   }
*/
   $user = User::where('email', $request['email'])->firstOrFail();

   $token = $user->createToken('auth_token')->plainTextToken;

   return response()
     ->json([
       'message'      => 'Hi!' . $user->name,
       'access_token' => $token,
       'token_type'   => 'Bearer',
       'user'         => $user,
     ]);
 }

}
