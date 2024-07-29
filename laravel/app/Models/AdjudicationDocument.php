<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdjudicationDocument
 * 
 * @property int $id
 * @property int $subfile_id
 * @property string $adjudication_document_code
 * @property string $adjudication_document_title
 * @property Carbon $document_filing_date
 * @property string $attachment_link
 * @property int $adjudication_document_type_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property AdjudicationDocumentType $adjudication_document_type
 * @property Subfile $subfile
 * @property Collection|AdjudicationDocumentProgram[] $adjudication_document_programs
 *
 * @package App\Models
 */
class AdjudicationDocument extends Model
{
	protected $table = 'adjudication_documents';

	protected $casts = [
		'subfile_id' => 'int',
		'document_filing_date' => 'datetime',
		'adjudication_document_type_id' => 'int'
	];

	protected $fillable = [
		'subfile_id',
		'adjudication_document_code',
		'adjudication_document_title',
		'document_filing_date',
		'attachment_link',
		'adjudication_document_type_id',
		'created_by',
		'updated_by'
	];

	public function adjudication_document_type()
	{
		return $this->belongsTo(AdjudicationDocumentType::class);
	}

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function adjudication_document_programs()
	{
		return $this->hasMany(AdjudicationDocumentProgram::class);
	}
}
