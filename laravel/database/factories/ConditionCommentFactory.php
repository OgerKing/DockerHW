<?php

namespace Database\Factories;

use App\Models\Condition;
use App\Models\ConditionComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConditionCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ConditionComment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'condition_comment' => $this->faker->regexify('[A-Za-z0-9]{4000}'),
            'condition_id' => Condition::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
