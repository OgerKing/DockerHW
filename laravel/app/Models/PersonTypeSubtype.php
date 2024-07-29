<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonTypeSubtype
 * 
 * @property int $id
 * @property string $person_type_subtype_name
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 *
 * @package App\Models
 */
class PersonTypeSubtype extends Model
{
    use HasFactory;

	protected $table = 'person_type_subtypes';

	protected $fillable = [
		'person_type_subtype_name',
		'created_by',
		'updated_by'
	];
}
