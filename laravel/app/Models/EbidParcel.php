<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EbidParcel
 * 
 * @property int $id
 * @property int $ebid_id
 * @property int $r_id
 * @property int $parcel_num
 * @property float $parcel_acres
 * @property int $subfile_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class EbidParcel extends Model
{
	protected $table = 'ebid_parcels';

	protected $casts = [
		'ebid_id' => 'int',
		'r_id' => 'int',
		'parcel_num' => 'int',
		'parcel_acres' => 'float',
		'subfile_id' => 'int'
	];

	protected $fillable = [
		'ebid_id',
		'r_id',
		'parcel_num',
		'parcel_acres',
		'subfile_id',
		'created_by',
		'updated_by'
	];
}
