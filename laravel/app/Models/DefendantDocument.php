<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DefendantDocument
 * 
 * @property int $id
 * @property string $document_title
 * @property int $subfile_id
 * @property Carbon $document_filing_date
 * @property string $attachment_link
 * @property int $defendant_document_type_id
 * @property int|null $defendant
 * @property string $docket_id
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property DefendantDocumentsType $defendant_documents_type
 * @property Subfile $subfile
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class DefendantDocument extends Model
{
	protected $table = 'defendant_documents';

	protected $casts = [
		'subfile_id' => 'int',
		'document_filing_date' => 'datetime',
		'defendant_document_type_id' => 'int',
		'defendant' => 'int'
	];

	protected $fillable = [
		'document_title',
		'subfile_id',
		'document_filing_date',
		'attachment_link',
		'defendant_document_type_id',
		'defendant',
		'docket_id',
		'created_by',
		'updated_by'
	];

	public function defendant_documents_type()
	{
		return $this->belongsTo(DefendantDocumentsType::class, 'defendant_document_type_id');
	}

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function people()
	{
		return $this->belongsToMany(Person::class, 'defendant_document_persons')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}
}
