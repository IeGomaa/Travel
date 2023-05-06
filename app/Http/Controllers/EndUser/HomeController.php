<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('endUser.pages.index');
    }
}
