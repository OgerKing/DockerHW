<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WaterRightCommentCategory
 * 
 * @property int $id
 * @property string $category_name
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|WaterRightComment[] $water_right_comments
 *
 * @package App\Models
 */
class WaterRightCommentCategory extends Model
{
	protected $table = 'water_right_comment_categories';

	protected $fillable = [
		'category_name',
		'created_by',
		'updated_by'
	];

	public function water_right_comments()
	{
		return $this->hasMany(WaterRightComment::class);
	}
}
