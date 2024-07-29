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
 * Class Person
 * 
 * @property int $id
 * @property int $address_id
 * @property int|null $assoc
 * @property int $attorney_id
 * @property int|null $authorized_agent
 * @property int $bureau_id
 * @property int|null $caretaker
 * @property int $contact_email_id
 * @property int $contact_telephone_id
 * @property int $court_id
 * @property string $department
 * @property string $division
 * @property string $entity_name
 * @property string $first_name
 * @property int|null $former
 * @property int $gov
 * @property int|null $individual
 * @property int|null $is_deceased
 * @property string $last_name
 * @property string $middle_name
 * @property int $p_idaccess
 * @property int $p_sort
 * @property int $person_alias_id
 * @property Carbon|null $person_end_date
 * @property int $person_entity
 * @property Carbon|null $person_start_date
 * @property int $person_status_id
 * @property int $person_type_id
 * @property string $sovereign
 * @property string $special_handling_instructions
 * @property string $suffix
 * @property int|null $verified
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Attorney $attorney
 * @property Address $address
 * @property Bureau $bureau
 * @property ContactEmail $contact_email
 * @property ContactTelephone $contact_telephone
 * @property Court $court
 * @property PersonAlias $person_alias
 * @property PersonStatus $person_status
 * @property PersonType $person_type
 * @property Collection|DefendantDocument[] $defendant_documents
 * @property Collection|GlobalDocument[] $global_documents
 * @property Collection|HydrographicDocument[] $hydrographic_documents
 * @property Collection|OwnerComment[] $owner_comments
 * @property Collection|PersonAlias[] $person_aliases
 * @property Collection|SubfileOwnerHistory[] $subfile_owner_histories
 *
 * @package App\Models
 */
class Person extends Model
{
    use HasFactory;

	protected $table = 'persons';

	protected $casts = [
		'address_id' => 'int',
		'assoc' => 'int',
		'attorney_id' => 'int',
		'authorized_agent' => 'int',
		'bureau_id' => 'int',
		'caretaker' => 'int',
		'contact_email_id' => 'int',
		'contact_telephone_id' => 'int',
		'court_id' => 'int',
		'former' => 'int',
		'gov' => 'int',
		'individual' => 'int',
		'is_deceased' => 'int',
		'p_idaccess' => 'int',
		'p_sort' => 'int',
		'person_alias_id' => 'int',
		'person_end_date' => 'datetime',
		'person_entity' => 'int',
		'person_start_date' => 'datetime',
		'person_status_id' => 'int',
		'person_type_id' => 'int',
		'verified' => 'int'
	];

	protected $fillable = [
		'address_id',
		'assoc',
		'attorney_id',
		'authorized_agent',
		'bureau_id',
		'caretaker',
		'contact_email_id',
		'contact_telephone_id',
		'court_id',
		'department',
		'division',
		'entity_name',
		'first_name',
		'former',
		'gov',
		'individual',
		'is_deceased',
		'last_name',
		'middle_name',
		'p_idaccess',
		'p_sort',
		'person_alias_id',
		'person_end_date',
		'person_entity',
		'person_start_date',
		'person_status_id',
		'person_type_id',
		'sovereign',
		'special_handling_instructions',
		'suffix',
		'verified',
		'created_by',
		'updated_by'
	];

	public function attorney()
	{
		return $this->belongsTo(Attorney::class);
	}

	public function address()
	{
		return $this->belongsTo(Address::class);
	}

	public function bureau()
	{
		return $this->belongsTo(Bureau::class);
	}

	public function contact_email()
	{
		return $this->belongsTo(ContactEmail::class);
	}

	public function contact_telephone()
	{
		return $this->belongsTo(ContactTelephone::class);
	}

	public function court()
	{
		return $this->belongsTo(Court::class);
	}

	public function person_alias()
	{
		return $this->belongsTo(PersonAlias::class);
	}

	public function person_status()
	{
		return $this->belongsTo(PersonStatus::class);
	}

	public function person_type()
	{
		return $this->belongsTo(PersonType::class);
	}

	public function defendant_documents()
	{
		return $this->belongsToMany(DefendantDocument::class, 'defendant_document_persons')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}

	public function global_documents()
	{
		return $this->belongsToMany(GlobalDocument::class, 'global_document_persons')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}

	public function hydrographic_documents()
	{
		return $this->belongsToMany(HydrographicDocument::class, 'hydrographic_document_persons')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}

	public function owner_comments()
	{
		return $this->hasMany(OwnerComment::class);
	}

	public function person_aliases()
	{
		return $this->hasMany(PersonAlias::class);
	}

	public function subfile_owner_histories()
	{
		return $this->hasMany(SubfileOwnerHistory::class);
	}
}
