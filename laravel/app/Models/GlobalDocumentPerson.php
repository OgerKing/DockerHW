<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlobalDocumentPerson
 * 
 * @property int $id
 * @property int $global_document_id
 * @property int $person_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property GlobalDocument $global_document
 * @property Person $person
 *
 * @package App\Models
 */
class GlobalDocumentPerson extends Model
{
    use HasFactory;

	protected $table = 'global_document_persons';

	protected $casts = [
		'global_document_id' => 'int',
		'person_id' => 'int'
	];

	protected $fillable = [
		'global_document_id',
		'person_id',
		'created_by',
		'updated_by'
	];

	public function global_document()
	{
		return $this->belongsTo(GlobalDocument::class);
	}

	public function person()
	{
		return $this->belongsTo(Person::class);
	}
}
