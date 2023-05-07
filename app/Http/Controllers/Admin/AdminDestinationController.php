<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminDestinationInterface;
use App\Http\Requests\Admin\Destination\CheckDestinationIdRequest;
use App\Http\Requests\Admin\Destination\CreateDestinationRequest;
use App\Http\Requests\Admin\Destination\UpdateDestinationRequest;
use App\Http\Services\Destination\DestinationCheckImageService;
use App\Http\Services\Destination\DestinationDeleteImageService;
use App\Http\Services\Destination\DestinationUploadImageService;

class AdminDestinationController extends Controller
{
    private $destinationInterface;
    public function __construct(AdmindestinationInterface $interface)
    {
        $this->destinationInterface = $interface;
    }

    public function index()
    {
        return $this->destinationInterface->index();
    }

    public function create()
    {
        return $this->destinationInterface->create();
    }

    public function store(CreateDestinationRequest $request, DestinationUploadImageService $service)
    {
        return $this->destinationInterface->store($request, $service);
    }

    public function delete(CheckdestinationIdRequest $request, DestinationDeleteImageService $service)
    {
        return $this->destinationInterface->delete($request, $service);
    }

    public function edit(CheckdestinationIdRequest $request)
    {
        return $this->destinationInterface->edit($request);
    }

    public function update(UpdateDestinationRequest $request, DestinationCheckImageService $service)
    {
        return $this->destinationInterface->update($request, $service);
    }
}
