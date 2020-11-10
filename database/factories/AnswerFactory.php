<?php

namespace Database\Factories;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $question_ids = DB::table('questions')->pluck('id')->all();

        return [
            'answer' => $this->faker->realText(500),
            'question_id' => $this->faker->randomElement($question_ids),
        ];
    }
}
