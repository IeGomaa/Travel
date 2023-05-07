<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminTestimonialInterface;
use App\Http\Requests\Admin\Testimonial\CreateTestimonialRequest;
use App\Http\Requests\Admin\Testimonial\CheckTestimonialIdRequest;
use App\Http\Requests\Admin\Testimonial\UpdateTestimonialRequest;

class AdminTestimonialController extends Controller
{
    private $testimonialInterface;
    public function __construct(AdmintestimonialInterface $testimonialInterface)
    {
        $this->testimonialInterface = $testimonialInterface;
    }

    public function index()
    {
        return $this->testimonialInterface->index();
    }

    public function create()
    {
        return $this->testimonialInterface->create();
    }

    public function store(CreateTestimonialRequest $request)
    {
        return $this->testimonialInterface->store($request);
    }

    public function delete(ChecktestimonialIdRequest $request)
    {
        return $this->testimonialInterface->delete($request);
    }

    public function edit(ChecktestimonialIdRequest $request)
    {
        return $this->testimonialInterface->edit($request);
    }

    public function update(UpdateTestimonialRequest $request)
    {
        return $this->testimonialInterface->update($request);
    }
}
