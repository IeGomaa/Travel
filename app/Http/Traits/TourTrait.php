<?php

namespace App\Http\Traits;

trait TourTrait
{
    private function getTours()
    {
        return $this->tourModel::with(['country', 'travel'])->get();
    }

    private function findTourById($id)
    {
        return $this->tourModel::find($id);
    }
}
