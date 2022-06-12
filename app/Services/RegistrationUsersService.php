<?php

namespace App\Services;

use App\Adapters\RegistrationAdapter;
use Illuminate\Support\Facades\Hash;

class RegistrationUsersService
{
    private RegistrationAdapter $adapter;

    public function __construct(RegistrationAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param array data
     */
    public function registrate($data)
    {
        $users = $this->adapter->getRegisteredUsers();

        if ($users->where('email', $data['email'])->count() == 0)
        {
            $this->adapter->logRegisteredUser($this->hashPassword($data));

            return true;
        } else {
            return false;
        }
    }

    public function requestToArray($request)
    {
        return [
            'firstname' => $request['firstname'],
            'secondname' => $request['secondname'],
            'email' => $request['email'],
            'password' => $request['password']
        ];
    }

    private function hashPassword($data)
    {
        $data['password'] = Hash::make($data['password']);

        return $data;
    }
}
