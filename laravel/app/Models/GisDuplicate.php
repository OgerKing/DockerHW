<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GisDuplicate
 * 
 * @property int $id
 * @property string $bureau
 * @property int $dupeid
 * @property int $number
 * @property string $table_type
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|BureauUser[] $bureau_users
 *
 * @package App\Models
 */
class GisDuplicate extends Model
{
	protected $table = 'gis_duplicates';

	protected $casts = [
		'dupeid' => 'int',
		'number' => 'int'
	];

	protected $fillable = [
		'bureau',
		'dupeid',
		'number',
		'table_type',
		'created_by',
		'updated_by'
	];

	public function bureau_users()
	{
		return $this->hasMany(BureauUser::class);
	}
}