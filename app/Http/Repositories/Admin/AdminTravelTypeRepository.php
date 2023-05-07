<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminTravelTypeInterface;
use App\Http\Traits\TravelTypeTrait;
use App\Models\TravelType;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminTravelTypeRepository implements AdminTravelTypeInterface
{
    private $travelTypeModel;
    use TravelTypeTrait;
    public function __construct(TravelType $travelType)
    {
        $this->travelTypeModel = $travelType;
    }

    public function index()
    {
        $travelTypes = $this->getTravelTypes();
        return view('admin.pages.travel.index', compact('travelTypes'));
    }

    public function create()
    {
        return view('admin.pages.travel.create');
    }

    public function store($request, $service)
    {
        $svg = $service->uploadImage($request->svg);
        $this->travelTypeModel::create([
            'svg' => $svg,
            'type' => strtoupper($request->type)
        ]);
        Alert::toast('Travel Type Was Created Successfully', 'success');
        return redirect(route('admin.travel.index'));
    }

    public function delete($request, $service): RedirectResponse
    {
        $travelType = $this->findTravelTypeById($request->id);
        $service->deleteImageInLocal($travelType->svg);
        $travelType->delete();
        Alert::toast('Travel Type Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $travelType = $this->findTravelTypeById($request->id);
        return view('admin.pages.travel.edit', compact('travelType'));
    }

    public function update($request, $service)
    {
        $travelType = $this->findTravelTypeById($request->id);
        $svg = $service->checkImage($request->svg, $travelType);
        $travelType->update([
            'type' => $request->type,
            'svg' => $svg
        ]);
        Alert::toast('Travel Type Was Updated Successfully', 'success');
        return redirect(route('admin.travel.index'));
    }
}
