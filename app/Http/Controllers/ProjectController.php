<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show(){
        $projects = Project::all();

        return view('projects.show', ['projects' => $projects]);
    }
}
