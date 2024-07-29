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
 * Class SubfileOseWorkSummaryNote
 * 
 * @property int $id
 * @property int $subfile_id
 * @property string $subfile_ose_work_summary_note
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Subfile $subfile
 * @property Collection|Subfile[] $subfiles
 *
 * @package App\Models
 */
class SubfileOseWorkSummaryNote extends Model
{
    use HasFactory;

	protected $table = 'subfile_ose_work_summary_notes';

	protected $casts = [
		'subfile_id' => 'int'
	];

	protected $fillable = [
		'subfile_id',
		'subfile_ose_work_summary_note',
		'created_by',
		'updated_by'
	];

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function subfiles()
	{
		return $this->hasMany(Subfile::class, 'ose_work_summary_note_id');
	}
}