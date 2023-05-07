<?php

namespace App\Http\Traits;

trait TestimonialTrait
{
    private function getTestimonials()
    {
        return $this->testimonialModel::get();
    }

    private function findTestimonialById($id)
    {
        return $this->testimonialModel::find($id);
    }
}
