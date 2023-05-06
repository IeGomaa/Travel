<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminCustomerInterface;
use App\Http\Requests\Admin\Customer\CheckCustomerIdRequest;
use App\Http\Services\Customer\CustomerDeleteImageService;

class AdminCustomerController extends Controller
{
    private $customerInterface;
    public function __construct(AdminCustomerInterface $customerInterface)
    {
        $this->customerInterface = $customerInterface;
    }

    public function index()
    {
        return $this->customerInterface->index();
    }

    public function delete(CheckCustomerIdRequest $request, CustomerDeleteImageService $service)
    {
        return $this->customerInterface->delete($request, $service);
    }
}
