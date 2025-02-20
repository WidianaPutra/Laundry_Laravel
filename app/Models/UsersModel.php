<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password', 'address', 'phone_number', 'user_img'];


    public static function createData($datas)
    {
        self::create($datas);

        $data = self::where('email', '=', $datas['email'])->get();

        if (count($data) > 0) {
            return ['status' => 200, 'data' => $data];
        }
        return ['status' => 400, 'error' => "Couldn't Create User Data"];
    }
}
