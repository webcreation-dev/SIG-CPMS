<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ValidatorFormController extends Controller
{
    public function checkEmailUnique($email)
    {
        $isUnique = User::where('email', $email)->doesntExist();

        return response()->json(['isUnique' => $isUnique]);
    }

    public function checkLoginCredentials(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user) {

            if (Hash::check($credentials['password'], $user->password)) {

                return response()->json(['isCredentialsValid' => true]);
            }
        }

        return response()->json(['isCredentialsValid' => false]);
    }
}
