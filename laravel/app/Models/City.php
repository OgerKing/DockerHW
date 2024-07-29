<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id
 * @property string $city_name
 * @property string $state_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|MissingPouirr[] $missing_pouirrs
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'cities';

	protected $fillable = [
		'city_name',
		'state_id',
		'created_by',
		'updated_by'
	];

	public function missing_pouirrs()
	{
		return $this->hasMany(MissingPouirr::class);
	}
}
