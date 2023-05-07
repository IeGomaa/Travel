<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;
use App\Http\Traits\SliderTrait;
use App\Http\Traits\TravelTypeTrait;
use App\Models\Slider;
use App\Models\Tour;
use App\Models\TravelType;

class HomeController extends Controller
{
    private $sliderModel;
    private $tourModel;
    private $travelTypeModel;
    use SliderTrait, TravelTypeTrait;
    public function __construct(Slider $slider, Tour $tour, TravelType $travelType)
    {
        $this->sliderModel = $slider;
        $this->tourModel = $tour;
        $this->travelTypeModel = $travelType;
    }

    public function index()
    {
        $sliders = $this->getSliders();
        $tours = $this->tourModel::inRandomOrder()->limit(10)->get();
        $travelTypes = $this->getTravelTypes();
        return view('endUser.pages.index', compact('sliders', 'tours', 'travelTypes'));
    }
}
