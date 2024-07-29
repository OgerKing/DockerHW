<?php

namespace Database\Factories;

use App\Models\ContactAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactAddress::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'mailing_address_address_1' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'mailing_address_address_2' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'mailing_address_city' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'mailing_address_country' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'mailing_address_postal_code' => $this->faker->randomNumber(),
            'mailing_address_state' => $this->faker->regexify('[A-Za-z0-9]{2}'),
            'mailing_address_verified' => $this->faker->numberBetween(-8, 8),
            'physical_address_address_1' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'physical_address_address_2' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'physical_address_city' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'physical_address_country' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'physical_address_postal_code' => $this->faker->randomNumber(),
            'physical_address_state' => $this->faker->regexify('[A-Za-z0-9]{2}'),
            'physical_address_verified' => $this->faker->numberBetween(-8, 8),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
