<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class APIKey extends Model
{
    use HasFactory;

    protected $table = 'api_keys';

    protected $fillable = [
        'key',
        'valid_until',
        'created_at',
        'note'
    ];
}