<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DefendantDocumentsType
 * 
 * @property int $id
 * @property string $defendant_document_type_code
 * @property string $defendant_document_type_description
 * @property int|null $offer_exclude
 * @property string $report
 * @property int $sort
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|DefendantDocument[] $defendant_documents
 *
 * @package App\Models
 */
class DefendantDocumentsType extends Model
{
	protected $table = 'defendant_documents_types';

	protected $casts = [
		'offer_exclude' => 'int',
		'sort' => 'int'
	];

	protected $fillable = [
		'defendant_document_type_code',
		'defendant_document_type_description',
		'offer_exclude',
		'report',
		'sort',
		'created_by',
		'updated_by'
	];

	public function defendant_documents()
	{
		return $this->hasMany(DefendantDocument::class, 'defendant_document_type_id');
	}
}
