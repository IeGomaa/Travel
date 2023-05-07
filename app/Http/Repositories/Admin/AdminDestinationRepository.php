<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminDestinationInterface;
use App\Http\Traits\CountryTrait;
use App\Http\Traits\DestinationTrait;
use App\Models\Country;
use App\Models\Destination;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminDestinationRepository implements AdminDestinationInterface
{
    private $destinationModel;
    private $countryModel;
    use DestinationTrait, CountryTrait;
    public function __construct(Destination $destination, Country $country)
    {
        $this->destinationModel = $destination;
        $this->countryModel = $country;
    }

    public function index()
    {
        $destinations = $this->getDestinations();
        return view('admin.pages.destination.index', compact('destinations'));
    }

    public function create()
    {
        $countries = $this->getCountries();
        return view('admin.pages.destination.create', compact('countries'));
    }

    public function store($request, $service)
    {
        $image = $service->uploadImage($request->image);
        $this->destinationModel::create([
            'image' => $image,
            'country_id' => $request->country_id
        ]);
        Alert::toast('Destination Was Created Successfully', 'success');
        return redirect(route('admin.destination.index'));
    }

    public function delete($request, $service): RedirectResponse
    {
        $destination = $this->findDestinationById($request->id);
        $service->deleteImageInLocal($destination->image);
        $destination->delete();
        Alert::toast('Destination Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $countries = $this->getCountries();
        $destination = $this->findDestinationById($request->id);
        return view('admin.pages.destination.edit', compact('destination', 'countries'));
    }

    public function update($request, $service)
    {
        $destination = $this->findDestinationById($request->id);
        $image = $service->checkImage($request->image, $destination);
        $destination->update([
            'image' => $image,
            'country_id' => $request->country_id
        ]);
        Alert::toast('Destination Was Updated Successfully', 'success');
        return redirect(route('admin.destination.index'));
    }
}
