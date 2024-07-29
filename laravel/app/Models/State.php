<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 * 
 * @property int $id
 * @property int $country_id
 * @property string $state_abbreviation
 * @property string $state_name
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Country $country
 *
 * @package App\Models
 */
class State extends Model
{
    use HasFactory;

	protected $table = 'states';

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'country_id',
		'state_abbreviation',
		'state_name',
		'created_by',
		'updated_by'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
