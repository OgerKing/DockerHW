<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuditTrail
 * 
 * @property int $id
 * @property string $operation_type
 * @property string $row_values
 * @property int $source_id
 * @property string $source_name
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class AuditTrail extends Model
{
	protected $table = 'audit_trails';

	protected $casts = [
		'source_id' => 'int'
	];

	protected $fillable = [
		'operation_type',
		'row_values',
		'source_id',
		'source_name',
		'created_by',
		'updated_by'
	];
}
