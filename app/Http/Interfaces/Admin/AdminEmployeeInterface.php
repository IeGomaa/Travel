<?php

namespace App\Http\Interfaces\Admin;

interface AdminEmployeeInterface
{
    public function index();
    public function create();
    public function store($request, $service);
    public function delete($request, $service);
    public function edit($request);
    public function update($request, $service);
}
