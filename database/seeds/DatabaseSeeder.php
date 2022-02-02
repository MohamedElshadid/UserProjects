<?php

use App\Project;
use App\TargetTask;
use App\Task;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'count_login' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        $project1 = Project::create([
            'project_name' => 'task',
            'status' => 0,
            'date' => now(),
            'location' => 'Egypt',
        ]);
        $project2 = Project::create([
            'project_name' => 'task2',
            'status' => 1,
            'date' => now(),
            'location' => 'Egypt',
        ]);
        $project3 = Project::create([
            'project_name' => 'task2',
            'status' => 2,
            'date' => now(),
            'location' => 'Egypt',
        ]);

        $task1 = Task::create([
            'num_tasks' => 20,
            'date' => now(),
            'project_id' => $project1->id,
            'user_id' => $user->id,
        ]);
        $task2 = Task::create([
            'num_tasks' => 30,
            'date' => now(),
            'project_id' => $project2->id,
            'user_id' => $user->id,
        ]);
        $task3 = Task::create([
            'num_tasks' => 10,
            'date' => now(),
            'project_id' => $project3->id,
            'user_id' => $user->id,
        ]);
        $target = TargetTask::create([
            'target_tasks' => 10,
            'user_id' => $user->id,
        ]);
    }
}
