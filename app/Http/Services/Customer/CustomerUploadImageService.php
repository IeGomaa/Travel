<?php

namespace App\Http\Services\Customer;

class CustomerUploadImageService
{
    public function uploadImage($file, $oldImage = null): string
    {
        $name = time() . '_customer.' . $file->extension();
        if (!is_null($oldImage)) {
            unlink(public_path($oldImage));
        }
        $file->move(public_path('uploaded/customer/image'), $name);
        return $name;
    }
}
