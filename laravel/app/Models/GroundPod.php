<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GroundPod
 * 
 * @property int $id
 * @property int $arcgis_processing_id
 * @property int $pod_id
 * @property string $ground_pod_source_text
 * @property string $pump_code
 * @property string $power_source
 * @property string $source_ug
 * @property float $diameter_in
 * @property string $dom_map_label
 * @property string $pod_wuc
 * @property Carbon|null $log_filed
 * @property int|null $outside_adjudication_section
 * @property int $irrigation_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property ArcgisProcessing $arcgis_processing
 * @property Irrigation $irrigation
 * @property Pod $pod
 * @property Collection|GroundPodComment[] $ground_pod_comments
 *
 * @package App\Models
 */
class GroundPod extends Model
{
	protected $table = 'ground_pods';

	protected $casts = [
		'arcgis_processing_id' => 'int',
		'pod_id' => 'int',
		'diameter_in' => 'float',
		'log_filed' => 'datetime',
		'outside_adjudication_section' => 'int',
		'irrigation_id' => 'int'
	];

	protected $fillable = [
		'arcgis_processing_id',
		'pod_id',
		'ground_pod_source_text',
		'pump_code',
		'power_source',
		'source_ug',
		'diameter_in',
		'dom_map_label',
		'pod_wuc',
		'log_filed',
		'outside_adjudication_section',
		'irrigation_id',
		'created_by',
		'updated_by'
	];

	public function arcgis_processing()
	{
		return $this->belongsTo(ArcgisProcessing::class);
	}

	public function irrigation()
	{
		return $this->belongsTo(Irrigation::class);
	}

	public function pod()
	{
		return $this->belongsTo(Pod::class);
	}

	public function ground_pod_comments()
	{
		return $this->hasMany(GroundPodComment::class);
	}
}
