<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubfileCaseStatus
 * 
 * @property int $id
 * @property string $subfile_case_status_descrip
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class SubfileCaseStatus extends Model
{
    use HasFactory;

	protected $table = 'subfile_case_statuses';

	protected $fillable = [
		'subfile_case_status_descrip',
		'created_by',
		'updated_by'
	];
}
