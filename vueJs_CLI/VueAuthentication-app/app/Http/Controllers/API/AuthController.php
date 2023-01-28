<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $validator =  Validator::make($request->all(),[
            "email" => "required",
            "password" => "required|min:4"
        ]);

        if($validator->fails())
        return send_error('Validation error', $validator->errors(), 422);

        $credentials = $request->only('email', 'password');
    //    if(Auth::attempt(['email' => $email, 'password' => $password]));
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $data['name'] = $user->name;
            // $data['access_token'] = $user->createToken('accessToken')->accessToken;
            $data['access_token'] = $user->createToken('accessToken')->plainTextToken;

            return send_response('Login Success', $data);

        }else {
            return send_error('You are unAuthorize', '', 401);
        }

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

    public function logout(Request $request){
    //    return $request->bearerToken();
        return auth()->user()->token();
    }
    public function show(){

    }
}
