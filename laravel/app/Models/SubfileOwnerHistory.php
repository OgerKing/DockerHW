<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubfileOwnerHistory
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $contact_email_id
 * @property int $contact_telephone_id
 * @property string $created_by
 * @property int $defendant_type_id
 * @property int $address_id
 * @property int $person_id
 * @property int $person_interest_type_id
 * @property int $prev_oid
 * @property int $subfile_persons_id
 * @property Carbon $trans_date
 * @property int $transaction_id
 * @property string $updated_by
 * 
 * @property ContactEmail $contact_email
 * @property ContactTelephone $contact_telephone
 * @property DefendantType $defendant_type
 * @property Address $address
 * @property Person $person
 * @property PersonInterestType $person_interest_type
 * @property SubfilePerson $subfile_person
 *
 * @package App\Models
 */
class SubfileOwnerHistory extends Model
{
    use HasFactory;

	protected $table = 'subfile_owner_histories';

	protected $casts = [
		'contact_email_id' => 'int',
		'contact_telephone_id' => 'int',
		'defendant_type_id' => 'int',
		'address_id' => 'int',
		'person_id' => 'int',
		'person_interest_type_id' => 'int',
		'prev_oid' => 'int',
		'subfile_persons_id' => 'int',
		'trans_date' => 'datetime',
		'transaction_id' => 'int'
	];

	protected $fillable = [
		'contact_email_id',
		'contact_telephone_id',
		'created_by',
		'defendant_type_id',
		'address_id',
		'person_id',
		'person_interest_type_id',
		'prev_oid',
		'subfile_persons_id',
		'trans_date',
		'transaction_id',
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

	public function defendant_type()
	{
		return $this->belongsTo(DefendantType::class);
	}

	public function address()
	{
		return $this->belongsTo(Address::class);
	}

	public function person()
	{
		return $this->belongsTo(Person::class);
	}

	public function person_interest_type()
	{
		return $this->belongsTo(PersonInterestType::class);
	}

	public function subfile_person()
	{
		return $this->belongsTo(SubfilePerson::class, 'subfile_persons_id');
	}
}
