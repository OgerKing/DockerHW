<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdjudicationDocumentType
 * 
 * @property int $id
 * @property string $adjudication_document_type_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|AdjudicationDocumentProgram[] $adjudication_document_programs
 * @property Collection|AdjudicationDocument[] $adjudication_documents
 *
 * @package App\Models
 */
class AdjudicationDocumentType extends Model
{
	protected $table = 'adjudication_document_types';

	protected $fillable = [
		'adjudication_document_type_description',
		'created_by',
		'updated_by'
	];

	public function adjudication_document_programs()
	{
		return $this->hasMany(AdjudicationDocumentProgram::class);
	}

	public function adjudication_documents()
	{
		return $this->hasMany(AdjudicationDocument::class);
	}
}
