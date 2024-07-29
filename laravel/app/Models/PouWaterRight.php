<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PouWaterRight
 * 
 * @property int $id
 * @property int $pou_id
 * @property int $water_right_id
 * @property int $priority_date_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property PriorityDate $priority_date
 * @property WaterRight $water_right
 *
 * @package App\Models
 */
class PouWaterRight extends Model
{
	protected $table = 'pou_water_rights';

	protected $casts = [
		'pou_id' => 'int',
		'water_right_id' => 'int',
		'priority_date_id' => 'int'
	];

	protected $fillable = [
		'pou_id',
		'water_right_id',
		'priority_date_id',
		'created_by',
		'updated_by'
	];

	public function priority_date()
	{
		return $this->belongsTo(PriorityDate::class);
	}

	public function water_right()
	{
		return $this->belongsTo(WaterRight::class);
	}
}
