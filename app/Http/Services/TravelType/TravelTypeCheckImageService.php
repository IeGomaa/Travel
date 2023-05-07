<?php

namespace App\Http\Services\TravelType;

class TravelTypeCheckImageService
{
    private $service;
    public function __construct(TravelTypeUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($svg, $travelType): string
    {
        if (!is_null($svg)) {
            $svgName = $this->service->uploadImage($svg, $travelType->svg);
        } else {
            $svgName = $travelType->getRawOriginal('svg');
        }
        return $svgName;
    }
}
