<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FileLocation
 * 
 * @property int $id
 * @property string $file_location_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|Subfile[] $subfiles
 * @property Collection|WratsUserSubfileNotification[] $wrats_user_subfile_notifications
 *
 * @package App\Models
 */
class FileLocation extends Model
{
	protected $table = 'file_locations';

	protected $fillable = [
		'file_location_description',
		'created_by',
		'updated_by'
	];

	public function subfiles()
	{
		return $this->hasMany(Subfile::class);
	}

	public function wrats_user_subfile_notifications()
	{
		return $this->hasMany(WratsUserSubfileNotification::class);
	}
}
