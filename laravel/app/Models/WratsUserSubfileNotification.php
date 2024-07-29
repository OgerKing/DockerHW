<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WratsUserSubfileNotification
 * 
 * @property int $id
 * @property int $wrats_user_id
 * @property int $subfile_id
 * @property int $file_location_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property FileLocation $file_location
 * @property Subfile $subfile
 * @property WratsUser $wrats_user
 *
 * @package App\Models
 */
class WratsUserSubfileNotification extends Model
{
    use HasFactory;

	protected $table = 'wrats_user_subfile_notifications';

	protected $casts = [
		'wrats_user_id' => 'int',
		'subfile_id' => 'int',
		'file_location_id' => 'int'
	];

	protected $fillable = [
		'wrats_user_id',
		'subfile_id',
		'file_location_id',
		'created_by',
		'updated_by'
	];

	public function file_location()
	{
		return $this->belongsTo(FileLocation::class);
	}

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function wrats_user()
	{
		return $this->belongsTo(WratsUser::class);
	}
}
