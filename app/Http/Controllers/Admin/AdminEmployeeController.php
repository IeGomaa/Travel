<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminEmployeeInterface;
use App\Http\Requests\Admin\Employee\CheckEmployeeIdRequest;
use App\Http\Requests\Admin\Employee\CreateEmployeeRequest;
use App\Http\Requests\Admin\Employee\UpdateEmployeeRequest;
use App\Http\Services\Employee\EmployeeCheckImageService;
use App\Http\Services\Employee\EmployeeDeleteImageService;
use App\Http\Services\Employee\EmployeeUploadImageService;

class AdminEmployeeController extends Controller
{
    private $employeeInterface;
    public function __construct(AdminemployeeInterface $interface)
    {
        $this->employeeInterface = $interface;
    }

    public function index()
    {
        return $this->employeeInterface->index();
    }

    public function create()
    {
        return $this->employeeInterface->create();
    }

    public function store(CreateEmployeeRequest $request, EmployeeUploadImageService $service)
    {
        return $this->employeeInterface->store($request, $service);
    }

    public function delete(CheckEmployeeIdRequest $request, EmployeeDeleteImageService $service)
    {
        return $this->employeeInterface->delete($request, $service);
    }

    public function edit(CheckEmployeeIdRequest $request)
    {
        return $this->employeeInterface->edit($request);
    }

    public function update(UpdateEmployeeRequest $request, EmployeeCheckImageService $service)
    {
        return $this->employeeInterface->update($request, $service);
    }
}
