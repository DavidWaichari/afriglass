<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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
        $projects = Project::orderBy('project_date', 'desc')->where('is_published','yes')->get()->take(5);
        return view('afriglass/index2',compact('services','projects'));
    }
    public function about()
    {
        $services = Service::all();
        return view('afriglass/about',compact('services'));
    }
    public function projects()
    {
        $projects = Project::orderBy('project_date', 'desc')->where('is_published','yes')->paginate(6);
        return view('afriglass/projects',compact('projects'));
    }
    public function services()
    {
        $services = Service::all();
        return view('afriglass/services',compact('services'));
    }
    public function contact()
    {
        $services = Service::all();
        return view('afriglass/contact',compact('services'));
    }

    public function sendMessage(Request $request)
    {
        $data = [
            "name" => $request->name,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ];
    
        Mail::to('dwaichari@gmail.com')->send(new SendEmail($data['name'], $data['phone_number'],$data['email'], $data['subject'], $data['message']));
        
        Session::flash('success', 'Message received successfully. We shall get back to you! Feel free to call us through the contacts provided');

        return redirect('/contact');
       
    }
    public function serviceDetails($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('afriglass/service_details',compact('service'));
    }
    public function projectDetails($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $videoId = '';
        $url = $project->youtube_link;
        if ($url != '') {
            // Parse the URL to get the query string
            $parsedUrl = parse_url($url);
            // Parse the query string to get the parameters
            parse_str($parsedUrl['query'], $queryParams);
            // Get the value of the 'v' parameter
            $videoId = $queryParams['v'];
        }
        return view('afriglass/project_details',compact('project','videoId'));
    }
}
