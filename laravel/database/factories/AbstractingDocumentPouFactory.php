<?php

namespace Database\Factories;

use App\Models\abstractingDocumentDetail;
use App\Models\abstractingDocumentPou;
use Illuminate\Database\Eloquent\Factories\Factory;

class abstractingDocumentPouFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = abstractingDocumentPou::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'abs_doc_id' => $this->faker->randomNumber(),
            'abs_doc_pou_id' => $this->faker->randomNumber(),
            'abs_notes' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'abstracting_document_detail_id' => abstractingDocumentDetail::factory(),
            'acres' => $this->faker->randomFloat(0, 0, 9999999999.),
            'also_desc' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'cid_desc' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'match_deed' => $this->faker->numberBetween(-8, 8),
            'mult' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'owner' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'pla_rng' => $this->faker->randomLetter(),
            'pla_sec' => $this->faker->randomLetter(),
            'pla_tws' => $this->faker->randomLetter(),
            'plaqtr16th' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'plaqtr4th' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'plaqtr64th' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'priority_date' => $this->faker->dateTime(),
            'record_order' => $this->faker->randomFloat(0, 0, 999999999999999999.),
            'subsec_txt' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'tract' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'wat_source' => $this->faker->regexify('[A-Za-z0-9]{100}'),
        ];
    }
}
