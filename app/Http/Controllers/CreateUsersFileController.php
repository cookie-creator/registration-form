<?php

namespace App\Http\Controllers;

use App\Helpers\UserStorage;
use Illuminate\Http\Request;

class CreateUsersFileController extends Controller
{
    public function __construct()
    {

    }

    public function index(UserStorage $storage)
    {
        $data = [
            ['id' => 1, 'firstname' => 'John', 'secondname' => 'Doe', 'email' => 'john@gmail.com'],
            ['id' => 2, 'firstname' => 'Jimmy', 'secondname' => 'Davis', 'email' => 'jimmy@gmail.com'],
            ['id' => 3, 'firstname' => 'Snow', 'secondname' => 'White', 'email' => 'snow@gmail.com'],
            ['id' => 4, 'firstname' => 'Jeffrey', 'secondname' => 'Way', 'email' => 'jeffrey@gmail.com'],
            ['id' => 5, 'firstname' => 'Sean', 'secondname' => 'Bean', 'email' => 'sean@gmail.com'],
        ];

        $storage->putUsers($data);
    }
}
