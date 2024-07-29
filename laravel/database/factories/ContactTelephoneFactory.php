<?php

namespace Database\Factories;

use App\Models\ContactTelephone;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactTelephoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactTelephone::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'primary_contact_telephone_number' => $this->faker->regexify('[A-Za-z0-9]{24}'),
            'primary_contact_telephone_number_verified' => $this->faker->numberBetween(-8, 8),
            'secondary_contact_telephone_number' => $this->faker->regexify('[A-Za-z0-9]{24}'),
            'secondary_contact_telephone_number_verified' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
