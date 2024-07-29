<?php

namespace Database\Factories;

use App\Models\BasinUser;
use App\Models\GisDuplicate;
use Illuminate\Database\Eloquent\Factories\Factory;

class BasinUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BasinUser::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'basin' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'gis_duplicate_id' => GisDuplicate::factory(),
            'login_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
