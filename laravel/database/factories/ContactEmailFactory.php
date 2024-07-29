<?php

namespace Database\Factories;

use App\Models\ContactEmail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactEmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactEmail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'primary_contact_email' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'primary_contact_email_verified' => $this->faker->numberBetween(-8, 8),
            'secondary_contact_email' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'secondary_contact_email_verified' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
