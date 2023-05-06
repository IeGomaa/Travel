<?php

namespace App\Http\Services\Employee;

class EmployeeUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_employee.' . $file->extension();
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/employee/image'), $name);
        return $name;
    }
}
