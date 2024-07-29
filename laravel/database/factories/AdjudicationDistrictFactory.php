<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Adjudication;
use App\Models\AdjudicationDistrict;
use App\Models\AdjudicationStatus;
use App\Models\Bureau;

class AdjudicationDistrictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdjudicationDistrict::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
      
            
        return [
               'adjudication_district' => $this->faker->regexify('[A-Za-z0-9]{10}'),
	        'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
               
                ];
    }
}
