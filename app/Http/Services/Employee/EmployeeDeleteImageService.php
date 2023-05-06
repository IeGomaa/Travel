<?php

namespace App\Http\Services\Employee;

class EmployeeDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
