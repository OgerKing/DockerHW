<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DefendantDocumentPerson
 * 
 * @property int $id
 * @property int $defendant_document_id
 * @property int $person_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property DefendantDocument $defendant_document
 * @property Person $person
 *
 * @package App\Models
 */
class DefendantDocumentPerson extends Model
{
    use HasFactory;

	protected $table = 'defendant_document_persons';

	protected $casts = [
		'defendant_document_id' => 'int',
		'person_id' => 'int'
	];

	protected $fillable = [
		'defendant_document_id',
		'person_id',
		'created_by',
		'updated_by'
	];

	public function defendant_document()
	{
		return $this->belongsTo(DefendantDocument::class);
	}

	public function person()
	{
		return $this->belongsTo(Person::class);
	}
}
