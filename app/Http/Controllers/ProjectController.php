<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
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
        
        if ($request->is_published == 'on') {
            $request['is_published'] = 'yes';
        }else{
            $request['is_published'] = 'no';
        }
        $project = Project::create($request->all());

        if($request->hasFile('featured_photo') && $request->file('featured_photo')->isValid()){
            $project->addMediaFromRequest('featured_photo')->toMediaCollection('featured_photos');
        }

        return redirect('/admin/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($product->getFirstMediaURL('products_images') !='') {
            $product->clearMediaCollection('products_images');
        }
    }
}
