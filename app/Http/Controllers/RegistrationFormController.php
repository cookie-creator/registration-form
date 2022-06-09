<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationFormRequest;
use App\Http\Resources\RegistrationFormResource;
use Illuminate\Http\Request;

class RegistrationFormController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('registration.index');
    }

    public function registration(RegistrationFormRequest $request)
    {
        return RegistrationFormResource::collection(['success']);
    }
}
