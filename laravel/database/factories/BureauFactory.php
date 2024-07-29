<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bureau;

class BureauFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bureau::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $bureauNames = ['New Mexico', 'Pecos', 'Lower Rio Grande', 'Pueblos, Tribes, & Nations'];

        return [
            'bureau_name' => $this->faker->randomElement($bureauNames),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
