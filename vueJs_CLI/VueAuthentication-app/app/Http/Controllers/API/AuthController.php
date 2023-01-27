<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return $request->all();
    }
}
