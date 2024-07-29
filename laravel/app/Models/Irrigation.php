<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Irrigation
 * 
 * @property int $id
 * @property string $pod_is
 * @property string $pod_is_description
 * @property string $updated_by
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * 
 * @property Collection|GroundPod[] $ground_pods
 *
 * @package App\Models
 */
class Irrigation extends Model
{
	protected $table = 'irrigations';

	protected $fillable = [
		'pod_is',
		'pod_is_description',
		'updated_by',
		'created_by'
	];

	public function ground_pods()
	{
		return $this->hasMany(GroundPod::class);
	}
}
