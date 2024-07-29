<?php

namespace Database\Factories;

use App\Models\AuditTrail;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuditTrailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuditTrail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => $this->faker->dateTime(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'operation_type' => $this->faker->regexify('[A-Za-z0-9]{16}'),
            'row_values' => $this->faker->text(),
            'source_id' => $this->faker->randomNumber(),
            'source_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_at' => $this->faker->dateTime(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
