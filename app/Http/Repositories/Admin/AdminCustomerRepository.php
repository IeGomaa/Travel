<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminCustomerInterface;
use App\Http\Traits\CustomerTrait;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCustomerRepository implements AdminCustomerInterface
{
    private $customerModel;
    use CustomerTrait;
    public function __construct(Customer $customer)
    {
        $this->customerModel = $customer;
    }

    public function index()
    {
        $customers = $this->getCustomers();
        return view('admin.pages.customer.index', compact('customers'));
    }

    public function delete($request, $service): RedirectResponse
    {
        $customer = $this->findCustomerById($request->id);
        $service->deleteImageInLocal($customer->image);
        $customer->delete();
        Alert::toast('Customer Was Deleted Successfully', 'success');
        return back();
    }
}
