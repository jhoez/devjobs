<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function store(Request $request, User $user)
    {
        return view('auth.passwords.email');
    }
}
