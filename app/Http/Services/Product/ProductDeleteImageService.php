<?php

namespace App\Http\Services\Product;

class ProductDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
