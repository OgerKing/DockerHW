<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OwnerComment
 * 
 * @property int $id
 * @property string $comment
 * @property int $contact_email_id
 * @property int $contact_telephone_id
 * @property int $person_id
 * @property int $person_status_id
 * @property int $person_type_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property ContactEmail $contact_email
 * @property ContactTelephone $contact_telephone
 * @property Person $person
 * @property PersonStatus $person_status
 * @property PersonType $person_type
 *
 * @package App\Models
 */
class OwnerComment extends Model
{
	protected $table = 'owner_comments';

	protected $casts = [
		'contact_email_id' => 'int',
		'contact_telephone_id' => 'int',
		'person_id' => 'int',
		'person_status_id' => 'int',
		'person_type_id' => 'int'
	];

	protected $fillable = [
		'comment',
		'contact_email_id',
		'contact_telephone_id',
		'person_id',
		'person_status_id',
		'person_type_id',
		'created_by',
		'updated_by'
	];

	public function contact_email()
	{
		return $this->belongsTo(ContactEmail::class);
	}

	public function contact_telephone()
	{
		return $this->belongsTo(ContactTelephone::class);
	}

	public function person()
	{
		return $this->belongsTo(Person::class);
	}

	public function person_status()
	{
		return $this->belongsTo(PersonStatus::class);
	}

	public function person_type()
	{
		return $this->belongsTo(PersonType::class);
	}
}
