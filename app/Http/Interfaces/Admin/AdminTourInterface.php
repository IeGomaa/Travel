<?php

namespace App\Http\Interfaces\Admin;

interface AdminTourInterface
{
    public function index();
    public function create();
    public function store($request, $imageService, $iconService);
    public function delete($request, $imageService, $iconService);
    public function edit($request);
    public function update($request, $imageService, $iconService);
}
