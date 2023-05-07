<?php

namespace App\Http\Services\Tour\ImageService;

class TourDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
