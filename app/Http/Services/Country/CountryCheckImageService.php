<?php

namespace App\Http\Services\Country;

class CountryCheckImageService
{
    private $service;
    public function __construct(CountryUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($image, $country): string
    {
        if (!is_null($image)) {
            $imageName = $this->service->uploadImage($image, $country->image);
        } else {
            $imageName = $country->getRawOriginal('image');
        }
        return $imageName;
    }
}
