<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Get related project's id
         * 
         * @var int
         */
        $project_id = Project::where('name', 'Developer Test')->first()->id;

        /**
         * Set tasks to be seeded
         * 
         * @var array
         */
        $tasks = $this->tasks($project_id);

        foreach($tasks as $task){
            Task::create($task);
        }
    }

    /**
     * Returns tasks to be seeded
     *
     * @param int $project_id
     * @return array
     */
    public function tasks($project_id){
        $tasks = [
            [
                "priority" => 1,
                "name" => "Write Code",
                "project_id" => $project_id
            ],
            [
                "priority" => 2,
                "name" => "Test Code",
                "project_id" => $project_id
            ],
            [
                "priority" => 3,
                "name" => "Refactor Code",
                "project_id" => $project_id
            ],
            [
                "priority" => 4,
                "name" => "Test Code Again",
                "project_id" => $project_id
            ],
            [
                "priority" => 5,
                "name" => "Edit README.md file",
                "project_id" => $project_id
            ]
        ];

        return $tasks;
    }
}
