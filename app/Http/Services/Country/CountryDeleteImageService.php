<?php

namespace App\Http\Services\Country;

class CountryDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
