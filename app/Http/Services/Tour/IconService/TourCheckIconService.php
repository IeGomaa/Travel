<?php

namespace App\Http\Services\Tour\IconService;

class TourCheckIconService
{
    private $service;
    public function __construct(TourUploadIconService $service)
    {
        $this->service = $service;
    }

    public function checkIcon($icon, $tour): string
    {
        if (!is_null($icon)) {
            $iconName = $this->service->uploadIcon($icon, $tour->icon);
        } else {
            $iconName = $tour->getRawOriginal('icon');
        }
        return $iconName;
    }
}
