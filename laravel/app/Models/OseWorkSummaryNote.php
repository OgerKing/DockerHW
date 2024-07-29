<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OseWorkSummaryNote
 * 
 * @property int $id
 * @property string $notes
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class OseWorkSummaryNote extends Model
{
    use HasFactory;

	protected $table = 'ose_work_summary_notes';

	protected $fillable = [
		'notes',
		'created_by',
		'updated_by'
	];
}
