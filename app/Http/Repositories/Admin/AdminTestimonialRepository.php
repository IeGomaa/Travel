<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminTestimonialInterface;
use App\Http\Traits\CustomerTrait;
use App\Http\Traits\TestimonialTrait;
use App\Models\Customer;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminTestimonialRepository implements AdminTestimonialInterface
{
    private $testimonialModel;
    private $customerModel;
    use TestimonialTrait, CustomerTrait;
    public function __construct(Testimonial $testimonial, Customer $customer)
    {
        $this->testimonialModel = $testimonial;
        $this->customerModel = $customer;
    }

    public function index()
    {
        $testimonials = $this->getTestimonials();
        return view('admin.pages.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        $customers = $this->getCustomers();
        return view('admin.pages.testimonial.create', compact('customers'));
    }

    public function store($request)
    {
        $this->testimonialModel::create([
            'rate' => $request->rate,
            'description' => $request->description,
            'customer_id' => $request->customer_id
        ]);
        Alert::toast('Testimonial Was Created Successfully', 'success');
        return redirect(route('admin.testimonial.index'));
    }

    public function delete($request): RedirectResponse
    {
        $this->findTestimonialById($request->id)->delete();
        Alert::toast('Testimonial Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $testimonial = $this->findTestimonialById($request->id);
        $customers = $this->getCustomers();
        return view('admin.pages.testimonial.edit', compact('testimonial', 'customers'));
    }

    public function update($request)
    {
        $this->findTestimonialById($request->id)->update([
            'rate' => $request->rate,
            'description' => $request->description,
            'customer_id' => $request->customer_id
        ]);
        Alert::toast('Testimonial Was Updated Successfully', 'success');
        return redirect(route('admin.testimonial.index'));
    }
}
