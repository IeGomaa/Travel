<?php

namespace App\Http\Interfaces\Admin;

interface AdminTestimonialInterface
{
    public function index();
    public function create();
    public function store($request);
    public function delete($request);
    public function edit($request);
    public function update($request);
}
