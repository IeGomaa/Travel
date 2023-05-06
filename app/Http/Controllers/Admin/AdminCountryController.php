<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminCountryInterface;
use App\Http\Requests\Admin\Country\CheckCountryIdRequest;
use App\Http\Requests\Admin\Country\CreateCountryRequest;
use App\Http\Requests\Admin\Country\UpdateCountryRequest;
use App\Http\Services\Country\CountryCheckImageService;
use App\Http\Services\Country\CountryDeleteImageService;
use App\Http\Services\Country\CountryUploadImageService;

class AdminCountryController extends Controller
{
    private $countryInterface;
    public function __construct(AdminCountryInterface $interface)
    {
        $this->countryInterface = $interface;
    }

    public function index()
    {
        return $this->countryInterface->index();
    }

    public function create()
    {
        return $this->countryInterface->create();
    }

    public function store(CreateCountryRequest $request, CountryUploadImageService $service)
    {
        return $this->countryInterface->store($request, $service);
    }

    public function delete(CheckCountryIdRequest $request, CountryDeleteImageService $service)
    {
        return $this->countryInterface->delete($request, $service);
    }

    public function edit(CheckCountryIdRequest $request)
    {
        return $this->countryInterface->edit($request);
    }

    public function update(UpdateCountryRequest $request, CountryCheckImageService $service)
    {
        return $this->countryInterface->update($request, $service);
    }
}
