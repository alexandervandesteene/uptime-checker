<?php

namespace App\Models;

use App\Enums\CheckStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'result' => 'array',
        'completed_at' => 'datetime',
        'status' => CheckStatus::class,
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}

