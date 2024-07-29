<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * 
 * @property int $id
 * @property int $role_id
 * @property int $securable_id
 * @property int|null $deny_read_write
 * @property int|null $p_read
 * @property int|null $p_write
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class Permission extends Model
{
	protected $table = 'permissions';

	protected $casts = [
		'role_id' => 'int',
		'securable_id' => 'int',
		'deny_read_write' => 'int',
		'p_read' => 'int',
		'p_write' => 'int'
	];

	protected $fillable = [
		'role_id',
		'securable_id',
		'deny_read_write',
		'p_read',
		'p_write',
		'created_by',
		'updated_by'
	];
}
