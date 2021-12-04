<?php

namespace App\View\Components;

use App\Models\Task;
use Illuminate\View\Component;

class TaskCard extends Component
{
    public $task;
    /**
     * Create a new component instance.
     *
     * @param Task $task
     * @return void
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task-card');
    }
}
