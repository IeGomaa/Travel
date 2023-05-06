<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminContactInterface;
use App\Http\Requests\Admin\Contact\CheckContactIdRequest;

class AdminContactController extends Controller
{
    private $contactInterface;
    public function __construct(AdminContactInterface $contactInterface)
    {
        $this->contactInterface = $contactInterface;
    }

    public function index()
    {
        return $this->contactInterface->index();
    }

    public function delete(CheckContactIdRequest $request)
    {
        return $this->contactInterface->delete($request);
    }
}
