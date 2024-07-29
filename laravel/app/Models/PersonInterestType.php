<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonInterestType
 * 
 * @property int $id
 * @property string $person_interest_type
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|SubfileOwnerHistory[] $subfile_owner_histories
 * @property Collection|SubfilePerson[] $subfile_people
 *
 * @package App\Models
 */
class PersonInterestType extends Model
{
    use HasFactory;

	protected $table = 'person_interest_types';

	protected $fillable = [
		'person_interest_type',
		'created_by',
		'updated_by'
	];

	public function subfile_owner_histories()
	{
		return $this->hasMany(SubfileOwnerHistory::class);
	}

	public function subfile_people()
	{
		return $this->hasMany(SubfilePerson::class);
	}
}
