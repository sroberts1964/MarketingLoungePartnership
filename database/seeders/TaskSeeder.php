<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;// Ensure the correct model is imported


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
            'task' => 'Create 1st task',
            'completed' => false,
            ],
            [
            'task' => 'Create 2nd task',
            'completed' => true,
            ],
            [
            'task' => 'Create 3rd task',
            'completed' => false,
            ],
        ]);
    }
}
