<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StreamSystem
 * 
 * @property int $id
 * @property string $stream_system_name
 * @property bool $is_in_wrats
 * @property Carbon|null $updated_at
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property string $updated_by
 * 
 * @property Collection|StreamToBasinConfiguration[] $stream_to_basin_configurations
 *
 * @package App\Models
 */
class StreamSystem extends Model
{
    use HasFactory;

	protected $table = 'stream_systems';

	protected $casts = [
		'is_in_wrats' => 'bool'
	];

	protected $fillable = [
		'stream_system_name',
		'is_in_wrats',
		'created_by',
		'updated_by'
	];

	public function stream_to_basin_configurations()
	{
		return $this->hasMany(StreamToBasinConfiguration::class);
	}
}
