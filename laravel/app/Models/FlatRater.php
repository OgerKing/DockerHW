<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FlatRater
 * 
 * @property int $id
 * @property float $assigned_acres
 * @property string $map_serial
 * @property int $pl_id
 * @property int $pl_id_access
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class FlatRater extends Model
{
	protected $table = 'flat_raters';

	protected $casts = [
		'assigned_acres' => 'float',
		'pl_id' => 'int',
		'pl_id_access' => 'int'
	];

	protected $fillable = [
		'assigned_acres',
		'map_serial',
		'pl_id',
		'pl_id_access',
		'created_by',
		'updated_by'
	];
}
