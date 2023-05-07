<?php

namespace App\Http\Services\Destination;

class DestinationCheckImageService
{
    private $service;
    public function __construct(DestinationUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($image, $destination): string
    {
        if (!is_null($image)) {
            $imageName = $this->service->uploadImage($image, $destination->image);
        } else {
            $imageName = $destination->getRawOriginal('image');
        }
        return $imageName;
    }
}
