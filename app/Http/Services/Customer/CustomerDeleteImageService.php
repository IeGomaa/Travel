<?php

namespace App\Http\Services\Customer;

class CustomerDeleteImageService
{
    public function deleteImageInLocal($name)
    {
        unlink(public_path($name));

    }
}
