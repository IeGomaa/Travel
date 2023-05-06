<?php

namespace App\Http\Services\Slider;

class SliderUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_slider.' . $file->extension();
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/slider/image'), $name);
        return $name;
    }
}
