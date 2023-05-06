<?php

namespace App\Http\Services\Slider;

class SliderCheckImageService
{
    private $service;
    public function __construct(SliderUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($image, $slider): string
    {
        if (!is_null($image)) {
            $imageName = $this->service->uploadImage($image, $slider->image);
        } else {
            $imageName = $slider->getRawOriginal('image');
        }
        return $imageName;
    }
}
