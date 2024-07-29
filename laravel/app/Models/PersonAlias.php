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
 * Class PersonAlias
 * 
 * @property int $id
 * @property int $person_id
 * @property int $person_alias_type_id
 * @property string $entity_name
 * @property string $first_name
 * @property string $last_name
 * @property string $middle_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $created_by
 * @property string $updated_by
 * 
 * @property PersonAliasType $person_alias_type
 * @property Person $person
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class PersonAlias extends Model
{
    use HasFactory;

	protected $table = 'person_aliases';

	protected $casts = [
		'person_id' => 'int',
		'person_alias_type_id' => 'int'
	];

	protected $fillable = [
		'person_id',
		'person_alias_type_id',
		'entity_name',
		'first_name',
		'last_name',
		'middle_name',
		'created_by',
		'updated_by'
	];

	public function person_alias_type()
	{
		return $this->belongsTo(PersonAliasType::class);
	}

	public function person()
	{
		return $this->belongsTo(Person::class);
	}

	public function people()
	{
		return $this->hasMany(Person::class);
	}
}
