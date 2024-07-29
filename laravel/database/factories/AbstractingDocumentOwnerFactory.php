<?php

namespace Database\Factories;

use App\Models\abstractingDocumentDetail;
use App\Models\abstractingDocumentOwner;
use Illuminate\Database\Eloquent\Factories\Factory;

class abstractingDocumentOwnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = abstractingDocumentOwner::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'abs_doc_id' => $this->faker->randomNumber(),
            'abs_doc_name_id' => $this->faker->randomNumber(),
            'abstracting_document_detail_id' => abstractingDocumentDetail::factory(),
            'doc_fname' => $this->faker->randomLetter(),
            'doc_lname' => $this->faker->randomLetter(),
        ];
    }
}
