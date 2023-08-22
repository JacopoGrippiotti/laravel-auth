<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) {
            $newProject = new Project();
            $newProject->title = ucfirst($faker->unique()->words(7, true));
            $newProject->content = $faker->paragraphs(10, true);
            $newProject->slug = $faker->slug();
            $newProject->save();
        }
    }
}
