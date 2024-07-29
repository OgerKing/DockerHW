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
 * Class PersonLegalInterestType
 * 
 * @property int $id
 * @property string $person_legal_interest_type
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|SubfilePerson[] $subfile_people
 *
 * @package App\Models
 */
class PersonLegalInterestType extends Model
{
    use HasFactory;

	protected $table = 'person_legal_interest_types';

	protected $fillable = [
		'person_legal_interest_type',
		'created_by',
		'updated_by'
	];

	public function subfile_people()
	{
		return $this->hasMany(SubfilePerson::class);
	}
}
