<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Action
 * 
 * @property int $id
 * @property string $action_code
 * @property string $action_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class Action extends Model
{
	protected $table = 'actions';

	protected $fillable = [
		'action_code',
		'action_description',
		'created_by',
		'updated_by'
	];
}
