<?php

namespace Database\Factories;

use App\Models\abstracting;
use App\Models\abstractingComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class abstractingCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = abstractingComment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'abstracting_comment' => $this->faker->regexify('[A-Za-z0-9]{4000}'),
            'abstracting_id' => abstracting::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
