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
            // return response()->json([
            //     'message' => 'Validation errors',
            //     'data'    => $validator->errors(),
            // ], 422);
            return send_error('Validation error', $validator->errors(), 422);
            try{
                $user =   User::create([
                        'name'          => $request->name,
                        'email'         => $request->email,
                        'password'      => Hash::make($request->password),
                    ]);

                    $data = [
                        'name' => $user->name,
                        'email' => $user->email
                    ];

                    return send_response('User Registration Success', $data);

                }catch(Exception $e){
                   return send_error($e->getMessage(), $e->getCode());
                }

        // return $request->all();
    }
}
