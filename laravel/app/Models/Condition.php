<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Condition
 * 
 * @property int $id
 * @property string $comments
 * @property string $condition_code
 * @property int $adjudication_section_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property AdjudicationSection $adjudication_section
 *
 * @package App\Models
 */
class Condition extends Model
{
	protected $table = 'conditions';

	protected $casts = [
		'adjudication_section_id' => 'int'
	];

	protected $fillable = [
		'comments',
		'condition_code',
		'adjudication_section_id',
		'created_by',
		'updated_by'
	];

	public function adjudication_section()
	{
		return $this->belongsTo(AdjudicationSection::class);
	}
}
