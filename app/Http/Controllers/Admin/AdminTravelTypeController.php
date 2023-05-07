<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminTravelTypeInterface;
use App\Http\Requests\Admin\TravelType\CheckTravelTypeIdRequest;
use App\Http\Requests\Admin\TravelType\CreateTravelTypeRequest;
use App\Http\Requests\Admin\TravelType\UpdateTravelTypeRequest;
use App\Http\Services\TravelType\TravelTypeCheckImageService;
use App\Http\Services\TravelType\TravelTypeDeleteImageService;
use App\Http\Services\TravelType\TravelTypeUploadImageService;

class AdminTravelTypeController extends Controller
{
    private $travelInterface;
    public function __construct(AdminTravelTypeInterface $interface)
    {
        $this->travelInterface = $interface;
    }

    public function index()
    {
        return $this->travelInterface->index();
    }

    public function create()
    {
        return $this->travelInterface->create();
    }

    public function store(CreateTravelTypeRequest $request, TravelTypeUploadImageService $service)
    {
        return $this->travelInterface->store($request, $service);
    }

    public function delete(CheckTravelTypeIdRequest $request, TravelTypeDeleteImageService $service)
    {
        return $this->travelInterface->delete($request, $service);
    }

    public function edit(CheckTravelTypeIdRequest $request)
    {
        return $this->travelInterface->edit($request);
    }

    public function update(UpdateTravelTypeRequest $request, TravelTypeCheckImageService $service)
    {
        return $this->travelInterface->update($request, $service);
    }
}
