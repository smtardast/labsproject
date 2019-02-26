<?php

namespace App\Http\Controllers;

use App\Project;
use App\Icon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        $icons=Icon::all();
        return view('project.project', compact('projects', 'icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons=Icon::all();
        return view('project.project-create', compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newproject= new Project;
        $newproject->title=$request->title;
        $newproject->text=$request->text;
        $newproject->icon_id=$request->icon_id;
        $newproject->image=$request->image->store('','project');
        $newproject->save();
        $projects=Project::all();
        $icons=Icon::all();
        return view('project.project', compact('projects', 'icons'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $icons=Icon::all();
        return view('project.project-edit', compact('icons','project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->title=$request->title;
        $project->text=$request->text;
        $project->icon_id=$request->icon_id;
        $project->image=$request->image->store('','project');
        $project->save();
        $projects=Project::all();
        $icons=Icon::all();
        return view('project.project', compact('projects', 'icons'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        $projects=Project::all();
        $icons=Icon::all();
        return view('project.project', compact('projects', 'icons'));

    }
}
