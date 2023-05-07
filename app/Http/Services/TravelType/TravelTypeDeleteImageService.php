<?php

namespace App\Http\Services\TravelType;

class TravelTypeDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
