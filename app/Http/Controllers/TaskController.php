<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * function to show all tasks in project 
     *
     * @param int $project_id
     * @return Response
     */
    public function show($project_id){
        $project = Project::find($project_id);
        $tasks = $project->tasks;

        /**
         * holds necessary data for the view
         * @var array
         */
        $data = ['project' => $project, 'tasks' => $tasks];

        return view('pages.tasks.show', $data);
    }

    /**
     * function to create a new task
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function create(Request $request){
        //set the required data for task creation
        $task['name'] = $request->name;
        $task['project_id'] = $request->project_id;
        $task['priority'] = 1;

        //create task
        $task = Task::create($task);

        return redirect('tasks/'.$task->project_id)->withStatus('Task was created!');
    }

    /**
     * function to show create task
     * 
     * @param int $project_id
     * @return Response
     */
    public function showCreate($project_id){
        //get all projects to display 
        $projects = Project::all();

        /**
         * holds necessary data for the view
         * @var array
         */
        $data = ['projects' => $projects, 'project_id' => $project_id];

        return view('pages.tasks.create', $data);
    }
}
