<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WaterBasin
 * 
 * @property int $id
 * @property string $water_basin_code
 * @property string $water_basin_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|StreamToBasinConfiguration[] $stream_to_basin_configurations
 *
 * @package App\Models
 */
class WaterBasin extends Model
{
	protected $table = 'water_basins';

	protected $fillable = [
		'water_basin_code',
		'water_basin_description',
		'created_by',
		'updated_by'
	];

	public function stream_to_basin_configurations()
	{
		return $this->hasMany(StreamToBasinConfiguration::class);
	}
}
