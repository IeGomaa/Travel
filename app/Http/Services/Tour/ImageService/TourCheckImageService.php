<?php

namespace App\Http\Services\Tour\ImageService;

class TourCheckImageService
{
    private $service;
    public function __construct(TourUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($image, $tour): string
    {
        if (!is_null($image)) {
            $imageName = $this->service->uploadImage($image, $tour->image);
        } else {
            $imageName = $tour->getRawOriginal('image');
        }
        return $imageName;
    }
}
