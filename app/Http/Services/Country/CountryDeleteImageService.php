<?php

namespace App\Http\Services\Country;

class CountryDeleteImageService
{
    private function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
