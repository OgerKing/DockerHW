<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlobalDocument
 * 
 * @property int $id
 * @property int $subfile_id
 * @property string $global_document_title
 * @property Carbon $document_filing_date
 * @property string $attachment_link
 * @property int $global_document_type_id
 * @property string $docket_id
 * @property string $global_desc
 * @property int $global_id_access
 * @property Carbon|null $created_at
 * @property string $created_by
 * @property Carbon|null $updated_at
 * @property string $updated_by
 * 
 * @property GlobalDocumentType $global_document_type
 * @property Subfile $subfile
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class GlobalDocument extends Model
{
	protected $table = 'global_documents';

	protected $casts = [
		'subfile_id' => 'int',
		'document_filing_date' => 'datetime',
		'global_document_type_id' => 'int',
		'global_id_access' => 'int'
	];

	protected $fillable = [
		'subfile_id',
		'global_document_title',
		'document_filing_date',
		'attachment_link',
		'global_document_type_id',
		'docket_id',
		'global_desc',
		'global_id_access',
		'created_by',
		'updated_by'
	];

	public function global_document_type()
	{
		return $this->belongsTo(GlobalDocumentType::class);
	}

	public function subfile()
	{
		return $this->belongsTo(Subfile::class);
	}

	public function people()
	{
		return $this->belongsToMany(Person::class, 'global_document_persons')
					->withPivot('id', 'created_by', 'updated_by')
					->withTimestamps();
	}
}
