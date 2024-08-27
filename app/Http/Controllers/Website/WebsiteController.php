<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function electricServices()
    {
        return view('services.electric');
    }

    public function plumbingServices()
    {
        return view('services.plumbing');
    }

    public function furnitureAndPopInterior()
    {
        return view('services.furniture');
    }
}
