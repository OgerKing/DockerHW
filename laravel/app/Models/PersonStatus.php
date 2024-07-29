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
 * Class PersonStatus
 * 
 * @property int $id
 * @property string $person_status_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|OwnerComment[] $owner_comments
 * @property Collection|Person[] $people
 * @property Collection|SubfilePerson[] $subfile_people
 *
 * @package App\Models
 */
class PersonStatus extends Model
{
    use HasFactory;

	protected $table = 'person_statuses';

	protected $fillable = [
		'person_status_description',
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

	public function subfile_people()
	{
		return $this->hasMany(SubfilePerson::class);
	}
}
