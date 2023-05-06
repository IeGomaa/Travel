<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminProductInterface;
use App\Http\Requests\Admin\Product\CheckProductIdRequest;
use App\Http\Requests\Admin\Product\CreateProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Http\Services\Product\ProductCheckImageService;
use App\Http\Services\Product\ProductDeleteImageService;
use App\Http\Services\Product\ProductUploadImageService;

class AdminProductController extends Controller
{
    private $productInterface;
    public function __construct(AdminProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    public function index()
    {
        return $this->productInterface->index();
    }

    public function create()
    {
        return $this->productInterface->create();
    }

    public function store(CreateProductRequest $request, ProductUploadImageService $service)
    {
        return $this->productInterface->store($request, $service);
    }

    public function delete(CheckProductIdRequest $request, ProductDeleteImageService $service)
    {
        return $this->productInterface->delete($request, $service);
    }

    public function edit(CheckProductIdRequest $request)
    {
        return $this->productInterface->edit($request);
    }

    public function update(UpdateProductRequest $request, ProductCheckImageService $service)
    {
        return $this->productInterface->update($request, $service);
    }
}
