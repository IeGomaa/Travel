<?php

namespace App\Http\Interfaces\Admin;

interface UserInterface
{
    public function index();
    public function create();
    public function store($request);
    public function delete($request);
    public function edit($request);
    public function update($request);
}
