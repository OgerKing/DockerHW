<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubfileEditType
 * 
 * @property int $id
 * @property string $edit_desc
 * @property string $edit_type
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class SubfileEditType extends Model
{
    use HasFactory;

	protected $table = 'subfile_edit_types';

	protected $fillable = [
		'edit_desc',
		'edit_type',
		'created_by',
		'updated_by'
	];
}
