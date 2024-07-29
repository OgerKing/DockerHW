<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adjudication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adjudication_name',
        'adjudication_nickname',
        'bureau_id',
        'adjudication_status_id',
        'adjudication_district_id',
        'coordinate_system',
        'adjudication_boundary_map_link',
        'hydrographic_survey_description',
        'prefix',
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
        'bureau_id' => 'integer',
        'adjudication_status_id' => 'integer',
        'adjudication_district_id' => 'integer',
    ];

    public function bureau(): BelongsTo
    {
        return $this->belongsTo(Bureau::class);
    }

    public function adjudicationStatus(): BelongsTo
    {
        return $this->belongsTo(AdjudicationStatus::class);
    }

    public function adjudicationDistrict(): BelongsTo
    {
        return $this->belongsTo(AdjudicationDistrict::class);
    }
}
