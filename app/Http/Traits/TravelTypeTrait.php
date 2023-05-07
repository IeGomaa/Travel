<?php

namespace App\Http\Traits;

trait TravelTypeTrait
{
    private function getTravelTypes()
    {
        return $this->travelTypeModel::get();
    }

    private function findTravelTypeById($id)
    {
        return $this->travelTypeModel::find($id);
    }
}
