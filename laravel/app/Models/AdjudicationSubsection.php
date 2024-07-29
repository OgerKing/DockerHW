<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdjudicationSubsection
 * 
 * @property int $id
 * @property int $parent_adjudication_subsection_id
 * @property int $child_adjudication_subsection_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property AdjudicationSubsection $adjudication_subsection
 * @property Collection|AdjudicationSubsection[] $adjudication_subsections
 *
 * @package App\Models
 */
class AdjudicationSubsection extends Model
{
	protected $table = 'adjudication_subsections';

	protected $casts = [
		'parent_adjudication_subsection_id' => 'int',
		'child_adjudication_subsection_id' => 'int'
	];

	protected $fillable = [
		'parent_adjudication_subsection_id',
		'child_adjudication_subsection_id',
		'created_by',
		'updated_by'
	];

	public function adjudication_subsection()
	{
		return $this->belongsTo(AdjudicationSubsection::class, 'parent_adjudication_subsection_id');
	}

	public function adjudication_subsections()
	{
		return $this->hasMany(AdjudicationSubsection::class, 'parent_adjudication_subsection_id');
	}
}
