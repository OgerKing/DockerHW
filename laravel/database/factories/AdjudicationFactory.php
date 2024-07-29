<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Adjudication;
use App\Models\AdjudicationDistrict;
use App\Models\AdjudicationStatus;
use App\Models\Bureau;

class AdjudicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adjudication::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $adjudicationName = $this->faker->name();
        $coordinateSystem = 'State Plane';
        $datum = 'NAD 27';        
        return [
                    'adjudication_name' => $adjudicationName,
                    'adjudication_nickname' => $adjudicationName . '-Nickname',
                    'bureau_id' => $this->faker->numberBetween(1, 4), //Choosing from the first 5 bureau ids
                    'adjudication_status_id' => $this->faker->numberBetween(1, 8), //Choosing from the first 5 adjudication_status ids,
                    'adjudication_district_id' => 1,//AdjudicationDistrict::factory() not yet built
                    'coordinate_system' => $coordinateSystem,
                    'adjudication_boundary_map_link' => 'www.google.com',
                    'hydrographic_survey_description' =>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                    'prefix' => $this->faker->regexify('[A-Za-z0-9]{10}'),
                    'created_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
                    'updated_by' => $this->faker->regexify('[A-Za-z0-9]{64}'),
                ];
    }
}
