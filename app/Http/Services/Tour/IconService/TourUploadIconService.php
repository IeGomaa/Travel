<?php

namespace App\Http\Services\Tour\IconService;

class TourUploadIconService
{
    public function uploadIcon($file, $oldIcon = null): string
    {
        $name = time() . '_tour.' . $file->extension();
        if (!is_null($oldIcon)) {
            unlink(public_path($oldIcon));
        }
        $file->move(public_path('uploaded/tour/icon'), $name);
        return $name;
    }
}
