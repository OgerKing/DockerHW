<?php

namespace Database\Factories;

use App\Models\PodUse;
use Illuminate\Database\Eloquent\Factories\Factory;

class PodUseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PodUse::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'description' => $this->faker->text(1000),
            'pod_use_id' => $this->faker->randomDigitNot(2),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
