<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $poll_ids = DB::table('polls')->pluck('id')->all();

        return [
            'title' => $this->faker->realText(50),
            'question' => $this->faker->realText(500),
            'poll_id' => $this->faker->randomElement($poll_ids),
        ];
    }
}
