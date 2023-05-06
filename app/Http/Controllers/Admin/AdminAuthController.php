<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminAuthInterface;
use App\Http\Requests\Admin\Auth\AuthLoginRequest;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    private $authInterface;
    public function __construct(AdminAuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function login_page()
    {
        return $this->authInterface->login_page();
    }

    public function login(AuthLoginRequest $request)
    {
        return $this->authInterface->login($request);
    }

    public function logout()
    {
        return $this->authInterface->logout();
    }
}
