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
 * Class ReportGroup
 * 
 * @property int $id
 * @property string $group_name
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|Report[] $reports
 *
 * @package App\Models
 */
class ReportGroup extends Model
{
    use HasFactory;

	protected $table = 'report_groups';

	protected $fillable = [
		'group_name',
		'created_by',
		'updated_by'
	];

	public function reports()
	{
		return $this->hasMany(Report::class);
	}
}
