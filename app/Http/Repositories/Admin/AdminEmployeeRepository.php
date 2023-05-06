<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminEmployeeInterface;
use App\Http\Traits\EmployeeTrait;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminEmployeeRepository implements AdminEmployeeInterface
{
    private $employeeModel;
    use EmployeeTrait;
    public function __construct(Employee $employee)
    {
        $this->employeeModel = $employee;
    }

    public function index()
    {
        $employees = $this->getEmployees();
        return view('admin.pages.employee.index', compact('employees'));
    }

    public function create()
    {
        return view('admin.pages.employee.create');
    }

    public function store($request, $service)
    {
        $image = $service->uploadImage($request->image);
        $this->employeeModel::create([
            'name' => $request->name,
            'image' => $image,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'position' => $request->position,
            'biography' => $request->biography
        ]);
        Alert::toast('Employee Was Created Successfully', 'success');
        return redirect(route('admin.employee.index'));
    }

    public function delete($request, $service): RedirectResponse
    {
        $employee = $this->findEmployeeById($request->id);
        $service->deleteImageInLocal($employee->image);
        $employee->delete();
        Alert::toast('Employee Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $employee = $this->findEmployeeById($request->id);
        return view('admin.pages.employee.edit', compact('employee'));
    }

    public function update($request, $service)
    {
        $employee = $this->findEmployeeById($request->id);
        $image = $service->checkImage($request->image, $employee);
        $employee->update([
            'name' => $request->name,
            'image' => $image ?? $employee->image,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'position' => $request->position,
            'biography' => $request->biography
        ]);
        Alert::toast('Employee Was Updated Successfully', 'success');
        return redirect(route('admin.employee.index'));
    }
}
