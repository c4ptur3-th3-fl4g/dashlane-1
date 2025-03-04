<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CredentialsController extends Controller
{
    function showCredentials(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.Credentials', ['email' => $email, 'name' => $name]);
    }
}
