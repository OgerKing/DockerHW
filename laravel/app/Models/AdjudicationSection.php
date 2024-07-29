<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdjudicationSection
 * 
 * @property int $id
 * @property int $adjudication_id
 * @property string $adjudication_section_name
 * @property string|null $prefix
 * @property int $adjudication_section_type_id
 * @property int $adjudication_section_status_id
 * @property int $water_source_id
 * @property string|null $boundary_name
 * @property string|null $basin_section
 * @property int|null $extra_sub_file_tab
 * @property int|null $show_estate
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Adjudication $adjudication
 * @property WaterSource $water_source
 * @property AdjudicationSectionStatus $adjudication_section_status
 * @property AdjudicationSectionType $adjudication_section_type
 * @property Collection|AdjudicationDocumentProgram[] $adjudication_document_programs
 * @property Collection|ArcgisProcessing[] $arcgis_processings
 * @property Collection|Condition[] $conditions
 * @property Collection|CourtCase[] $court_cases
 * @property Collection|QuarterReportSortOrder[] $quarter_report_sort_orders
 * @property Collection|Subfile[] $subfiles
 *
 * @package App\Models
 */
class AdjudicationSection extends Model
{
	protected $table = 'adjudication_sections';

	protected $casts = [
		'adjudication_id' => 'int',
		'adjudication_section_type_id' => 'int',
		'adjudication_section_status_id' => 'int',
		'water_source_id' => 'int',
		'extra_sub_file_tab' => 'int',
		'show_estate' => 'int'
	];

	protected $fillable = [
		'adjudication_id',
		'adjudication_section_name',
		'prefix',
		'adjudication_section_type_id',
		'adjudication_section_status_id',
		'water_source_id',
		'boundary_name',
		'basin_section',
		'extra_sub_file_tab',
		'show_estate',
		'created_by',
		'updated_by'
	];

	public function adjudication()
	{
		return $this->belongsTo(Adjudication::class);
	}

	public function water_source()
	{
		return $this->belongsTo(WaterSource::class);
	}

	public function adjudication_section_status()
	{
		return $this->belongsTo(AdjudicationSectionStatus::class);
	}

	public function adjudication_section_type()
	{
		return $this->belongsTo(AdjudicationSectionType::class);
	}

	public function adjudication_document_programs()
	{
		return $this->hasMany(AdjudicationDocumentProgram::class, 'adjudication_sections_id');
	}

	public function arcgis_processings()
	{
		return $this->hasMany(ArcgisProcessing::class);
	}

	public function conditions()
	{
		return $this->hasMany(Condition::class);
	}

	public function court_cases()
	{
		return $this->belongsToMany(CourtCase::class, 'court_case_adjudication_sections')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}

	public function quarter_report_sort_orders()
	{
		return $this->hasMany(QuarterReportSortOrder::class, 'adjudications_section_id');
	}

	public function subfiles()
	{
		return $this->hasMany(Subfile::class);
	}
}
