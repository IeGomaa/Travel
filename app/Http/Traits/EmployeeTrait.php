<?php

namespace App\Http\Traits;

trait EmployeeTrait
{
    private function getEmployees()
    {
        return $this->employeeModel::get();
    }

    private function findEmployeeById($id)
    {
        return $this->employeeModel::find($id);
    }
}
