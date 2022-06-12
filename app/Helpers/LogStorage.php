<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class LogStorage
{
    public function logRegisteredUser($user)
    {
        $usersCollection = $this->getLogRegisteredUsers();

        $usersCollection->push($user);

        $this->putLogRegisteredUsers($usersCollection->all());
    }

    private function getLogRegisteredUsers()
    {
        return collect(json_decode(Storage::disk('local')->get('/upload/json/registered.json')));
    }

    private function putLogRegisteredUsers($array)
    {
        Storage::disk('local')->put('/upload/json/registered.json',json_encode($array));
    }
}
