<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WratsUserEmailNotification
 * 
 * @property int $id
 * @property int $wrats_user_id
 * @property string $email_sent_address
 * @property Carbon $email_sent_at
 * @property string $email_sent_subject
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property WratsUser $wrats_user
 *
 * @package App\Models
 */
class WratsUserEmailNotification extends Model
{
    use HasFactory;

	protected $table = 'wrats_user_email_notifications';

	protected $casts = [
		'wrats_user_id' => 'int',
		'email_sent_at' => 'datetime'
	];

	protected $fillable = [
		'wrats_user_id',
		'email_sent_address',
		'email_sent_at',
		'email_sent_subject',
		'created_by',
		'updated_by'
	];

	public function wrats_user()
	{
		return $this->belongsTo(WratsUser::class);
	}
}
