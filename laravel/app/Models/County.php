<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class County
 * 
 * @property int $id
 * @property string $county
 * @property string $county_name
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|MissingPouirr[] $missing_pouirrs
 *
 * @package App\Models
 */
class County extends Model
{
	protected $table = 'counties';

	protected $fillable = [
		'county',
		'county_name',
		'created_by',
		'updated_by'
	];

	public function missing_pouirrs()
	{
		return $this->hasMany(MissingPouirr::class);
	}
}
