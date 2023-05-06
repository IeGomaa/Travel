<?php

namespace App\Http\Traits;

trait FaqTrait
{
    private function getFaqs()
    {
        return $this->faqModel::get();
    }

    private function findFaqById($id)
    {
        return $this->faqModel::find($id);
    }
}
