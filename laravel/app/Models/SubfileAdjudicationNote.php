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
 * Class SubfileAdjudicationNote
 * 
 * @property int $id
 * @property int $subfile_id
 * @property string $subfile_adjudication_note
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
class SubfileAdjudicationNote extends Model
{
    use HasFactory;

	protected $table = 'subfile_adjudication_notes';

	protected $casts = [
		'subfile_id' => 'int'
	];

	protected $fillable = [
		'subfile_id',
		'subfile_adjudication_note',
		'created_by',
		'updated_by'
	];

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function subfiles()
	{
		return $this->hasMany(Subfile::class);
	}
}
