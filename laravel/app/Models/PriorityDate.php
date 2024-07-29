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
 * Class PriorityDate
 * 
 * @property int $id
 * @property Carbon $priority_date
 * @property string $priority_date_text
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|PodWaterRight[] $pod_water_rights
 * @property Collection|PouWaterRight[] $pou_water_rights
 *
 * @package App\Models
 */
class PriorityDate extends Model
{
    use HasFactory;

	protected $table = 'priority_dates';

	protected $casts = [
		'priority_date' => 'datetime'
	];

	protected $fillable = [
		'priority_date',
		'priority_date_text',
		'created_by',
		'updated_by'
	];

	public function pod_water_rights()
	{
		return $this->hasMany(PodWaterRight::class);
	}

	public function pou_water_rights()
	{
		return $this->hasMany(PouWaterRight::class);
	}
}
