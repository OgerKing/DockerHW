<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactTelephone
 * 
 * @property int $id
 * @property string $primary_contact_telephone_number
 * @property int|null $primary_contact_telephone_number_verified
 * @property string $secondary_contact_telephone_number
 * @property int $secondary_contact_telephone_number_verified
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|OwnerComment[] $owner_comments
 * @property Collection|Person[] $people
 * @property Collection|SubfileOwnerHistory[] $subfile_owner_histories
 * @property Collection|SubfilePerson[] $subfile_people
 *
 * @package App\Models
 */
class ContactTelephone extends Model
{
	protected $table = 'contact_telephones';

	protected $casts = [
		'primary_contact_telephone_number_verified' => 'int',
		'secondary_contact_telephone_number_verified' => 'int'
	];

	protected $fillable = [
		'primary_contact_telephone_number',
		'primary_contact_telephone_number_verified',
		'secondary_contact_telephone_number',
		'secondary_contact_telephone_number_verified',
		'created_by',
		'updated_by'
	];

	public function owner_comments()
	{
		return $this->hasMany(OwnerComment::class);
	}

	public function people()
	{
		return $this->hasMany(Person::class);
	}

	public function subfile_owner_histories()
	{
		return $this->hasMany(SubfileOwnerHistory::class);
	}

	public function subfile_people()
	{
		return $this->hasMany(SubfilePerson::class);
	}
}
