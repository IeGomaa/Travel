<?php

namespace App\Http\Services\Destination;

class DestinationDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
