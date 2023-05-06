<?php

namespace App\Http\Services\Product;

class ProductCheckImageService
{
    private $service;
    public function __construct(ProductUploadImageService $service)
    {
        $this->service = $service;
    }

    public function checkImage($image, $product): string
    {
        if (!is_null($image)) {
            $imageName = $this->service->uploadImage($image, $product->image);
        } else {
            $imageName = $product->getRawOriginal('image');
        }
        return $imageName;
    }
}
