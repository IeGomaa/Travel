<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminCountryInterface;
use App\Http\Traits\CountryTrait;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCountryRepository implements AdminCountryInterface
{
    use CountryTrait;
    private $countryModel;
    public function __construct(Country $country)
    {
        $this->countryModel = $country;
    }

    public function index()
    {
        $countries = $this->getCountries();
        return view('admin.pages.country.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.pages.country.create');
    }

    public function store($request, $service)
    {
        $image = $service->uploadImage($request->image);
        $this->countryModel::create([
            'name' => $request->name,
            'iso' => $request->iso,
            'code' => $request->code,
            'image' => $image
        ]);

        Alert::toast('Country Was Created Successfully','success');
        return redirect(route('admin.country.index'));
    }

    public function delete($request, $service): RedirectResponse
    {
        $country = $this->findCountryById($request->id);
        $service->deleteImageInLocal($country->image);
        $country->delete();
        Alert::toast('Country Was Deleted Successfully','success');
        return back();
    }

    public function edit($request)
    {
        $country = $this->findCountryById($request->id);
        return view('admin.pages.country.edit', compact('country'));
    }

    public function update($request, $service)
    {
        $country = $this->findCountryById($request->id);
        $image = $service->checkImage($request->image, $country);
        $country->update([
            'name' => $request->name,
            'iso' => $request->iso,
            'code' => $request->code,
            'image' => $image
        ]);

        Alert::toast('Country Was Updated Successfully','success');
        return redirect(route('admin.country.index'));
    }
}
