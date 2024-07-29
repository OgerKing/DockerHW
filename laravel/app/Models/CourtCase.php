<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourtCase
 * 
 * @property int $id
 * @property int $court_id
 * @property string|null $case_number
 * @property string|null $case_name
 * @property string|null $court_docket_link
 * @property string|null $docket_number
 * @property int|null $court_judge_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Court $court
 * @property CourtPersonnel|null $court_personnel
 * @property Collection|AdjudicationDocumentProgram[] $adjudication_document_programs
 * @property Collection|AdjudicationSection[] $adjudication_sections
 *
 * @package App\Models
 */
class CourtCase extends Model
{
    use HasFactory;

	protected $table = 'court_cases';

	protected $casts = [
		'court_id' => 'int',
		'court_judge_id' => 'int'
	];

	protected $fillable = [
		'court_id',
		'case_number',
		'case_name',
		'court_docket_link',
		'docket_number',
		'court_judge_id',
		'created_by',
		'updated_by'
	];

	public function court()
	{
		return $this->belongsTo(Court::class);
	}

	public function court_personnel()
	{
		return $this->belongsTo(CourtPersonnel::class, 'court_judge_id');
	}

	public function adjudication_document_programs()
	{
		return $this->hasMany(AdjudicationDocumentProgram::class);
	}

	public function adjudication_sections()
	{
		return $this->belongsToMany(AdjudicationSection::class, 'court_case_adjudication_sections')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}
}
