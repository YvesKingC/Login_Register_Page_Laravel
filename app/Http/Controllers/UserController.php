<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'username' => 'required|unique:webusers|max:255',
            'email' => 'required|unique:webusers|email|max:255',
            'password' => 'required|max:255',
        ]);

        // Create a new user
        $user = new User;
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Redirect the user after successful registration
        return redirect()->route('home');
    }
}
