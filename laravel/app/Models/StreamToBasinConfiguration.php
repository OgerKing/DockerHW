<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StreamToBasinConfiguration
 * 
 * @property int $id
 * @property int $stream_system_id
 * @property int $water_basin_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property StreamSystem $stream_system
 * @property WaterBasin $water_basin
 *
 * @package App\Models
 */
class StreamToBasinConfiguration extends Model
{
    use HasFactory;

	protected $table = 'stream_to_basin_configurations';

	protected $casts = [
		'stream_system_id' => 'int',
		'water_basin_id' => 'int'
	];

	protected $fillable = [
		'stream_system_id',
		'water_basin_id',
		'created_by',
		'updated_by'
	];

	public function stream_system()
	{
		return $this->belongsTo(StreamSystem::class);
	}

	public function water_basin()
	{
		return $this->belongsTo(WaterBasin::class);
	}
}
