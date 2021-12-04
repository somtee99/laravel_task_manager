<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class ProjectController extends Controller
{
    /**
     * function to show all projects 
     *
     * @return Response
     */
    public function show(){
        /**
         * gets all projects according to the most recent
         * @var Project[]
         */
        $projects = Project::whereNotNull('id')->latest()->get();

        return view('pages.projects.show', ['projects' => $projects]);
    }

    /**
     * function to create a new project
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function create(Request $request){
        //store project values
        $project['name'] = $request->name;

        //create project
        Project::create($project);

        return redirect('/projects');
    }

    /**
     * function to show create project
     * 
     * @return Response
     */
    public function showCreate(){
        return view('pages.projects.create');
    }
}
