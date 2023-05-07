<?php

namespace App\Http\Services\TravelType;

class TravelTypeUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_travel.' . $file->extension();
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/travel/svg'), $name);
        return $name;
    }
}
