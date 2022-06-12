<?php

namespace App\Adapters;

use App\Helpers\LogStorage;
use App\Helpers\UserStorage;

class RegistrationAdapter
{
    private UserStorage $userStorage;
    private LogStorage $logStorage;

    public function __construct(UserStorage $userStorage, LogStorage $logStorage)
    {
        $this->userStorage = $userStorage;
        $this->logStorage = $logStorage;
    }

    /**
     * return collection of registered users
     */
    public function getRegisteredUsers()
    {
        return $this->userStorage->getUsers();
    }

    public function logRegisteredUser($data)
    {
        $this->logStorage->logRegisteredUser($data);
    }
}
