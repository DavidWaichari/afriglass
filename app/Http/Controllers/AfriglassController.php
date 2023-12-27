<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;

class AfriglassController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('afriglass/index',compact('services'));
    }
    public function index2()
    {
        $services = Service::all();
        return view('afriglass/index2',compact('services'));
    }
    public function about()
    {
        $services = Service::all();
        return view('afriglass/about',compact('services'));
    }
    public function projects()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(6);
        return view('afriglass/projects',compact('projects'));
    }
    public function contact()
    {
        $services = Service::all();
        return view('afriglass/contact',compact('services'));
    }
    public function serviceDetails($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('afriglass/service_details',compact('service'));
    }
    public function projectDetails($slug)
    {
        $project = Project::where('slug', $slug)->first();

        return view('afriglass/project_details',compact('project'));
    }
}
