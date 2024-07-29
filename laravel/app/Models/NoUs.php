<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NoUs
 * 
 * @property int $id
 * @property int $pou_id
 * @property string $map_serial
 * @property float $assigned_acres
 * @property int $pou_id_access
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class NoUs extends Model
{
    use HasFactory;

	protected $table = 'no_uses';

	protected $casts = [
		'pou_id' => 'int',
		'assigned_acres' => 'float',
		'pou_id_access' => 'int'
	];

	protected $fillable = [
		'pou_id',
		'map_serial',
		'assigned_acres',
		'pou_id_access',
		'created_by',
		'updated_by'
	];
}
