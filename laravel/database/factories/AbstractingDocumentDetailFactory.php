<?php

namespace Database\Factories;

use App\Models\abstracting;
use App\Models\abstractingDocumentDetail;
use App\Models\abstractingDocumentType;
use App\Models\WatersStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class abstractingDocumentDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = abstractingDocumentDetail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'abs_doc_idaccess' => $this->faker->randomNumber(),
            'abs_doc_nbr' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'abs_doc_pdate' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'abs_doc_pdate_txt' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'abs_mw_id' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'abstracting_document_type_id' => abstractingDocumentType::factory(),
            'abstracting_id' => abstracting::factory(),
            'addr1' => $this->faker->regexify('[A-Za-z0-9]{30}'),
            'addr2' => $this->faker->regexify('[A-Za-z0-9]{30}'),
            'approved_date' => $this->faker->dateTime(),
            'chg_own_from' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'chg_own_to' => $this->faker->regexify('[A-Za-z0-9]{2000}'),
            'city' => $this->faker->city(),
            'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'doc_comment' => $this->faker->text(),
            'doc_use' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'field_chk' => $this->faker->regexify('[A-Za-z0-9]{4000}'),
            'include' => $this->faker->numberBetween(-8, 8),
            'map' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'ose_file_date' => $this->faker->dateTime(),
            'part_sold' => $this->faker->numberBetween(-8, 8),
            'pod_basin' => $this->faker->regexify('[A-Za-z0-9]{3}'),
            'pod_nbr' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'pod_suffix' => $this->faker->regexify('[A-Za-z0-9]{250}'),
            'qtr_16th' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'qtr_4th' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'qtr_64th' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'qty_af_ac' => $this->faker->regexify('[A-Za-z0-9]{6}'),
            'qty_af_yr' => $this->faker->regexify('[A-Za-z0-9]{7}'),
            'qty_ir_ac' => $this->faker->regexify('[A-Za-z0-9]{7}'),
            'rng' => $this->faker->regexify('[A-Za-z0-9]{3}'),
            'sec' => $this->faker->regexify('[A-Za-z0-9]{2}'),
            'state' => $this->faker->randomLetter(),
            'supp' => $this->faker->numberBetween(-8, 8),
            'tract' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'tws' => $this->faker->regexify('[A-Za-z0-9]{3}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'waters_status_id' => WatersStatus::factory(),
            'x' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'y' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'zip' => $this->faker->postcode(),
        ];
    }
}
