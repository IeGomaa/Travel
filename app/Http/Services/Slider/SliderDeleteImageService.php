<?php

namespace App\Http\Services\Slider;

class SliderDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
