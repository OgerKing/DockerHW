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
 * Class Subfile
 * 
 * @property int $id
 * @property int $adjudication_section_id
 * @property int|null $subfile_adjudication_note_id
 * @property int|null $field_check_note_id
 * @property int|null $ose_work_summary_note_id
 * @property int $basin_nbr_hl
 * @property string $basin_section_hl
 * @property float $batch
 * @property int $file_location_id
 * @property int $prev_sub_id
 * @property Carbon $print_file
 * @property bool $selected
 * @property int $sub_file_assigned_ose_attorney_person_id
 * @property Carbon $sub_file_end_date
 * @property string $sub_file_group
 * @property string $sub_file_hl_sfx
 * @property string $sub_file_hl_txt
 * @property int $sub_file_map_nbr
 * @property int $sub_file_parent_id
 * @property float $sub_file_sort
 * @property Carbon $sub_file_start_date
 * @property int $sub_file_type_nbr
 * @property string $sub_file_var_sort
 * @property int $sub_id_access
 * @property string $sub_unk_own
 * @property int $subfile_adjudication_status_id
 * @property int $verified
 * @property Carbon $wrats_status_date
 * @property string $wrats_status_doc
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property SubfileAdjudicationNote|null $subfile_adjudication_note
 * @property AdjudicationSection $adjudication_section
 * @property SubfileAdjudicationStatus $subfile_adjudication_status
 * @property FileLocation $file_location
 * @property SubfileFieldCheckNote|null $subfile_field_check_note
 * @property SubfileOseWorkSummaryNote|null $subfile_ose_work_summary_note
 * @property Collection|AdjudicationDocument[] $adjudication_documents
 * @property Collection|DefendantDocument[] $defendant_documents
 * @property Collection|GlobalDocument[] $global_documents
 * @property Collection|HydrographicDocument[] $hydrographic_documents
 * @property Collection|SubfileAdjudicationNote[] $subfile_adjudication_notes
 * @property Collection|SubfileAttorneyNote[] $subfile_attorney_notes
 * @property Collection|SubfileClaim[] $subfile_claims
 * @property Collection|SubfileFieldCheckNote[] $subfile_field_check_notes
 * @property Collection|SubfileOseWorkSummaryNote[] $subfile_ose_work_summary_notes
 * @property Collection|SubfilePerson[] $subfile_people
 * @property Collection|SubfileUserWatch[] $subfile_user_watches
 * @property Collection|WaterRight[] $water_rights
 * @property Collection|WratsUser[] $wrats_users
 *
 * @package App\Models
 */
class Subfile extends Model
{
    use HasFactory;

	protected $table = 'subfiles';

	protected $casts = [
		'adjudication_section_id' => 'int',
		'subfile_adjudication_note_id' => 'int',
		'field_check_note_id' => 'int',
		'ose_work_summary_note_id' => 'int',
		'basin_nbr_hl' => 'int',
		'batch' => 'float',
		'file_location_id' => 'int',
		'prev_sub_id' => 'int',
		'print_file' => 'datetime',
		'selected' => 'bool',
		'sub_file_assigned_ose_attorney_person_id' => 'int',
		'sub_file_end_date' => 'datetime',
		'sub_file_map_nbr' => 'int',
		'sub_file_parent_id' => 'int',
		'sub_file_sort' => 'float',
		'sub_file_start_date' => 'datetime',
		'sub_file_type_nbr' => 'int',
		'sub_id_access' => 'int',
		'subfile_adjudication_status_id' => 'int',
		'verified' => 'int',
		'wrats_status_date' => 'datetime'
	];

	protected $fillable = [
		'adjudication_section_id',
		'subfile_adjudication_note_id',
		'field_check_note_id',
		'ose_work_summary_note_id',
		'basin_nbr_hl',
		'basin_section_hl',
		'batch',
		'file_location_id',
		'prev_sub_id',
		'print_file',
		'selected',
		'sub_file_assigned_ose_attorney_person_id',
		'sub_file_end_date',
		'sub_file_group',
		'sub_file_hl_sfx',
		'sub_file_hl_txt',
		'sub_file_map_nbr',
		'sub_file_parent_id',
		'sub_file_sort',
		'sub_file_start_date',
		'sub_file_type_nbr',
		'sub_file_var_sort',
		'sub_id_access',
		'sub_unk_own',
		'subfile_adjudication_status_id',
		'verified',
		'wrats_status_date',
		'wrats_status_doc',
		'created_by',
		'updated_by'
	];

	public function subfile_adjudication_note()
	{
		return $this->belongsTo(SubfileAdjudicationNote::class);
	}

	public function adjudication_section()
	{
		return $this->belongsTo(AdjudicationSection::class);
	}

	public function subfile_adjudication_status()
	{
		return $this->belongsTo(SubfileAdjudicationStatus::class);
	}

	public function file_location()
	{
		return $this->belongsTo(FileLocation::class);
	}

	public function subfile_field_check_note()
	{
		return $this->belongsTo(SubfileFieldCheckNote::class, 'field_check_note_id');
	}

	public function subfile_ose_work_summary_note()
	{
		return $this->belongsTo(SubfileOseWorkSummaryNote::class, 'ose_work_summary_note_id');
	}

	public function adjudication_documents()
	{
		return $this->hasMany(AdjudicationDocument::class);
	}

	public function defendant_documents()
	{
		return $this->hasMany(DefendantDocument::class);
	}

	public function global_documents()
	{
		return $this->hasMany(GlobalDocument::class);
	}

	public function hydrographic_documents()
	{
		return $this->hasMany(HydrographicDocument::class);
	}

	public function subfile_adjudication_notes()
	{
		return $this->hasMany(SubfileAdjudicationNote::class);
	}

	public function subfile_attorney_notes()
	{
		return $this->hasMany(SubfileAttorneyNote::class);
	}

	public function subfile_claims()
	{
		return $this->hasMany(SubfileClaim::class);
	}

	public function subfile_field_check_notes()
	{
		return $this->hasMany(SubfileFieldCheckNote::class);
	}

	public function subfile_ose_work_summary_notes()
	{
		return $this->hasMany(SubfileOseWorkSummaryNote::class);
	}

	public function subfile_people()
	{
		return $this->hasMany(SubfilePerson::class);
	}

	public function subfile_user_watches()
	{
		return $this->hasMany(SubfileUserWatch::class);
	}

	public function water_rights()
	{
		return $this->hasMany(WaterRight::class);
	}

	public function wrats_users()
	{
		return $this->belongsToMany(WratsUser::class, 'wrats_user_subfile_notifications')
					->withPivot('id', 'file_location_id', 'created_by', 'updated_by')
					->withTimestamps();
	}
}
