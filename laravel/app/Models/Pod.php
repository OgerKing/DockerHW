<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pod
 * 
 * @property int $id
 * @property string $s_type_cat
 * @property string $pod_name
 * @property string $pod_subfile
 * @property string $pod_map_txt
 * @property string $pod_tract_txt
 * @property string $qtr_4th
 * @property string $qtr_16th
 * @property string $qtr_64th
 * @property string $sub_sec_txt
 * @property string $sec
 * @property string $tws
 * @property string $rng
 * @property float $x
 * @property float $y
 * @property string $xy_datum
 * @property string $xy_unit_of_measure
 * @property string $zone
 * @property string $map_id_desc
 * @property string $f_photo_nbr
 * @property int $well_define
 * @property Carbon $pod_loc_date
 * @property Carbon $pod_loc_time
 * @property string $plss_description
 * @property int $crew_nbr
 * @property string $point_qual
 * @property float $std_dev
 * @property string $pod_basin
 * @property string $pod_nbr
 * @property string $pod_suffix
 * @property string $ose_file
 * @property string $pod_hl_txt
 * @property string $pod_field_no
 * @property string $lot
 * @property string $pod_location_description
 * @property string $waters_pod_id
 * @property int $s_id_access
 * @property int|null $selected
 * @property string $map_qtr
 * @property float $lat_deg
 * @property float $lat_min
 * @property float $lat_sec
 * @property float $lon_deg
 * @property float $lon_min
 * @property float $lon_sec
 * @property string $location_data_source
 * @property int $arcgis_processing_id
 * @property int $pod_type_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property ArcgisProcessing $arcgis_processing
 * @property PodType $pod_type
 * @property Collection|GroundPod[] $ground_pods
 * @property Collection|PodComment[] $pod_comments
 * @property Collection|WaterRight[] $water_rights
 * @property Collection|SurfacePod[] $surface_pods
 *
 * @package App\Models
 */
class Pod extends Model
{
	protected $table = 'pods';

	protected $casts = [
		'x' => 'float',
		'y' => 'float',
		'well_define' => 'int',
		'pod_loc_date' => 'datetime',
		'pod_loc_time' => 'datetime',
		'crew_nbr' => 'int',
		'std_dev' => 'float',
		's_id_access' => 'int',
		'selected' => 'int',
		'lat_deg' => 'float',
		'lat_min' => 'float',
		'lat_sec' => 'float',
		'lon_deg' => 'float',
		'lon_min' => 'float',
		'lon_sec' => 'float',
		'arcgis_processing_id' => 'int',
		'pod_type_id' => 'int'
	];

	protected $fillable = [
		's_type_cat',
		'pod_name',
		'pod_subfile',
		'pod_map_txt',
		'pod_tract_txt',
		'qtr_4th',
		'qtr_16th',
		'qtr_64th',
		'sub_sec_txt',
		'sec',
		'tws',
		'rng',
		'x',
		'y',
		'xy_datum',
		'xy_unit_of_measure',
		'zone',
		'map_id_desc',
		'f_photo_nbr',
		'well_define',
		'pod_loc_date',
		'pod_loc_time',
		'plss_description',
		'crew_nbr',
		'point_qual',
		'std_dev',
		'pod_basin',
		'pod_nbr',
		'pod_suffix',
		'ose_file',
		'pod_hl_txt',
		'pod_field_no',
		'lot',
		'pod_location_description',
		'waters_pod_id',
		's_id_access',
		'selected',
		'map_qtr',
		'lat_deg',
		'lat_min',
		'lat_sec',
		'lon_deg',
		'lon_min',
		'lon_sec',
		'location_data_source',
		'arcgis_processing_id',
		'pod_type_id',
		'created_by',
		'updated_by'
	];

	public function arcgis_processing()
	{
		return $this->belongsTo(ArcgisProcessing::class);
	}

	public function pod_type()
	{
		return $this->belongsTo(PodType::class);
	}

	public function ground_pods()
	{
		return $this->hasMany(GroundPod::class);
	}

	public function pod_comments()
	{
		return $this->hasMany(PodComment::class);
	}

	public function water_rights()
	{
		return $this->belongsToMany(WaterRight::class, 'pod_water_rights')
					->withPivot('id', 'priority_date_id', 'acres_pri', 'acre_ft_pri', 'percent_cfs', 'created_by', 'updated_by')
					->withTimestamps();
	}

	public function surface_pods()
	{
		return $this->hasMany(SurfacePod::class);
	}
}
