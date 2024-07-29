<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WaterRight
 * 
 * @property int $id
 * @property int $subfile_id
 * @property int $surf_zone_id
 * @property int $water_right_use_id
 * @property int $amount_category_id
 * @property int $water_source_id
 * @property int $hs_recommendation_id
 * @property int $water_right_status_id
 * @property int $right_status_id
 * @property int $purpose_of_use_category_id
 * @property int $specific_purpose_of_use_id
 * @property int $detailed_purpose_of_use_id
 * @property string $hs_recommend
 * @property string $hs_doc_heading
 * @property string $purpose_txt
 * @property string $ose_file
 * @property float $water_duty
 * @property string $amount_txt
 * @property float $div_rt_hl
 * @property float $cfs
 * @property float $con_water_use
 * @property float $surface_area
 * @property float $depth
 * @property float $volume
 * @property string $work_notes
 * @property string $hs_pou_notes
 * @property int|null $no_right
 * @property string $cond
 * @property float $tot_rt_acr
 * @property float $cid_rt_acr
 * @property float $off_rt_acr
 * @property float $off_nr_acr
 * @property int|null $rev_hs_acr
 * @property string $ebid_txt
 * @property int $map_nbr
 * @property float $tx_acres
 * @property float $rt_fdr
 * @property float $rt_prim_gw
 * @property float $annual_evaporative_loss
 * @property string $other_amount_restrictions
 * @property string $offset_indicator
 * @property int $accounting_period_duration
 * @property string $accounting_period_date
 * @property string $right_description
 * @property int $r_id_access
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Subfile $subfile
 * @property AmountCategory $amount_category
 * @property HsRecommendation $hs_recommendation
 * @property WaterRightUs $water_right_us
 * @property WaterSource $water_source
 * @property Collection|Pod[] $pods
 * @property Collection|PouWaterRight[] $pou_water_rights
 * @property Collection|WaterRightComment[] $water_right_comments
 *
 * @package App\Models
 */
class WaterRight extends Model
{
	protected $table = 'water_rights';

	protected $casts = [
		'subfile_id' => 'int',
		'surf_zone_id' => 'int',
		'water_right_use_id' => 'int',
		'amount_category_id' => 'int',
		'water_source_id' => 'int',
		'hs_recommendation_id' => 'int',
		'water_right_status_id' => 'int',
		'right_status_id' => 'int',
		'purpose_of_use_category_id' => 'int',
		'specific_purpose_of_use_id' => 'int',
		'detailed_purpose_of_use_id' => 'int',
		'water_duty' => 'float',
		'div_rt_hl' => 'float',
		'cfs' => 'float',
		'con_water_use' => 'float',
		'surface_area' => 'float',
		'depth' => 'float',
		'volume' => 'float',
		'no_right' => 'int',
		'tot_rt_acr' => 'float',
		'cid_rt_acr' => 'float',
		'off_rt_acr' => 'float',
		'off_nr_acr' => 'float',
		'rev_hs_acr' => 'int',
		'map_nbr' => 'int',
		'tx_acres' => 'float',
		'rt_fdr' => 'float',
		'rt_prim_gw' => 'float',
		'annual_evaporative_loss' => 'float',
		'accounting_period_duration' => 'int',
		'r_id_access' => 'int'
	];

	protected $fillable = [
		'subfile_id',
		'surf_zone_id',
		'water_right_use_id',
		'amount_category_id',
		'water_source_id',
		'hs_recommendation_id',
		'water_right_status_id',
		'right_status_id',
		'purpose_of_use_category_id',
		'specific_purpose_of_use_id',
		'detailed_purpose_of_use_id',
		'hs_recommend',
		'hs_doc_heading',
		'purpose_txt',
		'ose_file',
		'water_duty',
		'amount_txt',
		'div_rt_hl',
		'cfs',
		'con_water_use',
		'surface_area',
		'depth',
		'volume',
		'work_notes',
		'hs_pou_notes',
		'no_right',
		'cond',
		'tot_rt_acr',
		'cid_rt_acr',
		'off_rt_acr',
		'off_nr_acr',
		'rev_hs_acr',
		'ebid_txt',
		'map_nbr',
		'tx_acres',
		'rt_fdr',
		'rt_prim_gw',
		'annual_evaporative_loss',
		'other_amount_restrictions',
		'offset_indicator',
		'accounting_period_duration',
		'accounting_period_date',
		'right_description',
		'r_id_access',
		'created_by',
		'updated_by'
	];

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function amount_category()
	{
		return $this->belongsTo(AmountCategory::class);
	}

	public function hs_recommendation()
	{
		return $this->belongsTo(HsRecommendation::class);
	}

	public function water_right_us()
	{
		return $this->belongsTo(WaterRightUs::class, 'water_right_use_id');
	}

	public function water_source()
	{
		return $this->belongsTo(WaterSource::class);
	}

	public function pods()
	{
		return $this->belongsToMany(Pod::class, 'pod_water_rights')
					->withPivot('id', 'priority_date_id', 'acres_pri', 'acre_ft_pri', 'percent_cfs', 'created_by', 'updated_by')
					->withTimestamps();
	}

	public function pou_water_rights()
	{
		return $this->hasMany(PouWaterRight::class);
	}

	public function water_right_comments()
	{
		return $this->hasMany(WaterRightComment::class);
	}
}
