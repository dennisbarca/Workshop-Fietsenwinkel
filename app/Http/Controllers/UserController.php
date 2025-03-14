<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        $user = User::firstOrNew(['username' => 'admin']);
        if (!$user->exists) {
            $user->password_hash = bcrypt('admin123');
            $user->userrole = 'admin';
            $user->save();
        }
    }

    // Display a listing of the users.
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }
}
