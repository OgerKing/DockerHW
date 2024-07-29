<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DefendantType
 * 
 * @property int $id
 * @property string $created_by
 * @property string $defendant_type_description
 * @property string $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|SubfileOwnerHistory[] $subfile_owner_histories
 *
 * @package App\Models
 */
class DefendantType extends Model
{
	protected $table = 'defendant_types';

	protected $fillable = [
		'created_by',
		'defendant_type_description',
		'updated_by'
	];

	public function subfile_owner_histories()
	{
		return $this->hasMany(SubfileOwnerHistory::class);
	}
}
