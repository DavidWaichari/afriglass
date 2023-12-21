<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class AfriglassController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('afriglass/index',compact('services'));
    }
    public function about()
    {
        $services = Service::all();
        return view('afriglass/about',compact('services'));
    }
    public function serviceDetails($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('afriglass/service_details',compact('service'));
    }
}
