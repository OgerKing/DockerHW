<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PodWaterRight
 * 
 * @property int $id
 * @property int $pod_id
 * @property int $priority_date_id
 * @property int $water_right_id
 * @property float $acres_pri
 * @property float $acre_ft_pri
 * @property float $percent_cfs
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property PriorityDate $priority_date
 * @property Pod $pod
 * @property WaterRight $water_right
 *
 * @package App\Models
 */
class PodWaterRight extends Model
{
	protected $table = 'pod_water_rights';

	protected $casts = [
		'pod_id' => 'int',
		'priority_date_id' => 'int',
		'water_right_id' => 'int',
		'acres_pri' => 'float',
		'acre_ft_pri' => 'float',
		'percent_cfs' => 'float'
	];

	protected $fillable = [
		'pod_id',
		'priority_date_id',
		'water_right_id',
		'acres_pri',
		'acre_ft_pri',
		'percent_cfs',
		'created_by',
		'updated_by'
	];

	public function priority_date()
	{
		return $this->belongsTo(PriorityDate::class);
	}

	public function pod()
	{
		return $this->belongsTo(Pod::class);
	}

	public function water_right()
	{
		return $this->belongsTo(WaterRight::class);
	}
}
