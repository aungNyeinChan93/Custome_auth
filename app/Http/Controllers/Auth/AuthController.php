<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|string",
            "password" => "required|string",
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }
        if ($request->user()->role == "admin") {
            return to_route("admin.dashboard");
        } else {
            return to_route("user.dashboard");

        }
    }

    public function registerPage()
    {
        return view("auth.register");
    }

    public function register(RegisterRequest $registerRequest)
    {
        User::create([
            "name" => $registerRequest->name,
            "email" => $registerRequest->email,
            "password" => $registerRequest->password,
        ]);
        return to_route("login");
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route("login");
    }
}
