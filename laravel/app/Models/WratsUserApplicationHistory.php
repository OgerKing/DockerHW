<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WratsUserApplicationHistory extends Model
{
    use HasFactory;
    protected $table = 'wrats_user_application_history';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label',
        'parameters',
        'path',
        'record_type',
        'users_id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parameters' => 'string',
        'path' => 'string',
        'record_type' => 'string',
        'user_id' => 'integer',
        'created_at' => 'datetime'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
