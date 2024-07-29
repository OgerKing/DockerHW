<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WaterRightComment
 * 
 * @property int $id
 * @property int $water_right_id
 * @property int $water_right_comment_category_id
 * @property string $water_right_comment
 * @property string $ose_resource
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property WaterRightCommentCategory $water_right_comment_category
 * @property WaterRight $water_right
 *
 * @package App\Models
 */
class WaterRightComment extends Model
{
	protected $table = 'water_right_comments';

	protected $casts = [
		'water_right_id' => 'int',
		'water_right_comment_category_id' => 'int'
	];

	protected $fillable = [
		'water_right_id',
		'water_right_comment_category_id',
		'water_right_comment',
		'ose_resource',
		'created_by',
		'updated_by'
	];

	public function water_right_comment_category()
	{
		return $this->belongsTo(WaterRightCommentCategory::class);
	}

	public function water_right()
	{
		return $this->belongsTo(WaterRight::class);
	}
}
