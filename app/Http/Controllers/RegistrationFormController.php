<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationFormRequest;
use App\Services\RegistrationUsersService;
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

    public function registration(RegistrationFormRequest $request, RegistrationUsersService $service)
    {
        $request->validated();

        $rs = $service->registrate($service->requestToArray($request));

        return ($rs) ? response()->json(['status' => 1, 'message' => 'You was successfully registered'])
            : response()->json(['status' => 0, 'message' => 'You been already registered']);
    }
}
