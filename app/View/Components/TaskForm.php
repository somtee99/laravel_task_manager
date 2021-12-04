<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class TaskForm extends Component
{
    /**
     * the task's project
     * 
     * @var Project
     */
    public $project;

    /**
     * all projects
     *
     * @var Project[]
     */
    public $projects;

    /**
     * Create a new component instance.
     *
     * @param Project $project
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
        $this->projects = Project::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.task-form');
    }
}
