<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(StorePostRequest $request)
    {
        $items =$request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required'
        ]);
        $users = User::create([
            'name' => $items['name'],
            'email' => $items['email'],
            'password' => $items['password'],
        ]);
        return response()->json([
            'user' => $users
        ]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'token' => $token,
        ], 200);
    }
}
