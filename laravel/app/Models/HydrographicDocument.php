<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HydrographicDocument
 * 
 * @property int $id
 * @property int $subfile_id
 * @property string $hydrographic_document_title
 * @property Carbon $hydrographic_document_filing_date
 * @property string $attachment_link
 * @property int $hydrographic_document_type_id
 * @property string $hydrographic_document_owner
 * @property string $hydrographic_document_owner_status
 * @property string $hydrographic_document_owner_type
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property HydrographicDocumentType $hydrographic_document_type
 * @property Subfile $subfile
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class HydrographicDocument extends Model
{
	protected $table = 'hydrographic_documents';

	protected $casts = [
		'subfile_id' => 'int',
		'hydrographic_document_filing_date' => 'datetime',
		'hydrographic_document_type_id' => 'int'
	];

	protected $fillable = [
		'subfile_id',
		'hydrographic_document_title',
		'hydrographic_document_filing_date',
		'attachment_link',
		'hydrographic_document_type_id',
		'hydrographic_document_owner',
		'hydrographic_document_owner_status',
		'hydrographic_document_owner_type',
		'created_by',
		'updated_by'
	];

	public function hydrographic_document_type()
	{
		return $this->belongsTo(HydrographicDocumentType::class);
	}

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function people()
	{
		return $this->belongsToMany(Person::class, 'hydrographic_document_persons')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}
}
