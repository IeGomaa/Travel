<?php

namespace App\Http\Traits;

trait SliderTrait
{
    private function getSliders()
    {
        return $this->sliderModel::get();
    }

    private function findSliderById($id)
    {
        return $this->sliderModel::find($id);
    }
}
