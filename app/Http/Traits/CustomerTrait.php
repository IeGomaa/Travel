<?php

namespace App\Http\Traits;

trait CustomerTrait
{
    private function getCustomers()
    {
        return $this->customerModel::get();
    }

    private function findCustomerById($id)
    {
        return $this->customerModel::find($id);
    }
}
