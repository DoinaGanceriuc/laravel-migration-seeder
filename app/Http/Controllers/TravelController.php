<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Travel;

class TravelController extends Controller
{

    public function index()
    {
        return view('home');
    }
    public function travel()
    {
        //ddd(Travel::all());
        $travels = Travel::all();

        return view('flight', compact('travels'));
    }

    public function trip()
    {
        //ddd(Package::all());
        $packages = Package::all();

        return view('package', compact('packages'));
    }

    public function show(Package $single_package)
    {
        //ddd($single_package);
        //$packages = Package::all();

        return view('packages.show', compact('single_package'));
    }

    public function news()
    {
        return view('news');
    }
}
