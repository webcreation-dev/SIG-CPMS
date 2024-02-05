<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ValidatorFormController extends Controller
{
    public function checkEmailUnique($email)
    {
        $isUnique = User::where('email', $email)->doesntExist();

        return response()->json(['isUnique' => $isUnique]);
    }
}
