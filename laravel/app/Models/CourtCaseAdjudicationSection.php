<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourtCaseAdjudicationSection extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'court_case_id',
        'adjudication_section_id',
        'created_by',
        'updated_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'court_case_id' => 'integer',
        'adjudication_section_id' => 'integer',
    ];

    public function courtCase(): BelongsTo
    {
        return $this->belongsTo(CourtCase::class);
    }

    public function adjudicationSection(): BelongsTo
    {
        return $this->belongsTo(\App\Models\CourtCaseAdjudicationSection::class);
    }
}
