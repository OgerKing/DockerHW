<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BureauUser
 * 
 * @property int $id
 * @property int $bureau_id
 * @property int $gis_duplicate_id
 * @property string $login_name
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Bureau $bureau
 * @property GisDuplicate $gis_duplicate
 *
 * @package App\Models
 */
class BureauUser extends Model
{
    use HasFactory;

	protected $table = 'bureau_users';

	protected $casts = [
		'bureau_id' => 'int',
		'gis_duplicate_id' => 'int'
	];

	protected $fillable = [
		'bureau_id',
		'gis_duplicate_id',
		'login_name',
		'created_by',
		'updated_by'
	];

	public function bureau()
	{
		return $this->belongsTo(Bureau::class);
	}

	public function gis_duplicate()
	{
		return $this->belongsTo(GisDuplicate::class);
	}
}
