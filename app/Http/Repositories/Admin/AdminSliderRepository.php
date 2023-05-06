<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminSliderInterface;
use App\Http\Traits\SliderTrait;
use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSliderRepository implements AdminSliderInterface
{
    private $sliderModel;
    use SliderTrait;
    public function __construct(Slider $slider)
    {
        $this->sliderModel = $slider;
    }

    public function index()
    {
        $sliders = $this->getSliders();
        return view('admin.pages.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.pages.slider.create');
    }

    public function store($request, $service)
    {
        $image = $service->uploadImage($request->image);
        $this->sliderModel::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
        ]);
        Alert::toast('Slider Was Created Successfully', 'success');
        return redirect(route('admin.slider.index'));
    }

    public function delete($request, $service): RedirectResponse
    {
        $slider = $this->findSliderById($request->id);
        $service->deleteImageInLocal($slider->image);
        $slider->delete();
        Alert::toast('Slider Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $slider = $this->findSliderById($request->id);
        return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update($request, $service)
    {
        $slider = $this->findSliderById($request->id);
        $image = $service->checkImage($request->image, $slider);
        $slider->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image ?? $slider->image
        ]);
        Alert::toast('Slider Was Updated Successfully', 'success');
        return redirect(route('admin.slider.index'));
    }
}
