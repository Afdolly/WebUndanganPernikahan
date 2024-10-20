<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'unique_link',    
    ];

    public function guest() {
        return $this->belongsTo(Guest::class);
    }
}
