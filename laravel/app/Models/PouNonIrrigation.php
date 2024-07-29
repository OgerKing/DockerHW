<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PouNonIrrigation
 * 
 * @property int $id
 * @property int|null $pou_id
 * @property int|null $arcgis_processing_id
 * @property string $map_id_desc
 * @property string $zone
 * @property int $r_id_access
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property ArcgisProcessing|null $arcgis_processing
 *
 * @package App\Models
 */
class PouNonIrrigation extends Model
{
	protected $table = 'pou_non_irrigations';

	protected $casts = [
		'pou_id' => 'int',
		'arcgis_processing_id' => 'int',
		'r_id_access' => 'int'
	];

	protected $fillable = [
		'pou_id',
		'arcgis_processing_id',
		'map_id_desc',
		'zone',
		'r_id_access',
		'created_by',
		'updated_by'
	];

	public function arcgis_processing()
	{
		return $this->belongsTo(ArcgisProcessing::class);
	}
}
