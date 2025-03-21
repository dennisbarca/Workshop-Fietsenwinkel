<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:8',
            'userrole' => 'required|string|in:customer,admin', // Add validation for userrole
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password); // Use 'password' instead of 'password_hash'
        $user->userrole = $request->userrole; // Set the userrole
        $user->save();

        return response()->json(['message' => 'User registered successfully'], 201);
    }

    // Login a user
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('page.home');
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    // Logout a user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logged out successfully'], 200);
    }

    // Views

    public function registerView()
    {
        if (Auth::check()) {
            return redirect()->route('page.home'); // Replace 'default.page' with your default route name
        }
        return view('auth.signup');
    }

    public function loginView()
    {
        if (Auth::check()) {
            return redirect()->route('page.home'); // Replace 'default.page' with your default route name
        }
        return view('auth.signin');
    }
}
