<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminSliderInterface;
use App\Http\Requests\Admin\Slider\CheckSliderIdRequest;
use App\Http\Requests\Admin\Slider\CreateSliderRequest;
use App\Http\Requests\Admin\Slider\UpdateSliderRequest;
use App\Http\Services\Slider\SliderCheckImageService;
use App\Http\Services\Slider\SliderDeleteImageService;
use App\Http\Services\Slider\SliderUploadImageService;

class AdminSliderController extends Controller
{
    private $sliderInterface;
    public function __construct(AdminSliderInterface $sliderInterface)
    {
        $this->sliderInterface = $sliderInterface;
    }

    public function index()
    {
        return $this->sliderInterface->index();
    }

    public function create()
    {
        return $this->sliderInterface->create();
    }

    public function store(CreateSliderRequest $request, SliderUploadImageService $service)
    {
        return $this->sliderInterface->store($request, $service);
    }

    public function delete(CheckSliderIdRequest $request, SliderDeleteImageService $service)
    {
        return $this->sliderInterface->delete($request, $service);
    }

    public function edit(CheckSliderIdRequest $request)
    {
        return $this->sliderInterface->edit($request);
    }

    public function update(UpdateSliderRequest $request, SliderCheckImageService $service)
    {
        return $this->sliderInterface->update($request, $service);
    }
}
