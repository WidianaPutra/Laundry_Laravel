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
    public static function setUserCookie($id, $username, $email)
    {
        self::setCookie('id', $id);
        self::setCookie('username', $username);
        self::setCookie('email', $email);
    }
    public static function CheckCookie()
    {
        if (self::getCookie('user_id') && self::getCookie('username') && self::getCookie('email')) {
            return true;
        }
        return false;
    }

    public static function removeUserCookie()
    {
        self::removeCookie('id');
        self::removeCookie('username');
        self::removeCookie('email');
    }
}
