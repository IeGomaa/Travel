<?php

namespace App\Http\Interfaces\Admin;

interface AdminCustomerInterface
{
    public function index();
    public function delete($request, $service);
}
