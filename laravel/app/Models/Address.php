<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property string $addr1
 * @property string $city_hl
 * @property string $state
 * @property string $zip
 * @property int|null $addr_invalid
 * @property Carbon $addr_update
 * @property string $care_of
 * @property string $home_phn_hl
 * @property string $cell_phn_hl
 * @property string $work_phn_hl
 * @property string $e_mail_hl
 * @property string $p_addr_1
 * @property string $p_city_hl
 * @property string $p_state
 * @property string $p_zip
 * @property int|null $phys_addr_invalid
 * @property int $label_id_access
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|Person[] $people
 * @property Collection|SubfileOwnerHistory[] $subfile_owner_histories
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';

	protected $casts = [
		'addr_invalid' => 'int',
		'addr_update' => 'datetime',
		'phys_addr_invalid' => 'int',
		'label_id_access' => 'int'
	];

	protected $fillable = [
		'addr1',
		'city_hl',
		'state',
		'zip',
		'addr_invalid',
		'addr_update',
		'care_of',
		'home_phn_hl',
		'cell_phn_hl',
		'work_phn_hl',
		'e_mail_hl',
		'p_addr_1',
		'p_city_hl',
		'p_state',
		'p_zip',
		'phys_addr_invalid',
		'label_id_access',
		'created_by',
		'updated_by'
	];

	public function people()
	{
		return $this->hasMany(Person::class);
	}

	public function subfile_owner_histories()
	{
		return $this->hasMany(SubfileOwnerHistory::class);
	}
}
