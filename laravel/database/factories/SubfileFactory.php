<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subfile;

class SubfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'adjudication_section_id' => \App\Models\AdjudicationSection::factory(),
            'subfile_adjudication_note_id' => \App\Models\SubfileAdjudicationNote::factory(),
            'field_check_note_id' => \App\Models\SubfileFieldCheckNote::factory(),
            'ose_work_summary_note_id' => \App\Models\SubfileOseWorkSummaryNote::factory(),
            'basin_nbr_hl' => $this->faker->randomNumber(),
            'basin_section_hl' => $this->faker->word(),
            'batch' => $this->faker->randomNumber(),
            'file_location_id' => \App\Models\FileLocation::factory(),
            'prev_sub_id' => $this->faker->randomDigitNotNull(),
            'print_file' => $this->faker->dateTime(),
            'selected' => $this->faker->randomNumber(1),
            'sub_file_assigned_ose_attorney_person_id' => $this->faker->randomDigitNotNull(),
            'sub_file_end_date' => $this->faker->dateTime(),
            'sub_file_group' => $this->faker->word(),
            'sub_file_hl_sfx' => $this->faker->word(),
            'sub_file_hl_txt' => $this->faker->word(),
            'sub_file_map_nbr' => $this->faker->randomNumber(),
            'sub_file_parent_id' => $this->faker->randomDigitNotNull(),
            'sub_file_sort' => $this->faker->randomFloat(3),
            'sub_file_start_date' => $this->faker->dateTime(),
            'sub_file_type_nbr' => $this->faker->randomNumber(),
            'sub_file_var_sort' => $this->faker->word(),
            'sub_id_access' => $this->faker->randomNumber(),
            'sub_unk_own' => $this->faker->word(),
            'subfile_adjudication_status_id' => \App\Models\SubfileAdjudicationStatus::factory(),
            'verified' => $this->faker->randomNumber(),
            'wrats_status_date' => $this->faker->dateTime(),
            'wrats_status_doc' => $this->faker->word(),
            'created_by' => $this->faker->word(),
            'updated_by' => $this->faker->word(),
        ];
    }
}
