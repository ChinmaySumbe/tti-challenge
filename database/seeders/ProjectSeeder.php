<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Task;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::factory(3)->create()->each(function ($project) {
            $project->tasks()->saveMany(Task::factory(3)->make());
        });
    }
}
