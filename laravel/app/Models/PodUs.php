<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PodUs
 * 
 * @property int $id
 * @property string $description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class PodUs extends Model
{
    use HasFactory;

	protected $table = 'pod_uses';

	protected $fillable = [
		'description',
		'created_by',
		'updated_by'
	];
}
