<?php

namespace App\Http\Services\Tour\ImageService;

class TourUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_tour.' . $file->extension();
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/tour/image'), $name);
        return $name;
    }
}
