<?php

namespace App\Http\Traits;

trait ProductTrait
{
    private function getProducts()
    {
        return $this->productModel::get();
    }

    private function findProductById($id)
    {
        return $this->productModel::find($id);
    }
}
