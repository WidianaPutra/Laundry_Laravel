<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class CookieModel extends Model
{
    public static function getCookie($key)
    {
        return Cookie::get($key);
    }
    public static function setCookie($key, $value)
    {
        Cookie::queue(Cookie::make($key, $value, 60 * 24 * 10));
    }
    public static function removeCookie($key)
    {
        return Cookie::queue(Cookie::forget($key));
    }
    public static function setUserCookie($id, $username, $email, $role)
    {
        self::setCookie('user_id', $id);
        self::setCookie('username', $username);
        self::setCookie('email', $email);
        self::setCookie('role', $role);
    }
    public static function CheckCookie()
    {
        if (self::getCookie('user_id') && self::getCookie('username') && self::getCookie('email') && self::getCookie('role')) {
            return true;
        }
        return false;
    }

    public static function removeUserCookie()
    {
        self::removeCookie('user_id');
        self::removeCookie('username');
        self::removeCookie('email');
        self::removeCookie('role');
    }
}
