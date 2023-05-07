<?php

namespace App\Http\Traits;

trait DestinationTrait
{
    private function getDestinations()
    {
        return $this->destinationModel::with('country')->get();
    }

    private function findDestinationById($id)
    {
        return $this->destinationModel::find($id);
    }
}
