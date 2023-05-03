<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminHomeInterface;

class AdminHomeController extends Controller
{
    private $homeInterface;
    public function __construct(AdminHomeInterface $interface)
    {
        $this->homeInterface = $interface;
    }

    public function index()
    {
        return $this->homeInterface->index();
    }
}
