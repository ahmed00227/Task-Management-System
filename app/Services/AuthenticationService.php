<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function login($request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            return true;
        else
            return false;
    }
    public function signup($request)
    {

    }
}
