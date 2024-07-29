<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WatersStatus
 * 
 * @property int $id
 * @property string $waters_status_code
 * @property string $waters_status_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class WatersStatus extends Model
{
	protected $table = 'waters_statuses';

	protected $fillable = [
		'waters_status_code',
		'waters_status_description',
		'created_by',
		'updated_by'
	];
}
