<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Xydatum
 * 
 * @property int $id
 * @property string $xydatum_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class Xydatum extends Model
{
    use HasFactory;

	protected $table = 'xydatums';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'xydatum_description',
		'created_by',
		'updated_by'
	];
}
