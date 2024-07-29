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
 * Class SubfilePerson
 * 
 * @property int $id
 * @property int $subfile_id
 * @property Carbon|null $case_close_date
 * @property string $case_number
 * @property Carbon|null $case_open_date
 * @property string $category
 * @property int $cert_mail
 * @property string $cid_no
 * @property int $contact_email_id
 * @property int $court_id
 * @property int $contact_telephone_id
 * @property string $created_by
 * @property int $court_number
 * @property bool|null $is_defendant
 * @property bool|null $is_permittee
 * @property int $defendant_type_id
 * @property int|null $is_case_number_invalid
 * @property int $mailing_address_id
 * @property string $owner_set
 * @property int $person_interest_type_id
 * @property int $person_legal_interest_type_id
 * @property int $person_status_id
 * @property int $person_type_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Subfile $subfile
 * @property ContactEmail $contact_email
 * @property ContactTelephone $contact_telephone
 * @property PersonInterestType $person_interest_type
 * @property PersonLegalInterestType $person_legal_interest_type
 * @property PersonStatus $person_status
 * @property PersonType $person_type
 * @property Collection|SubfileOwnerHistory[] $subfile_owner_histories
 *
 * @package App\Models
 */
class SubfilePerson extends Model
{
    use HasFactory;

	protected $table = 'subfile_persons';

	protected $casts = [
		'subfile_id' => 'int',
		'case_close_date' => 'datetime',
		'case_open_date' => 'datetime',
		'cert_mail' => 'int',
		'contact_email_id' => 'int',
		'court_id' => 'int',
		'contact_telephone_id' => 'int',
		'court_number' => 'int',
		'is_defendant' => 'bool',
		'is_permittee' => 'bool',
		'defendant_type_id' => 'int',
		'is_case_number_invalid' => 'int',
		'mailing_address_id' => 'int',
		'person_interest_type_id' => 'int',
		'person_legal_interest_type_id' => 'int',
		'person_status_id' => 'int',
		'person_type_id' => 'int'
	];

	protected $fillable = [
		'subfile_id',
		'case_close_date',
		'case_number',
		'case_open_date',
		'category',
		'cert_mail',
		'cid_no',
		'contact_email_id',
		'court_id',
		'contact_telephone_id',
		'created_by',
		'court_number',
		'is_defendant',
		'is_permittee',
		'defendant_type_id',
		'is_case_number_invalid',
		'mailing_address_id',
		'owner_set',
		'person_interest_type_id',
		'person_legal_interest_type_id',
		'person_status_id',
		'person_type_id',
		'updated_by'
	];

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function contact_email()
	{
		return $this->belongsTo(ContactEmail::class);
	}

	public function contact_telephone()
	{
		return $this->belongsTo(ContactTelephone::class);
	}

	public function person_interest_type()
	{
		return $this->belongsTo(PersonInterestType::class);
	}

	public function person_legal_interest_type()
	{
		return $this->belongsTo(PersonLegalInterestType::class);
	}

	public function person_status()
	{
		return $this->belongsTo(PersonStatus::class);
	}

	public function person_type()
	{
		return $this->belongsTo(PersonType::class);
	}

	public function subfile_owner_histories()
	{
		return $this->hasMany(SubfileOwnerHistory::class, 'subfile_persons_id');
	}
}
