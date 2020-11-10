<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::factory()->count(5)->create();
        App\Models\Poll::factory()->count(10)->create();
        App\Models\Question::factory()->count(50)->create();
        App\Models\Answer::factory()->count(500)->create();

//        factory(App\Models\User::class, 5)->create();
//        factory(App\Models\Poll::class, 10)->create();
//        factory(App\Models\Question::class, 50)->create();
//        factory(App\Models\Answer::class, 500)->create();
    }
}
