<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HydrographicDocumentType
 * 
 * @property int $id
 * @property string $hydrographic_document_type_description
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property Collection|HydrographicDocument[] $hydrographic_documents
 *
 * @package App\Models
 */
class HydrographicDocumentType extends Model
{
	protected $table = 'hydrographic_document_types';

	protected $fillable = [
		'hydrographic_document_type_description',
		'created_by',
		'updated_by'
	];

	public function hydrographic_documents()
	{
		return $this->hasMany(HydrographicDocument::class);
	}
}
