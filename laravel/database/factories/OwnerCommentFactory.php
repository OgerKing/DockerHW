<?php

namespace Database\Factories;

use App\Models\ContactEmail;
use App\Models\ContactTelephone;
use App\Models\OwnerComment;
use App\Models\Party;
use App\Models\PartyStatus;
use App\Models\PartyType;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OwnerComment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'comment' => $this->faker->regexify('[A-Za-z0-9]{4000}'),
            'contact_email_id' => ContactEmail::factory(),
            'contact_telephone_id' => ContactTelephone::factory(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'party_id' => Party::factory(),
            'party_status_id' => PartyStatus::factory(),
            'party_type_id' => PartyType::factory(),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
        ];
    }
}
