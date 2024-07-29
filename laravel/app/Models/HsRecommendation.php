<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HsRecommendation
 * 
 * @property int $id
 * @property string $amount_of_water
 * @property string $hs_recommend
 * @property string $updated_by
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * 
 * @property Collection|WaterRight[] $water_rights
 *
 * @package App\Models
 */
class HsRecommendation extends Model
{
	protected $table = 'hs_recommendations';

	protected $fillable = [
		'amount_of_water',
		'hs_recommend',
		'updated_by',
		'created_by'
	];

	public function water_rights()
	{
		return $this->hasMany(WaterRight::class);
	}
}
