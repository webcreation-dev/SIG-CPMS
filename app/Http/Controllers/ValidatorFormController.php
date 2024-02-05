<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $isCredentialsValid = ($credentials['email'] == "admin@sirh.bj" ) ? true : false;

        return response()->json(['isCredentialsValid' => $isCredentialsValid]);
    }
}
