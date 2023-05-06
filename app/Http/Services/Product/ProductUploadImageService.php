<?php

namespace App\Http\Services\Product;

class ProductUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_product.' . $file->extension();
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/product/image'), $name);
        return $name;
    }
}
