<?php

namespace App\Http\Services\Customer;

class CustomerCheckImageService
{
    private $service;
    public function __construct(CustomerUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($image, $customer): string
    {
        if (!is_null($image)) {
            $imageName = $this->service->uploadImage($image, $customer->image);
        } else {
            $imageName = $customer->getRawOriginal('image');
        }
        return $imageName;
    }
}
