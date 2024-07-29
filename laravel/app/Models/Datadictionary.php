<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Datadictionary
 * 
 * @property int|null $ID#
 * @property string|null $TABLE_NAME
 * @property string|null $FIELD_NAME
 * @property string|null $RECOMMENDED_LABEL_S_
 * @property string|null $FIELD_DATA_TYPE
 * @property string|null $FIELD_DESCRIPTION
 * @property string|null $IS_FK
 * @property string|null $IS_PK
 * @property string|null $NULL_OPTION
 * @property string|null $ACCEPTABLE ENTRIES
 * @property string|null $TOOL_TIPS
 * @property string|null $f12
 *
 * @package App\Models
 */
class Datadictionary extends Model
{
    use HasFactory;

	protected $table = 'datadictionary';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID#' => 'int'
	];

	protected $fillable = [
		'ID#',
		'TABLE_NAME',
		'FIELD_NAME',
		'RECOMMENDED_LABEL_S_',
		'FIELD_DATA_TYPE',
		'FIELD_DESCRIPTION',
		'IS_FK',
		'IS_PK',
		'NULL_OPTION',
		'ACCEPTABLE ENTRIES',
		'TOOL_TIPS',
		'f12'
	];
}
