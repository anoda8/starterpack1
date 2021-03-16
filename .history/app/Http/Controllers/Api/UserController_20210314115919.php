<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            return response()->json(['error' => 'Kombinasi usernaem dan password tidak ditemukan']);
        }

        $user = User::find(Auth::user()->id);
        return response()->json(['success' => true, 'user' => $user, 'token' => $user->createToken('login-app-presensi')->plainTextToken]);
    }
}
