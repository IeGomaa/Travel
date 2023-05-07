<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminTourInterface;
use App\Http\Traits\CountryTrait;
use App\Http\Traits\TourTrait;
use App\Http\Traits\TravelTypeTrait;
use App\Models\Country;
use App\Models\Tour;
use App\Models\TravelType;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminTourRepository implements AdminTourInterface
{
    private $tourModel;
    private $countryModel;
    private $travelTypeModel;
    use TourTrait, CountryTrait, TravelTypeTrait;
    public function __construct(Tour $tour, Country $country, TravelType $travelType)
    {
        $this->tourModel = $tour;
        $this->countryModel = $country;
        $this->travelTypeModel = $travelType;
    }

    public function index()
    {
        $tours = $this->getTours();
        return view('admin.pages.tour.index', compact('tours'));
    }

    public function create()
    {
        $countries = $this->getCountries();
        $travelTypes = $this->getTravelTypes();
        return view('admin.pages.tour.create', compact('countries', 'travelTypes'));
    }

    public function store($request, $imageService, $iconService)
    {
        $image = $imageService->uploadImage($request->image);
        $icon = $iconService->uploadIcon($request->icon);
        $this->tourModel::create([
            'number_of_days' => $request->number_of_days,
            'rate' => $request->rate,
            'description' => $request->description,
            'image' => $image,
            'location' => $request->location,
            'price' => $request->price,
            'discount' => $request->discount,
            'date' => $request->date,
            'name' => $request->name,
            'icon' => $icon,
            'country_id' => $request->country_id,
            'travel_type_id' => $request->travel_type_id
        ]);
        Alert::toast('Tour Was Created Successfully', 'success');
        return redirect(route('admin.tour.index'));
    }

    public function delete($request, $imageService, $iconService): RedirectResponse
    {
        $tour = $this->findTourById($request->id);
        $imageService->deleteImageInLocal($tour->image);
        $iconService->deleteIconInLocal($tour->icon);
        $tour->delete();
        Alert::toast('Tour Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $tour = $this->findTourById($request->id);
        $countries = $this->getCountries();
        $travelTypes = $this->getTravelTypes();
        return view('admin.pages.tour.edit', compact('tour', 'countries', 'travelTypes'));
    }

    public function update($request, $imageService, $iconService)
    {
        $tour = $this->findTourById($request->id);
        $image = $imageService->checkImage($request->image, $tour);
        $icon = $iconService->checkIcon($request->icon, $tour);
        $tour->update([
            'number_of_days' => $request->number_of_days,
            'rate' => $request->rate,
            'description' => $request->description,
            'image' => $image,
            'location' => $request->location,
            'price' => $request->price,
            'discount' => $request->discount,
            'date' => $request->date,
            'name' => $request->name,
            'icon' => $icon,
            'country_id' => $request->country_id,
            'travel_type_id' => $request->travel_type_id
        ]);
        Alert::toast('Tour Was Updated Successfully', 'success');
        return redirect(route('admin.tour.index'));
    }
}
