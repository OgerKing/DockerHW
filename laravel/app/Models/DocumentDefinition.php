<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentDefinition
 * 
 * @property int $id
 * @property string $created_by
 * @property int $def_doc_sort
 * @property int $def_doc_status
 * @property string $definition
 * @property string $document_definition_name
 * @property string $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class DocumentDefinition extends Model
{
	protected $table = 'document_definitions';

	protected $casts = [
		'def_doc_sort' => 'int',
		'def_doc_status' => 'int'
	];

	protected $fillable = [
		'created_by',
		'def_doc_sort',
		'def_doc_status',
		'definition',
		'document_definition_name',
		'updated_by'
	];
}
