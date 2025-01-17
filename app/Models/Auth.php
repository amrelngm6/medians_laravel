<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth as AuthClass;


class Auth extends AuthClass
{

    /**
     * Return the User current session 
     * based on the guard name
     */
    public static function user()
    {

        if (AuthClass::guard('superadmin')->check())
        {
            return AuthClass::guard('superadmin')->user();
        }

        if (AuthClass::guard('staff')->check())
        {
            return AuthClass::guard('staff')->user();
        }
    }

    /**
     * Return the Guard name of 
     * the User current session 
     */
    public static function guardName()
    {

        if (AuthClass::guard('superadmin')->check())
        {
            return 'superadmin';
        }
        
        if (AuthClass::guard('staff')->check())
        {
            return 'staff';
        }
    }
}