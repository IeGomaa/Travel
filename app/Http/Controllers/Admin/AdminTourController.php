<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminTourInterface;
use App\Http\Requests\Admin\Tour\CheckTourIdRequest;
use App\Http\Requests\Admin\Tour\CreateTourRequest;
use App\Http\Requests\Admin\Tour\UpdateTourRequest;
use App\Http\Services\Tour\IconService\TourCheckIconService;
use App\Http\Services\Tour\IconService\TourDeleteIconService;
use App\Http\Services\Tour\IconService\TourUploadIconService;
use App\Http\Services\Tour\ImageService\TourCheckImageService;
use App\Http\Services\Tour\ImageService\TourDeleteImageService;
use App\Http\Services\Tour\ImageService\TourUploadImageService;

class AdminTourController extends Controller
{
    private $tourInterface;
    public function __construct(AdmintourInterface $interface)
    {
        $this->tourInterface = $interface;
    }

    public function index()
    {
        return $this->tourInterface->index();
    }

    public function create()
    {
        return $this->tourInterface->create();
    }

    public function store(CreateTourRequest $request, TourUploadImageService $imageService, TourUploadIconService $iconService)
    {
        return $this->tourInterface->store($request, $imageService, $iconService);
    }

    public function delete(CheckTourIdRequest $request, TourDeleteImageService $imageService, TourDeleteIconService $iconService)
    {
        return $this->tourInterface->delete($request, $imageService, $iconService);
    }

    public function edit(CheckTourIdRequest $request)
    {
        return $this->tourInterface->edit($request);
    }

    public function update(UpdateTourRequest $request, TourCheckImageService $imageService, TourCheckIconService $iconService)
    {
        return $this->tourInterface->update($request, $imageService, $iconService);
    }
}
