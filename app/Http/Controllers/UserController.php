<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|max:255',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            // Log the user in
            auth()->login($user);
            // Redirect to the dashboard
            return redirect()->route('home');
        }
    }
    public function login(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'login' => 'required',
        'password' => 'required'
    ]);

    // Check if the user is logging in with their email or username
    $field = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    // Attempt to log the user in
    if (Auth::attempt([$field => $request->login, 'password' => $request->password])) {
        // If successful, redirect to the intended location
        return redirect()->intended(route('home'));
    } else {
        // If unsuccessful, redirect back to the login with form data
        return redirect()->back()->withInput($request->only('login'));
    }
}

}
