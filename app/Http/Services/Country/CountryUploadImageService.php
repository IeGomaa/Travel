<?php

namespace App\Http\Services\Country;

class CountryUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_country.' . $file->extension();
        if (!is_null($oldImage)) {
            (!file_exists(public_path($oldImage))) ?: unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/country/image'), $name);
        return $name;
    }
}
