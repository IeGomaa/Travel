<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\UserInterface;
use App\Http\Requests\Admin\User\CheckUserIdRequest;
use App\Http\Requests\Admin\User\CreateUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;

class UserController extends Controller
{
    private $userInterface;

    public function __construct(UserInterface $interface)
    {
        $this->userInterface = $interface;
    }

    public function index()
    {
        return $this->userInterface->index();
    }

    public function create()
    {
        return $this->userInterface->create();
    }

    public function store(CreateUserRequest $request)
    {
        return $this->userInterface->store($request);
    }

    public function delete(CheckUserIdRequest $request)
    {
        return $this->userInterface->delete($request);
    }

    public function edit(CheckUserIdRequest $request)
    {
        return $this->userInterface->edit($request);
    }

    public function update(UpdateUserRequest $request)
    {
        return $this->userInterface->update($request);
    }
}
