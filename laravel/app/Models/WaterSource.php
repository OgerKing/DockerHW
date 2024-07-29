<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WaterSource
 * 
 * @property int $id
 * @property string $water_source_code
 * @property string $water_source_description
 * @property int|null $water_source_sort
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|AdjudicationSection[] $adjudication_sections
 * @property Collection|WaterRight[] $water_rights
 *
 * @package App\Models
 */
class WaterSource extends Model
{
	protected $table = 'water_sources';

	protected $casts = [
		'water_source_sort' => 'int'
	];

	protected $fillable = [
		'water_source_code',
		'water_source_description',
		'water_source_sort',
		'created_by',
		'updated_by'
	];

	public function adjudication_sections()
	{
		return $this->hasMany(AdjudicationSection::class);
	}

	public function water_rights()
	{
		return $this->hasMany(WaterRight::class);
	}
}
