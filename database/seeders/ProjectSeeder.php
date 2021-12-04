<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * set project to be seeded
         */
        $project = [
                "name" => "Developer Test",
            ];

        Project::create($project);   
    }
}
