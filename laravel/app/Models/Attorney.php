<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Attorney
 * 
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string|null $middle_Initial
 * @property string|null $title
 * @property string|null $firm
 * @property string|null $firm_department
 * @property string|null $office_address
 * @property string|null $office_address2
 * @property string|null $office_city
 * @property string|null $office_state
 * @property string|null $office_zip
 * @property string|null $office_phone
 * @property string|null $office_fax
 * @property string|null $office_emai
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|AttorneyList[] $attorney_lists
 * @property Collection|AttorneyListing[] $attorney_listings
 * @property Collection|Person[] $people
 * @property Collection|SubfileClaim[] $subfile_claims
 *
 * @package App\Models
 */
class Attorney extends Model
{
	protected $table = 'attorneys';

	protected $fillable = [
		'last_name',
		'first_name',
		'middle_Initial',
		'title',
		'firm',
		'firm_department',
		'office_address',
		'office_address2',
		'office_city',
		'office_state',
		'office_zip',
		'office_phone',
		'office_fax',
		'office_emai',
		'created_by',
		'updated_by'
	];

	public function attorney_lists()
	{
		return $this->belongsToMany(AttorneyList::class, 'attorney_attorney_lists')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}

	public function attorney_listings()
	{
		return $this->hasMany(AttorneyListing::class);
	}

	public function people()
	{
		return $this->hasMany(Person::class);
	}

	public function subfile_claims()
	{
		return $this->hasMany(SubfileClaim::class);
	}
}
