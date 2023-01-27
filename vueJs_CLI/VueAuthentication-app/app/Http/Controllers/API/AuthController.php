<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {

    }

    public function register(Request $request)
    {  // return response()->json(['test' =>'Test Json Data']);

        $validator =  Validator::make($request->all(),[
            "name" => "required|min:4",
            "email" => "required|email|unique:users",
            "password" => "required|min:4"
        ]);

        if($validator->fails())
            return response()->json([
                'message' => 'Validation errors',
                'data'    => $validator->errors(),
            ], 422);

            try{
              $user =   User::create([
                    'name'          => $request->name,
                    'email'         => $request->email,
                    'password'      => Hash::make($request->password),
                ]);

                return response()->json([
                    'status'  => true,
                    'message' => 'User Registration Done Successfully',
                    'name'    => $user->name,

                 ]);

                }catch(Exception $e){
                    return response()->json([
                        'message' => $e->getMessage()
                    ], $e->getMessage());
                }

        // return $request->all();
    }
}
