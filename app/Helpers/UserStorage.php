<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class UserStorage
{
    public function __construct()
    {

    }

    public function getUsers()
    {
        return collect(json_decode(Storage::disk('local')->get('/upload/json/users.json')));
    }

    public function putUsers($data)
    {
        Storage::disk('local')->put('/upload/json/users.json',json_encode($data));
    }
}
