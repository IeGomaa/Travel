<?php

namespace App\Http\Services\Tour\IconService;

class TourDeleteIconService
{
    public function deleteIconInLocal($name)
    {
        unlink(public_path($name));

    }
}
