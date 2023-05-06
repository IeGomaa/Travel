<?php

namespace App\Http\Services\Employee;

class EmployeeCheckImageService
{
    private $service;
    public function __construct(EmployeeUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($image, $employee): string
    {
        if (!is_null($image)) {
            $imageName = $this->service->uploadImage($image, $employee->image);
        } else {
            $imageName = $employee->getRawOriginal('image');
        }
        return $imageName;
    }
}
