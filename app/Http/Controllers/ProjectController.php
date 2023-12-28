<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('project_date', 'desc')->get();
        return view('projects/index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'featured_photo.*' => 'image|mimes:jpeg,png,jpg,gif', // Adjust validation rules as needed
        ]);

        if ($request->is_published == 'on') {
            $request['is_published'] = 'yes';
        }else{
            $request['is_published'] = 'no';
        }
        $project = Project::create($request->all());

        if($request->hasFile('featured_photo') && $request->file('featured_photo')->isValid()){
            $project->addMediaFromRequest('featured_photo')->toMediaCollection('featured_photos');
        }
        //upload photo gallery
        if($request->hasFile('project_photos')){
            foreach ($request->file('project_photos') as $photo) {
                $project->addMedia($photo)->toMediaCollection('project_photos');
            }
        }

        return redirect('/admin/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view('projects/details', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('projects/edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id);
        if ($request->is_published == 'on') {
            $request['is_published'] = 'yes';
        }else{
            $request['is_published'] = 'no';
        }
        
        if($request->hasFile('featured_photo') && $request->file('featured_photo')->isValid()){
            if ($project->getFirstMediaURL('featured_photos') !='') {
                $project->clearMediaCollection('featured_photos');
            }
            $project->addMediaFromRequest('featured_photo')->toMediaCollection('featured_photos');
        }
        //upload photo gallery
        if($request->hasFile('project_photos')){
            if ($project->getMedia('project_photos') !='') {
                foreach ($project->getMedia('project_photos') as $photo) {
                    $project->clearMediaCollection('project_photos');
                }
                
            }
            
            foreach ($request->file('project_photos') as $photo) {
                $project->addMedia($photo)->toMediaCollection('project_photos');
            }
        }
        $project->update($request->all());
        return redirect('/admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        if ($project->getFirstMediaURL('featured_photos') !='') {
            $project->clearMediaCollection('featured_photos');
        }
        if ($project->getMedia('project_photos') !='') {
            foreach ($project->getMedia('project_photos') as $photo) {
                $project->clearMediaCollection('project_photos');
            }
            
        }

        $project->delete();

        return redirect('/admin/projects');
    }
}
