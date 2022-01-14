<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        //ddd(Travel::all());
        $travels = Travel::all();

        return view('home', compact('travels'));
    }

    public function trip()
    {
        //ddd(Package::all());
        $packages = Package::all();

        return view('package', compact('packages'));
    }
}
