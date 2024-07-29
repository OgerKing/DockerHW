<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportCriteria
 * 
 * @property int $id
 * @property int $report_id
 * @property bool $is_required
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Report $report
 *
 * @package App\Models
 */
class ReportCriteria extends Model
{
    use HasFactory;

	protected $table = 'report_criterias';

	protected $casts = [
		'report_id' => 'int',
		'is_required' => 'bool'
	];

	protected $fillable = [
		'report_id',
		'is_required',
		'created_by',
		'updated_by'
	];

	public function report()
	{
		return $this->belongsTo(Report::class);
	}
}
