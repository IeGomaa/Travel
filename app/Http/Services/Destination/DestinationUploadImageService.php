<?php

namespace App\Http\Services\Destination;

class DestinationUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_destination.' . $file->extension();
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/destination/image'), $name);
        return $name;
    }
}
