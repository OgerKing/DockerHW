<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Associated
 * 
 * @property int $id
 * @property string $water_right_status_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class Associated extends Model
{
	protected $table = 'associateds';

	protected $fillable = [
		'water_right_status_description',
		'created_by',
		'updated_by'
	];
}
